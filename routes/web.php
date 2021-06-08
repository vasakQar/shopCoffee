<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\shop\CartControlle;
use App\Http\Controllers\shop\ShopProductController;
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


Route::redirect('/', '/index');
/**
 * sign in and sign up for user and admin
 */
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login/verify',[LoginController::class,'verify'])->name('login.verify');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('auth/register', [RegisterController::class, 'showRegisterForm']);
Route::get('auth/user/register', [RegisterController::class, 'createUser'])->name('user.register');

/**
 * route for admin
 */
    Route::get('/admin/index',[AdminController::class,'index'])->name('admin-index');
    Route::get('/index',[UserController::class,'index'])->name('user-index');

    Route::get('/test',[ProductController::class,'test'])->name('add-new-product');
    Route::post('/create-product',[ProductController::class,'store'])->name('create-product');

    Route::get('/product-list', [ProductController::class, 'showProduct'])->name('show-product');
    Route::get('/show-images/{id}', [ProductController::class, 'showProductImages']);

    Route::get('/delet-prod/{id}',[ProductController::class, 'deletProduct']);

    Route::get('/edit-product/{id}',[ProductController::class,'editProduct']);
    Route::post('/update-product',[ProductController::class,'updateProduct'])->name('product.update');
/**
 * route for categories
 */
    Route::get('/category-list', [ProductController::class, 'showCategoreies'])->name('show-categories');
    Route::post('/create-category',[ProductController::class,'createCategory'])->name('create.category');
    Route::get('/delet-category/{id}', [ProductController::class, 'deletCategory']);
/**
 * show all orders list and delete
 */
    Route::get('/orders', [OrderController::class, 'index'])->name('orders');
    Route::get('/delete-orders/{id}', [OrderController::class, 'deleteOrders']);
/**
 * show orders standby mode and delete
 */
    Route::get('/show-orders-standby-mode', [OrderController::class, 'showStandbyModeOrders'])->name('show.orders.standby.mode');
    Route::get('/add-orders-standby-mode/{id}', [OrderController::class, 'addStandbyModeOrders']);
    Route::get('delete-order-from-standby/{id}', [OrderController::class, 'deleteOrderFromStandby']);

    Route::get('/orders-by-users/{id?}', [OrderController::class, 'ordersByUsers'])->name('orders.by.users');
/**
 * chang order status
 */
Route::post('chang-order-status',[OrderController::class, 'changOrderStatus']);
/**
 * end of route for admin
 */

//});


/**
 * shop routes
 */
Route::view('/app-shop','layout.app-shop');

Route::get('/cart',[CartControlle::class,'showCart'])->name('cart.list');
Route::get('/add-to-cart/{id}', [CartControlle::class, 'addToCart']);
Route::get('delete-cart-product/{id}', [CartControlle::class, 'deleteCartProduct']);
Route::post('/cart-ajax-request',[CartControlle::class, 'addOrder']);
/**
 * show user orders
 */
Route::get('user-orders',[UserController::class, 'userOrders'])->name('user-orders');
Route::get('delete-user-order/{id}',[UserController::class, 'deleteUserOrder']);
/**
 * show products by category
 */
Route::get('category/{id}', [UserController::class, 'showProductByCategory']);
Route::get('/search',[UserController::class, 'search']);
