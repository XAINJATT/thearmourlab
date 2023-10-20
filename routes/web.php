<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InvoiceController;
use App\Http\Controllers\Admin\WarrantyController;
use App\Http\Controllers\frontend\AutomotiveController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\BlogDetailsController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\CeramicCoatingController;
use App\Http\Controllers\frontend\CheckoutController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ShopController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Command Routes
Route::get('clear-cache', function () {
    Artisan::call('storage:link');
    Artisan::call('route:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    //Create storage link on hosting
    $exitCode = Artisan::call('storage:link', []);
    echo $exitCode; // 0 exit code for no errors.
});

Auth::routes(["verify" => true]);

Route::get('/', function () {
    return redirect(url('/login'));
});

Route::get('/password', function () {
    return view('auth.forget_password');
})->name('auth.forget_password');

Route::get('/single-product', function () {
    return view('frontend.pages.single-product');
});

Route::get('/', [HomeController::class, 'index'])->name('frontend.home');
Route::get('/ceramic-coating', [CeramicCoatingController::class, 'index'])->name('frontend.CeramicCoating');
Route::get('/blog', [BlogController::class, 'index'])->name('frontend.blog');
Route::get('/blog-details', [BlogDetailsController::class, 'index'])->name('frontend.blogDetails');
Route::get('/contact', [ContactController::class, 'index'])->name('frontend.contact');
Route::get('/shop', [ShopController::class, 'index'])->name('frontend.shop');
Route::get('/cart', [CartController::class, 'index'])->name('frontend.cart');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('frontend.checkout');
Route::get('/automotive', [AutomotiveController::class, 'index'])->name('frontend.automotive');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::middleware(['auth'])->group(function () {
    /* Common Routes for both Admin and User */
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('profile', [DashboardController::class, 'profile'])->name('profile');
    
    // ADMIN ROUTE
    Route::get('admin/invoice', [InvoiceController::class, 'index'])->name('admin.invoice');
    Route::get('admin/warranty', [WarrantyController::class, 'index'])->name('admin.warranty');

    // USER ROUTE
    Route::get('invoice', 'App\Http\Controllers\User\InvoiceController@index')->name('user.invoice');
    Route::get('warranty', 'App\Http\Controllers\User\WarrantyController@index')->name('user.warranty');

});