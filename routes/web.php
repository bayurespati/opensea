<?php

use App\Http\Controllers\LoginController;

use Illuminate\Support\Facades\Route;

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

Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('login');
})->name('login');


Route::middleware('auth')->group(function () {

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/home', function () {
        return view('client.home');
    });

    Route::get('/faq', function () {
        return view('client.faq');
    });

    Route::get('/wishlist', function () {
        return view('client.wishlist');
    });

    Route::get('/browse_product', function () {
        return view('client.browse_product');
    });

    Route::get('/detail_product', function () {
        return view('client.detail_product');
    });

    Route::get('/admin/dashboard', function () {
        return view('admin.layout');
    });

    Route::get('/admin/item', function () {
        return view('admin.item');
    });
});
