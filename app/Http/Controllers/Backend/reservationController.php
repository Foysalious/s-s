<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReservationMail;
use App\Mail\PaidReservationMail;
use App\Models\BookingTransaction;
use App\Models\config;
use Brian2694\Toastr\Facades\Toastr;
use GuzzleHttp\Client;

class reservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = reservation::orderBy('id','desc')->get();
        return view('backend.pages.reservation.manage',compact('reservations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:11|numeric',
            'booking_date' => 'required',
            'booking_time' => 'required',
            'booking_time' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'adult' => 'required|numeric',
            'child_under_120_cm' => 'required|numeric',
            'child_under_132_cm' => 'required|numeric',
            'payment_method' => 'required'
        ]);

        

        $reservation = new reservation();
        $reservation->name = $request->name;
        $reservation->email = $request->email;
        $reservation->phone = $request->phone;
        $reservation->booking_date = $request->booking_date;
        $reservation->booking_time = $request->booking_time;
        $reservation->adult = $request->adult;
        $reservation->child_under_120_cm = $request->child_under_120_cm;
        $reservation->child_under_132_cm = $request->child_under_132_cm;
        $reservation->city = $request->city;
        $reservation->country = $request->country;
        $reservation->address = $request->address;
        $reservation->message = $request->message;
        $reservation->random = rand(10000,9999999);
        $reservation->payment_method = $request->payment_method;

        $totalAmount =( config::where('name', 'Child Under 120 cm')->first()->price * $reservation->child_under_120_cm) + ($reservation->adult * config::where('name', 'Adult')->first()->price) + ($reservation->child_under_132_cm * config::where('name', 'Child under 132cm')->first()->price);

        if($reservation->save()):
            if( $request->payment_method == 1 ):
                return $this->onSpotPayment($reservation, $totalAmount);
            else:
                return $this->SSLCommerz($totalAmount, $reservation);
            endif;
        endif;

    }

    public function onSpotPayment($reservation, $totalAmount){
        $transaction = new BookingTransaction();
        $transaction->amount = $totalAmount;
        $transaction->reservation_id = $reservation->id;
        $transaction->paid_by = 'Cash';
        $transaction->is_payment_done = false;

        if($transaction->save()):
            
            Mail::to('foysalrahman112@gmail.com')->send(new ReservationMail($reservation));
            Mail::to($reservation->email)->send(new ReservationMail($reservation));

            return response()->json($reservation, 200);
        endif;
    }

    public function SSLCommerz($totalAmount, $reservation){
        $transaction = new BookingTransaction();
        $transaction->amount = $totalAmount;
        $transaction->reservation_id = $reservation->id;
        $transaction->is_payment_done = false;
        $transaction->save();

        $post_data = [
            'store_id'=> 'foysa5fa23b8d44c3b',
            'store_passwd'=> 'foysa5fa23b8d44c3b@ssl',
            'total_amount'=> $totalAmount,
            'tran_id' => $transaction->refresh()->id,
            'currency' => 'BDT',
            'product_category' => 'Due Amount Pay',
            'success_url' => 'http://127.0.0.1:8000/sslcommerz/success',
            'fail_url' => 'http://127.0.0.1:8000/sslcommerz/fail',
            'cancel_url' => 'http://127.0.0.1:8000/sslcommerz/cancel',
            'ipn_url' => 'http://127.0.0.1:8000/sslcommerz/ipn',
            'emi_option' => 0,
            'cus_name' => $reservation->name,
            'cus_email' => $reservation->email,
            'cus_city' => $reservation->city,
            'cus_country' => $reservation->country,
            'cus_add1' => $reservation->address,
            'cus_phone' => $reservation->phone,
            'shipping_method' => 'NO',
            'num_of_item' => 1,
            'product_name' => "Reservation Amount Pay",
            'product_profile' => 'non-physical-goods',
            'value_a' => $reservation->id,
        ];

        $client = new Client();
        $response = $client->post('https://sandbox.sslcommerz.com/gwprocess/v4/api.php', ['form_params'=>$post_data, 'verify'=>false])->getBody();

        $transaction->payment_initiation_server_response = $response->getContents();
        $transaction->save();

        return $transaction->payment_initiation_server_response;
    }

    public function SSLSuccess(Request $request){
        $transaction = BookingTransaction::find($request->get('tran_id'));
        $transaction->payment_validation_server_response = $request->all();
        $transaction->status = 'SUCCESS';
        $transaction->is_payment_done = true;
        $transaction->paid_by = 'Online Payment';

        if($transaction->save()):
            
            return redirect()->route('reservation');
        endif;
    }

    public function SSLFailed(Request $request){
        $transaction = BookingTransaction::find($request->get('tran_id'));
        $transaction->payment_validation_server_response = $request->all();
        $transaction->status = 'FAILED';
        $transaction->is_payment_done = true;
        $transaction->paid_by = 'Online Payment';

        if($transaction->save()):
            Toastr::success('Reservation Failed');
            return redirect()->route('reservation');
        endif;
    }

    public function SSLCancel(Request $request){
        $transaction = BookingTransaction::find($request->get('tran_id'));
        $transaction->payment_validation_server_response = $request->all();
        $transaction->status = 'CANCELLED';
        $transaction->is_payment_done = true;
        $transaction->paid_by = 'Online Payment';

        if($transaction->save()):
            Toastr::success('Reservation Cancelled');
            return redirect()->route('reservation');
        endif;
    }

    public function SSLIpn(Request $request){
        $transaction = BookingTransaction::find($request->get('tran_id'));
        $transaction->payment_validation_server_response = $request->all();

        if($transaction->save()):
            Toastr::success('Ipn validation success');
            return redirect()->route('reservation');
        endif;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
