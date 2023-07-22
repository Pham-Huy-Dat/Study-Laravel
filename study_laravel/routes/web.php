<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Router;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// home - trang chủ
Route::get('/', [HomeController::class, 'index'])->name("home.index");
Route::get('/trang-chu', [HomeController::class, 'index']);
Route::get('/search', [HomeController::class, 'search']);
Route::get('/error', [HomeController::class, 'error_404']);


//account
Route::post('/login', [AccountController::class, 'userLogin']);
Route::get('/login', [AccountController::class, 'login']);
Route::post('/register', [AccountController::class, 'save']);
Route::get('/register', [AccountController::class, 'register']);
Route::get('/logout', [AccountController::class, 'logout']);

// product
Route::get('/product.iphone', [ProductController::class, 'iphone'])->name('product.iphone');
Route::get('/product.ipad', [ProductController::class, 'ipad'])->name('product.ipad');
Route::get('/product.mac', [ProductController::class, 'mac'])->name('product.mac');
Route::get('/product.watch', [ProductController::class, 'watch'])->name('product.watch');
Route::get('/product.sound', [ProductController::class, 'sound'])->name('product.sound');

// chi tiet san pham
Route::get('/detail/{id}', [ProductController::class, 'detail_product'])->name('product.detail');


//gio hang// cart
Route::post('/update-product', [CartController::class, 'update_product'])->name('cart.update-product');
Route::post('/add-cart-ajax', [CartController::class, 'add_cart_ajax'])->name('cart.add-cart-ajax');
Route::post('/save-add-cart', [CartController::class, 'save_add_cart'])->name('cart.save-add-cart');

Route::get('/show-to-cart', [CartController::class, 'show_to_cart'])->name('cart.show-to-cart');
Route::get('/delete-product/{rowId}', [CartController::class, 'delete_product'])->name('cart.delete-product');
Route::get('/delete-all', [CartController::class, 'delete-all'])->name('cart.delete-all');

// checkout - thanh toan
Route::get('/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
Route::post('/save_checkout_customer', [CartController::class, 'save_checkout_customer'])->name('cart.save-checkout');  
Route::get('/shopping_success', [CartController::class, 'shopping_success'])->name('cart.save-checkout');  




//login admin
Route::get('/login_admin', [AdminController::class, 'login_admin'])->name('Admin.login');
Route::post('/login_admin', [AdminController::class, 'store_login'])->name('Admin.store_login');

//Admin -- quann ly san pham=..  = - =
Route::get('/index-admin', [AdminController::class, 'index'])->name('Admin.index_admin');
Route::get('/show_product', [AdminController::class, 'show_product'])->name('Admin.show_product');

Route::post('/add-product', [AdminController::class, 'add_product'])->name('Admin.add_product');
Route::get('/add-product', [AdminController::class, 'view_add_product'])->name('Admin.view_add_product');



