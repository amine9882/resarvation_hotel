<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\Frontend\FrontendController;
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

// Route::get('/', function () {
//     return view('welcome');
    
// });

Route::get('/',[FrontendController::class, 'index']);
Route::get('/category',[FrontendController::class,'category'])->name('category');
Route::get('view-category/{slug}', [FrontendController::class,'show'])->name('view-category');
Route::get('view-prod/{slug}/{prod_name}', [FrontendController::class,'showprod'])->name('view-prod');
// Route::get('categories/{categorySlug}/{productSlug}', 'FrontendController@showprod')->name('products-show');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth','isAdmin']], function () {

});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', 'Admin\FrontendController@index')->name('dashboard');

    Route::get('categories' ,'Admin\CategoryController@index')->name('categories');

    Route::get('category/create','Admin\CategoryController@create')->name('category.create');

    Route::post('category/create', 'Admin\CategoryController@store')->name('category.store');

    Route::get('category/edit/{id}',[CategoryController::class ,'edit'])->name('category.edit');

    Route::post('category/edit/{id}',[CategoryController::class ,'update'])->name('category.update');

    Route::get('category/delete/{id}',[CategoryController::class ,'delete'])->name('category.delete');

    Route::get('products','Admin\ProductController@index')->name('products');

    Route::get('products/create','Admin\ProductController@create')->name('Product.create');

    Route::post('products/create','Admin\ProductController@store')->name('Product.store');

    Route::get('product/edit/{id}',[ProductController::class ,'edit'])->name('product.edit');

    Route::post('product/edit/{id}',[ProductController::class ,'update'])->name('product.update');

    Route::get('product/delete/{id}',[ProductController::class ,'delete'])->name('product.delete');



});

