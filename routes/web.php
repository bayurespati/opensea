<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FrontViewController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\WishlistController;
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
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/', [LoginController::class, 'index'])->name('login');

Route::middleware('auth')->group(function () {

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/home', [FrontViewController::class, 'home']);
    Route::get('/faq', [FrontViewController::class, 'faq']);
    Route::get('/about', [FrontViewController::class, 'about']);
    Route::get('/wishlist', [FrontViewController::class, 'wishlist']);
    Route::get('/browse_product', [FrontViewController::class, 'products']);
    Route::get('/detail_product/{item}', [FrontViewController::class, 'detail_product']);

    Route::post('/wishlist/store', [WishlistController::class, 'store']);
    Route::get('/wishlist/delete/{item}', [WishlistController::class, 'delete']);
    Route::get('/item/by-search', [ItemController::class, 'search']);
    Route::post('/order', [OrderController::class, 'store']);

    Route::group(['prefix' => 'admin', 'middleware' => 'isAdmin'], function () {

        Route::get('dashboard', [DashboardController::class, 'index'])->name('admin-dashboard-index');

        Route::get('order', [OrderController::class, 'index'])->name('admin-order-index');
        Route::get('order/edit/{order}', [OrderController::class, 'edit'])->name('admin-order-edit');
        Route::post('order/update/{order}', [OrderController::class, 'update'])->name('admin-order-update');

        Route::group(['prefix' => 'item'], function () {
            Route::get('', [ItemController::class, 'index'])->name('admin-item-index');
            Route::get('create', [ItemController::class, 'create'])->name('admin-item-create');
            Route::post('store', [ItemController::class, 'store'])->name('admin-item-store');
            Route::post('update/{item}', [ItemController::class, 'update'])->name('admin-item-update');
            Route::get('edit/{item}', [ItemController::class, 'edit'])->name('admin-item-edit');
            Route::get('delete/{item}', [ItemController::class, 'destroy'])->name('admin-item-delete');
        });

        Route::group(['prefix' => 'brand'], function () {
            Route::get('', [BrandController::class, 'index'])->name('admin-brand-index');
            Route::get('create', [BrandController::class, 'create'])->name('admin-brand-create');
            Route::post('store', [BrandController::class, 'store'])->name('admin-brand-store');
            Route::post('update/{brand}', [BrandController::class, 'update'])->name('admin-brand-update');
            Route::get('edit/{brand}', [BrandController::class, 'edit'])->name('admin-brand-edit');
            Route::get('delete/{brand}', [BrandController::class, 'destroy'])->name('admin-brand-delete');
        });

        Route::group(['prefix' => 'category'], function () {
            Route::get('', [CategoryController::class, 'index'])->name('admin-category-index');
            Route::get('create', [CategoryController::class, 'create'])->name('admin-category-create');
            Route::post('store', [CategoryController::class, 'store'])->name('admin-category-store');
            Route::post('update/{category}', [CategoryController::class, 'update'])->name('admin-category-update');
            Route::get('edit/{category}', [CategoryController::class, 'edit'])->name('admin-category-edit');
            Route::get('delete/{category}', [CategoryController::class, 'destroy'])->name('admin-category-delete');
        });

        Route::group(['prefix' => 'subcategory'], function () {
            Route::get('', [SubCategoryController::class, 'index'])->name('admin-subcategory-index');
            Route::get('create', [SubcategoryController::class, 'create'])->name('admin-subcategory-create');
            Route::post('store', [SubcategoryController::class, 'store'])->name('admin-subcategory-store');
            Route::post('update/{subcategory}', [SubcategoryController::class, 'update'])->name('admin-subcategory-update');
            Route::get('edit/{subcategory}', [SubcategoryController::class, 'edit'])->name('admin-subcategory-edit');
            Route::get('delete/{subcategory}', [SubcategoryController::class, 'destroy'])->name('admin-subcategory-delete');
        });

        Route::group(['prefix' => 'faq'], function () {
            Route::get('', [FaqController::class, 'index'])->name('admin-faq-index');
            Route::post('update/{faq}', [FaqController::class, 'update'])->name('admin-faq-update');
            Route::get('edit/{faq}', [FaqController::class, 'edit'])->name('admin-faq-edit');
        });
    });
});
