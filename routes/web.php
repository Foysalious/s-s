<?php

use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\categoryController;
use App\Http\Controllers\Backend\ChefController;
use App\Http\Controllers\Backend\configController;
use App\Http\Controllers\Backend\contactController;
use App\Http\Controllers\Backend\galleryController;
use App\Http\Controllers\Backend\homeSlider;
use App\Http\Controllers\Backend\LogoController;
use App\Http\Controllers\Backend\menuController;
use App\Http\Controllers\Backend\openDayController;
use App\Http\Controllers\Backend\orderController;
use App\Http\Controllers\Backend\reservationController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\specialitiesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\templateController;
use App\Http\Controllers\frontendController;
use App\Mail\reservation;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('/make-reservation', [reservationController::class, 'store'])->name('makeOnSpotReservation');


Route::get('/dashboard', [App\Http\Controllers\templateController::class, 'index'])->name('backend_dashboard');

Route::get('/', [frontendController::class, 'index'])->name('index');
Route::get('/contact', [frontendController::class, 'contact'])->name('contact');
Route::get('/gallery', [frontendController::class, 'gallery'])->name('gallery');
Route::get('/menu', [frontendController::class, 'menu'])->name('menu');
Route::get('/reservation', [frontendController::class, 'reservation'])->name('reservation');
Route::post('addtocart', [frontendController::class, 'addToCart']);
Route::get('cartitem', [frontendController::class, 'cartitem']);
Route::delete('delete/{id}', [frontendController::class, 'delete_cart_item']);
Route::post('/checkout', [frontendController::class, 'checkout'])->name('orderStore');


