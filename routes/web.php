<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StripePaymentController;
use Illuminate\Support\Facades\Route;

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

/*********************************************************** Pages ***********************************************************/

// Home
Route::any('/', function () {
    return view('home');
});


// About
Route::any('/about', function () {
	return view('about');
})->name('/about');

// Services
Route::any('services', function () {
    return view('services');
})->name('services');


Route::group(['prefix' => 'services'], function () {

    Route::any('branding-design', function () {
        return view('services/branding-design');
    })->name('branding-design');

    Route::any('digital-marketing', function () {
        return view('services/digital-marketing');
    })->name('digital-marketing');

    Route::any('ecommerce-solutions', function () {
        return view('services/ecommerce-solutions');
    })->name('ecommerce-solutions');

    Route::any('mobile-application-development', function () {
        return view('services/mobile-application-development');
    })->name('mobile-application-development');

    Route::any('web-design-development', function () {
        return view('services/web-design-development');
    })->name('web-design-development');

});

Route::any('privacypolicy', function () {
    return view('privacypolicy');
})->name('privacypolicy');

Route::any('termsofservice', function () {
    return view('termsofservice');
})->name('termsofservice');



// Pricing
Route::any('pricing', function () {
    return view('pricing');
})->name('pricing');

// Portfolio
Route::any('portfolio', function () {
    return view('portfolio');
})->name('portfolio');

// About
Route::any('about', function () {
    return view('about');
})->name('about');

// Contact
Route::any('contact', function () {
    return view('contact');
})->name('contact');

/*********************************************************** FORMS ***********************************************************/

// quote form
Route::any('quote-form', [HomeController::class,'quote_form']  )->name('quote.form');

// sidebar form
Route::any('sidebar-form', [HomeController::class,'sidebar_form']  )->name('sidebar.form');

// website form
Route::any('website-form', [HomeController::class,'website_form']  )->name('website.form');

// package form
Route::any('package-form', [HomeController::class,'package_form']  )->name('package.form');

// expert form
Route::any('expert-form', [HomeController::class,'expert_form']  )->name('expert.form');



/*********************************************************** FORMS ***********************************************************/


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();


Route::any('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return "Cache is cleared";
});




Route::any('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::any('paynow', [StripePaymentController::class,'paynow']  );
Route::post('stripe', [StripePaymentController::class,'stripePost']  )->name('stripe.post');