<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\ProductUploadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ExcelController;

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
   
Auth::routes();

// Route::get('/home', ['App/Http/Controllers/HomeController::class','index']);

Route::get('home',[HomeController::class,'index']);

Route::middleware(['auth', 'isAdmin','custom_auth'])->group(function () {
    Route::get('/dashboard', 'App\Http\Controllers\Admin\FrontendController@index');

    Route::get('upload_products', 'App\Http\Controllers\Admin\ProductUploadController@index');
    Route::get('add-product', 'App\Http\Controllers\Admin\ProductUploadController@add');
    Route::post('insert-data', 'App\Http\Controllers\Admin\ProductUploadController@insert');

    Route::get('edit-product/{id}',[ProductUploadController::class ,'edit']);
    Route::post('update-data/{id}',[ProductUploadController::class ,'update']);

    Route::get('delete-data/{id}', [ProductUploadController::class ,'destroy'] );
    Route::get('approve/{id}', [ProductUploadController::class ,'approve'] );
    
    Route::get('register_Product', [ProductUploadController::class ,'register_Product'] )->middleware('custom_auth');

    Route::post('/upload', [ExcelController::class, 'upload'])->name('upload')->middleware('custom_auth');

    Route::get('admin/productupload/add', [ProductUploadController::class, 'add'])->name('productupload.add');
Route::post('admin/productupload/store', [ProductUploadController::class, 'store'])->name('productupload.store');

});
