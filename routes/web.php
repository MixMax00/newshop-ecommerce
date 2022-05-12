<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminContoller;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\BannerController;






Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('Auth');






Route::middleware(['Shop'])->group(function () {

    
        
    Route::get('/category/addCategory', [
        'uses'=> 'CategoryController@create',
        'as' => '/addCategory',
    ]);
    Route::post('/category/addCategory', [
        'uses'=> 'CategoryController@store',
        'as' => 'addCategory',
    ]);
    Route::get('/category/manageCategory', [
        'uses'=> 'CategoryController@index',
        'as' => '/manageCategory',
    ]);

    Route::get('/category/unpublishedCategory/{id}', [
    'uses' => 'CategoryController@showUnpublished',
    'as'   => 'unpublishedCategory',
    ]);
    Route::get('/category/publishedCategory/{id}', [
    'uses' => 'CategoryController@showPublished',
    'as'   => 'publishedCategory',
    ]);

    Route::get('/category/editCategory/{id}', [
    'uses' => 'CategoryController@edit',
    'as'   => 'editCategory',
    ]);

    Route::post('/category/updateCategory', [
    'uses' => 'CategoryController@update',
    'as'   => 'updateCategory',
    ]);


    Route::get('/category/deleteCategory/{id}', [
    'uses' => 'CategoryController@destroy',
    'as'   => 'deleteCategory',
    ]);


    Route::get('/order/manage-order', [
    'uses' => 'OrderController@index',
    'as'   => 'orderManage',
    ]);

    Route::get('/order/view-order/{id}', [
    'uses' => 'OrderController@viewOrderInfo',
    'as'   => 'view-order',
    ]);
    Route::get('/order/order-invoice/{id}', [
    'uses' => 'OrderController@viewOrderInvoice',
    'as'   => 'view-order-invoice',
    ]);


    Route::get('/order/order-down-invoice/{id}', [
    'uses' => 'OrderController@downloadOrderInvoice',
    'as'   => 'download-order-invoice',
    ]);




    // back-end viewport brand

    Route::get('/brand/addBrand',[BrandController::class, 'create'])->name('brand.addBrand');
    Route::post('/brand/store',[BrandController::class, 'store'])->name('brand.store');
    Route::get('/brand/showBrand',[BrandController::class, 'index'])->name('brand.showBrand');


    // back-end viewport product
    Route::get('/product/addProduct',[ProductController::class, 'create'])->name('product.addProduct');
    Route::post('/product/saveProduct',[ProductController::class, 'store'])->name('product.saveProduct');
    Route::get('/product/mangeProduct',[ProductController::class, 'index'])->name('product.mangeProduct');




    // Manage Banner

    Route::prefix('banner')->group(function(){
        Route::get('addbanner',[BannerController::class, 'create'])->name('add_banner');
        Route::post('store',[BannerController::class, 'store'])->name('store-banner');
        Route::get('view-banner',[BannerController::class, 'index'])->name('view-banner');
        Route::get('edit/{id}',[BannerController::class, 'edit'])->name('edit');
        Route::post('update',[BannerController::class, 'update'])->name('update');
    });


    Route::get('/home',[AdminContoller::class, 'admin'])->name('home');
});

// back-end viewport category



//front-end view







Route::get('/', [
    'uses'=> 'NewShopController@newShop',
    'as' => '/',
]);

Route::get('/category-product/{id}', [
    'uses'=> 'NewShopController@categoryProduct',
    'as' => 'category-product',
]);
Route::get('/product_details/{id}', [
    'uses'=> 'NewShopController@productdetails',
    'as' => 'product_details',
]);
Route::post('/add-to-cart', [
    'uses'=> 'CartController@addToCart',
    'as' => 'add-to-cart',
]);
Route::get('/show/cart', [
    'uses'=> 'CartController@showCart',
    'as' => 'show-cart',
]);
Route::get('/delete-cart/{id}', [
    'uses'=> 'CartController@deleteCart',
    'as' => 'delete',
]);
Route::post('/update-cart', [
    'uses'=> 'CartController@updateCart',
    'as' => 'update-cart',
]);

Route::get('/checkout', [
    'uses'=> 'CheckoutController@index',
    'as' => 'checkout',
]);
Route::post('/customar-singup', [
    'uses'=> 'CheckoutController@customarSingup',
    'as' => 'customar-singup',
]);
Route::post('/customar-customar-login', [
    'uses'=> 'CheckoutController@customarLoginCheck',
    'as' => 'customarLoginCheck',
]);

Route::post('/customar-customar-login', [
    'uses'=> 'CheckoutController@customarLoginCheck',
    'as' => 'customarLoginCheck',
]);

Route::get('/new-customer-login', [
    'uses'=> 'CheckoutController@newCustomerLogin',
    'as' => 'new-customer-login',
]);


Route::post('/customer-logout', [
    'uses'=> 'CheckoutController@customarLogout',
    'as' => 'customer-logout',
]);







Route::get('/checkout-shipping', [
    'uses'=> 'CheckoutController@shipping',
    'as' => 'checkout-shipping',
]);
Route::post('/new-shipping/save', [
    'uses'=> 'CheckoutController@shippingSave',
    'as' => 'new-shipping',
]);
Route::get('checkout/payment', [
    'uses'=> 'CheckoutController@paymentForm',
    'as' => 'payment',
]);
Route::post('checkout/order', [
    'uses'=> 'CheckoutController@newOrder',
    'as' => 'new-order',
]);
Route::get('complate/order', [
    'uses'=> 'CheckoutController@complate',
    'as' => 'complate-order',
]);







// Route::get('/product_details', [NewShopController::class, 'productdetails'])->name('product.product_details');


Route::get('/male-content', [
    'uses'=> 'NewShopController@maleContent',
    'as' => 'male-content',
]);
