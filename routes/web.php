<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/shop', function() {
//     return view('pages.shop');
// });

// Route::get('/order', function() {
//     return view('pages.order');
// });

//FRONTEND
Route::get('home', [App\Http\Controllers\PagesController::class, 'home'])->name('home');
Route::get('contact', [App\Http\Controllers\PagesController::class, 'contact'])->name('contact');
Route::get('shop', [App\Http\Controllers\PagesController::class, 'shop'])->name('shop');
Route::get('order', [App\Http\Controllers\PagesController::class, 'order'])->name('order');

//BACKEND
Route::resource('orders', 'OrdersController');
Route::post("orders", [App\Http\Controllers\OrdersController::class, 'store']);
Route::view("orders","order");

Route::resource('contacts', 'ContactsController');
Route::post("contacts", [App\Http\Controllers\ContactsController::class, 'store']);
Route::view("contacts","contact");

//EMAIL



