<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FrontViewController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('login');
})->name('login');


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

    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin-dashboard-index');

    Route::get('/admin/item', [ItemController::class, 'index'])->name('admin-item-index');
    Route::get('/admin/item/create', [ItemController::class, 'create'])->name('admin-item-create');
    Route::post('/admin/item/store', [ItemController::class, 'store'])->name('admin-item-store');
    Route::post('/admin/item/update/{item}', [ItemController::class, 'update'])->name('admin-item-update');
    Route::get('/admin/item/edit/{item}', [ItemController::class, 'edit'])->name('admin-item-edit');
    Route::get('/admin/item/delete/{item}', [ItemController::class, 'destroy'])->name('admin-item-delete');

    Route::get('/admin/brand', [BrandController::class, 'index'])->name('admin-brand-index');
    Route::get('/admin/brand/create', [BrandController::class, 'create'])->name('admin-brand-create');
    Route::post('/admin/brand/store', [BrandController::class, 'store'])->name('admin-brand-store');
    Route::post('/admin/brand/update/{brand}', [BrandController::class, 'update'])->name('admin-brand-update');
    Route::get('/admin/brand/edit/{brand}', [BrandController::class, 'edit'])->name('admin-brand-edit');
    Route::get('/admin/brand/delete/{brand}', [BrandController::class, 'destroy'])->name('admin-brand-delete');

    Route::get('/admin/category', [CategoryController::class, 'index'])->name('admin-category-index');
    Route::get('/admin/category/create', [CategoryController::class, 'create'])->name('admin-category-create');
    Route::post('/admin/category/store', [CategoryController::class, 'store'])->name('admin-category-store');
    Route::post('/admin/category/update/{category}', [CategoryController::class, 'update'])->name('admin-category-update');
    Route::get('/admin/category/edit/{category}', [CategoryController::class, 'edit'])->name('admin-category-edit');
    Route::get('/admin/category/delete/{category}', [CategoryController::class, 'destroy'])->name('admin-category-delete');

    Route::get('/admin/subcategory', [SubCategoryController::class, 'index'])->name('admin-subcategory-index');
    Route::get('/admin/subcategory/create', [SubcategoryController::class, 'create'])->name('admin-subcategory-create');
    Route::post('/admin/subcategory/store', [SubcategoryController::class, 'store'])->name('admin-subcategory-store');
    Route::post('/admin/subcategory/update/{subcategory}', [SubcategoryController::class, 'update'])->name('admin-subcategory-update');
    Route::get('/admin/subcategory/edit/{subcategory}', [SubcategoryController::class, 'edit'])->name('admin-subcategory-edit');
    Route::get('/admin/subcategory/delete/{subcategory}', [SubcategoryController::class, 'destroy'])->name('admin-subcategory-delete');

    Route::get('/admin/faq', [FaqController::class, 'index'])->name('admin-faq-index');
    Route::post('/admin/faq/update/{faq}', [FaqController::class, 'update'])->name('admin-faq-update');
    Route::get('/admin/faq/edit/{faq}', [FaqController::class, 'edit'])->name('admin-faq-edit');
});