Auth::routes();


Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('backend_dashboard');
    Route::group(['prefix' => 'logo'], function () {
        Route::get('/', [LogoController::class, 'index'])->name('logoShow');
        Route::post('/store', [LogoController::class, 'store'])->name('logoStore');
        Route::post('/update/{logo:id}', [LogoController::class, 'update'])->name('logoUpdate');
        Route::post('/delete/{logo:id}', [LogoController::class, 'destroy'])->name('logoDelete');
    });

    Route::group(['prefix' => 'slider'], function () {
        Route::get('/', [homeSlider::class, 'index'])->name('sliderShow');
        Route::post('/store', [homeSlider::class, 'store'])->name('sliderStore');
        Route::post('/update/{slider:id}', [homeSlider::class, 'update'])->name('sliderUpdate');
        Route::post('/delete/{slider:id}', [homeSlider::class, 'destroy'])->name('sliderDelete');
    });

    Route::group(['prefix' => 'about'], function () {
        Route::get('/', [AboutController::class, 'index'])->name('aboutShow');
        Route::post('/store', [AboutController::class, 'store'])->name('aboutStore');
        Route::post('/update/{about:id}', [AboutController::class, 'update'])->name('aboutUpdate');
        Route::post('/delete/{about:id}', [AboutController::class, 'destroy'])->name('aboutDelete');
    });

    Route::group(['prefix' => 'hours'], function () {
        Route::get('/', [openDayController::class, 'index'])->name('hoursShow');
        Route::post('/store', [openDayController::class, 'store'])->name('hoursStore');
        Route::post('/update/{hours:id}', [openDayController::class, 'update'])->name('hoursUpdate');
        Route::post('/delete/{hours:id}', [openDayController::class, 'destroy'])->name('hoursDelete');
    });

    Route::group(['prefix' => 'chef'], function () {
        Route::get('/', [ChefController::class, 'index'])->name('chefShow');
        Route::post('/store', [ChefController::class, 'store'])->name('chefStore');
        Route::post('/update/{chef:id}', [ChefController::class, 'update'])->name('chefUpdate');
        Route::post('/delete/{chef:id}', [ChefController::class, 'destroy'])->name('chefDelete');
    });

    Route::group(['prefix' => 'admingallery'], function () {
        Route::get('/', [galleryController::class, 'index'])->name('galleryShow');
        Route::post('/store', [galleryController::class, 'store'])->name('galleryStore');
        Route::post('/update/{gallery:id}', [galleryController::class, 'update'])->name('galleryUpdate');
        Route::post('/delete/{gallery:id}', [galleryController::class, 'destroy'])->name('galleryDelete');
    });

    Route::group(['prefix' => 'category'], function () {
        Route::get('/', [categoryController::class, 'index'])->name('categoryShow');
        Route::post('/store', [categoryController::class, 'store'])->name('categoryStore');
        Route::post('/update/{category:id}', [categoryController::class, 'update'])->name('categoryUpdate');
        Route::post('/delete/{category:id}', [categoryController::class, 'destroy'])->name('categoryDelete');
    });


    Route::group(['prefix' => 'specialization'], function () {
        Route::get('/', [specialitiesController::class, 'index'])->name('specialityShow');
        Route::post('/store', [specialitiesController::class, 'store'])->name('specialityStore');
        Route::post('/update/{specialities:id}', [specialitiesController::class, 'update'])->name('specialityUpdate');
        Route::post('/delete/{specialities:id}', [specialitiesController::class, 'destroy'])->name('specialityDelete');
    });

    Route::group(['prefix' => 'adminmenu'], function () {
        Route::get('/menu', [menuController::class, 'index'])->name('menuShow');
        Route::post('/store', [menuController::class, 'store'])->name('menuStore');
        Route::post('/update/{menu:id}', [menuController::class, 'update'])->name('menuUpdate');
        Route::post('/delete/{menu:id}', [menuController::class, 'destroy'])->name('menuDelete');
    });

    Route::group(['prefix' => 'adminConfig'], function () {
        Route::get('/', [configController::class, 'index'])->name('configShow');
        Route::post('/store', [configController::class, 'store'])->name('configStore');
        Route::post('/update/{config:id}', [configController::class, 'update'])->name('configUpdate');
        Route::post('/delete/{config:id}', [configController::class, 'destroy'])->name('configDelete');
    });


    Route::group(['prefix' => 'adminContact'], function () {
        Route::get('/', [contactController::class, 'index'])->name('contactShow');
        Route::post('/store', [contactController::class, 'store'])->name('contactStore');
        Route::post('/update/{contact:id}', [contactController::class, 'update'])->name('contactUpdate');
        Route::post('/delete/{contact:id}', [contactController::class, 'destroy'])->name('contactDelete');
    });

    Route::group(['prefix' => 'my-profile'], function () {
        Route::get('/{user:id}', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::post('/update/{user:id}', [ProfileController::class, 'update'])->name('profile.update');
        Route::post('/update-password/{user:id}', [ProfileController::class, 'updatePassword'])->name('password.update');
        Route::post('/delete-profile/{user:id}', [ProfileController::class, 'destroy'])->name('profile.delete');
    });

    Route::group(['prefix' => 'reservation'], function () {
        Route::get('/', [reservationController::class, 'index'])->name('reservationShow');
        Route::post('/store', [reservationController::class, 'store'])->name('reservationStore');
        Route::post('/update/{reservation:id}', [reservationController::class, 'update'])->name('reservationUpdate');
        Route::post('/delete/{reservation:id}', [reservationController::class, 'destroy'])->name('reservationDelete');
        Route::get('/getPass/{reservation:id}', [reservationController::class, 'getPass'])->name('entryPass');
        Route::get('/paid', [reservationController::class, 'paid'])->name('paid');
        Route::get('/not_paid', [reservationController::class, 'not_paid'])->name('notPaid');
        Route::get('/arrived', [reservationController::class, 'arrived'])->name('arrived');
        Route::get('/notArrived', [reservationController::class, 'not_arrived'])->name('not_arrived');
    });

     

    Route::group(['prefix' => 'selling-history'], function () {

        //pending order start
        Route::get('/pending', [orderController::class, 'index'])->name('pending.show');
        Route::get('/show-invoice/{order:id}', [orderController::class, 'showInvoice'])->name('invoice.show');
        Route::get('/confirmed-order/{order:id}', [orderController::class, 'confirmOrder'])->name('confirm-order');
        //pending order end

        //confirmed order start
        Route::get('/confirmed', [orderController::class, 'confirmed'])->name('confirmed.show');
        Route::get('/show-confirmed-invoice/{order:id}', [orderController::class, 'showConfirmedInvoice'])->name('confirmed.invoice.show');
        Route::get('/delivered-order/{order:id}', [orderController::class, 'deliveredOrder'])->name('delivered-order');
        //confirmed order end

        //delivered order show start
        Route::get('/delivered', [orderController::class, 'delivered'])->name('delivered.show');
        Route::get('/show-delivered-invoice/{order:id}', [orderController::class, 'showDeliveredInvoice'])->name('delivered.invoice.show');
        //delivered order show end

        //cancelled order
        Route::get('/cancel', [orderController::class, 'cancel'])->name('cancel.show');
        Route::get('/show-cancel-invoice/{order:id}', [orderController::class, 'showCancelInvoice'])->name('cancel.invoice.show');
        Route::get('/cancelled-order/{order:id}', [orderController::class, 'cancelledOrder'])->name('cancelled-order');
    });
    Route::get('/excel', [frontendController::class, 'export'])->name('download_today');
    Route::post('/export/pick', [frontendController::class, 'exportToDateFromDate'])->name('report_picker');
});




Route::post('sslcommerz/success',[reservationController::class,'SSLSuccess']);
Route::post('sslcommerz/failed',[reservationController::class,'SSLFailed']);
Route::post('sslcommerz/cancel',[reservationController::class,'SSLCancel']);
Route::post('sslcommerz/ipn',[reservationController::class,'SSLIpn']);
