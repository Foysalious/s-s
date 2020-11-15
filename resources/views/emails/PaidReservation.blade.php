@component('mail::message')
<h1> Reservation Success</h1>

<div>
    <h3>
        <b>
            Name
        </b>
    </h3>
    <p>{{ $transaction->reservation['name'] }}</p>
</div>

<div>
    <h3>
        <b>
            Email Address
        </b>
    </h3>
    <p>{{ $transaction->reservation['email'] }}</p>
</div>

<div>
    <h3>
        <b>
            Phone Number
        </b>
    </h3>
    <p>{{ $transaction->reservation['phone'] }}</p>
</div>

<div>
    <h3>
        <b>
            Reservation Date
        </b>
    </h3>
    <p>{{ $transaction->reservation['booking_date'] }}</p>
</div>

<div>
    <h3>
        <b>
            Reservation Time
        </b>
    </h3>
    <p>{{ $transaction->reservation['booking_time'] }}</p>
</div>

<div>
    <h3>
        <b>
            Unique Code
        </b>
    </h3>
    <p>{{ $transaction->reservation['random'] }}</p>
    
</div>

{!! DNS1D::getBarcodeHTML($transaction->reservation['random'], "C128",2.5,50) !!}
 
@endcomponent
