<?php

use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InvoiceController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\WarrantyController;
use App\Http\Controllers\frontend\AutomotiveController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\BlogDetailsController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\CeramicCoatingController;
use App\Http\Controllers\frontend\WindowTintSimulatorController;
use App\Http\Controllers\frontend\CheckoutController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\PaintProtectionFilmController;
use App\Http\Controllers\frontend\ShopController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use App\Http\Controllers\User\InvoiceController as UserInvoiceController;
use App\Http\Controllers\User\WarrantyController as UserWarrantyController;
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


/* FRONTEND ROUTE - START */

Route::get('/', [HomeController::class, 'index'])->name('frontend.home');
Route::get('/ceramic-coating', [CeramicCoatingController::class, 'index'])->name('frontend.CeramicCoating');

// BlogController
Route::get('/blog', [BlogController::class, 'index'])->name('frontend.blog');
Route::get('/blog-details/{id}', [BlogDetailsController::class, 'index'])->name('frontend.blogDetails');

// ContactController
Route::get('/contact', [ContactController::class, 'index'])->name('frontend.contact');
Route::post('/contact/store', [ContactController::class, 'store'])->name('frontend.contact.store');

// ShopController
Route::get('/shop', [ShopController::class, 'index'])->name('frontend.shop');
Route::get('/shop/product-detail/{slug}', [ShopController::class, 'productDetails'])->name('frontend.shop.productDetails');
Route::get('/cart', [CartController::class, 'index'])->name('frontend.cart');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('frontend.checkout');

Route::get('/automotive', [AutomotiveController::class, 'index'])->name('frontend.automotive');
Route::get('/window-tint-simulator', [WindowTintSimulatorController::class, 'index'])->name('frontend.WindowTintSimulator');
Route::get('/paint-protection-film', [PaintProtectionFilmController::class, 'index'])->name('frontend.PaintProtectionFilm');

/* FRONTEND ROUTE - END */

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::middleware(['auth'])->group(function () {
    /* Common Routes for both Admin and User */

    
    /* ADMIN ROUTE - START */
    
    // DashboardController
    Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('admin/profile', [DashboardController::class, 'profile'])->name('admin.profile');
    Route::post('admin/profile/update', [DashboardController::class, 'update'])->name('admin.profile.update');
    
    // InvoiceController 
    Route::get('admin/invoice', [InvoiceController::class, 'index'])->name('admin.invoice');
    Route::get('admin/invoice/create', [InvoiceController::class, 'create'])->name('admin.invoice.create');
    Route::post('admin/invoice/store', [InvoiceController::class, 'store'])->name('admin.invoice.store');
    Route::get('admin/invoice/view/{id}', [InvoiceController::class, 'show'])->name('admin.invoice.view');
    Route::post('admin/invoice/delete/{id}', [InvoiceController::class, 'delete'])->name('admin.invoice.delete');
    
    // WarrantyController
    Route::get('admin/warranty', [WarrantyController::class, 'index'])->name('admin.warranty');
    Route::get('admin/warranty/create', [WarrantyController::class, 'create'])->name('admin.warranty.create');
    Route::post('admin/warranty/store', [WarrantyController::class, 'store'])->name('admin.warranty.store');
    Route::get('admin/warranty/view/{id}', [WarrantyController::class, 'show'])->name('admin.warranty.view');
    Route::post('admin/warranty/delete/{id}', [WarrantyController::class, 'delete'])->name('admin.warranty.delete');
    
    // UserController
    Route::get('admin/user', [UserController::class, 'index'])->name('admin.user');
    Route::get('admin/user/create', [UserController::class, 'create'])->name('admin.user.create');
    Route::post('admin/user/store', [UserController::class, 'store'])->name('admin.user.store');
    Route::get('admin/user/edit/{id}', [UserController::class, 'edit'])->name('admin.user.edit');
    Route::post('admin/user/update', [UserController::class, 'update'])->name('admin.user.update');
    Route::post('admin/user/delete/{id}', [UserController::class, 'delete'])->name('admin.user.delete');
    Route::post('admin/user/statusUpdate/{id}', [UserController::class, 'statusUpdate'])->name('admin.user.statusUpdate');
    Route::post('admin/user/CheckForDuplicateEmail', [UserController::class, 'CheckForDuplicateEmail'])->name('admin.user.CheckForDuplicateEmail');
    
    // AdminBlogController
    Route::get('admin/blog', [AdminBlogController::class, 'index'])->name('admin.blog');
    Route::get('admin/blog/create', [AdminBlogController::class, 'create'])->name('admin.blog.create');
    Route::post('admin/blog/store', [AdminBlogController::class, 'store'])->name('admin.blog.store');
    Route::get('admin/blog/edit/{id}', [AdminBlogController::class, 'edit'])->name('admin.blog.edit');
    Route::post('admin/blog/update', [AdminBlogController::class, 'update'])->name('admin.blog.update');
    Route::post('admin/blog/delete/{id}', [AdminBlogController::class, 'delete'])->name('admin.blog.delete');
    Route::post('admin/blog/statusUpdate/{id}', [AdminBlogController::class, 'statusUpdate'])->name('admin.blog.statusUpdate');

    // AdminProductController
    Route::get('admin/product', [ProductController::class, 'index'])->name('admin.product');
    Route::get('admin/product/create', [ProductController::class, 'create'])->name('admin.product.create');
    Route::post('admin/product/store', [ProductController::class, 'store'])->name('admin.product.store');
    Route::get('admin/product/edit/{id}', [ProductController::class, 'edit'])->name('admin.product.edit');
    Route::post('admin/product/update', [ProductController::class, 'update'])->name('admin.product.update');
    Route::post('admin/product/delete/{id}', [ProductController::class, 'delete'])->name('admin.product.delete');
    Route::post('admin/product/statusUpdate/{id}', [ProductController::class, 'statusUpdate'])->name('admin.product.statusUpdate');

    // ContactUsController
    Route::get('admin/contact', [ContactUsController::class, 'index'])->name('admin.contact');
    Route::post('admin/contact/delete/{id}', [ContactUsController::class, 'delete'])->name('admin.contact.delete');

    /* ADMIN ROUTE - END */
    

    /* USER ROUTE - START */
    
    // UserDashboardController
    Route::get('dashboard', [UserDashboardController::class, 'index'])->name('dashboard');
    Route::get('profile', [UserDashboardController::class, 'profile'])->name('profile');
    Route::post('profile/update', [UserDashboardController::class, 'update'])->name('profile.update');

    // UserInvoiceController
    Route::get('invoice', [UserInvoiceController::class, 'index'])->name('user.invoice');
    Route::get('invoice/view/{id}', [UserInvoiceController::class, 'show'])->name('user.invoice.view');

    // UserWarrantyController
    Route::get('warranty', [UserWarrantyController::class, 'index'])->name('user.warranty');
    Route::get('warranty/view/{id}', [UserWarrantyController::class, 'show'])->name('user.warranty.view');

    Route::get('order-status', 'App\Http\Controllers\User\OrderStatusController@index')->name('user.orderStatus');
    Route::get('order-status/order-details', 'App\Http\Controllers\User\OrderStatusController@orderDetails')->name('user.orderDetails');

    /* USER ROUTE - END */
});