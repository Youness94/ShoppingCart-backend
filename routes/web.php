<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;

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
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';

Route::get('/admin', [AdminController ::class, 'admin'] );

 
Route::get('/addcategory', [CategoryController ::class, 'addCategory'] );
Route::post('/savecategory', [CategoryController ::class, 'savecategory'] ); 

Route::get('/categories', [CategoryController ::class, 'categories'] );
Route::get('/edit_category/{id}', [CategoryController ::class, 'editCategory'] );
Route::post('/updatecategory', [CategoryController ::class, 'updatecategory'] ); 


Route::get('/addslider', [SliderController ::class, 'addSlider'] );
Route::get('/sliders', [SliderController ::class, 'sliders'] );

Route::get('/addproduct', [ProductController ::class, 'addProduct'] );
Route::get('/products ', [ProductController ::class, 'products'] );


Route::get('/', [ClientController::class, 'home'] );
Route::get('/shop', [ClientController::class, 'shop'] );
Route::get('/cart', [ClientController::class, 'cart'] );
Route::get('/checkout', [ClientController::class, 'checkout'] );
Route::get('/login', [ClientController::class, 'login'] );
Route::get('/signup', [ClientController::class, 'signup'] );

Route::get('/orders ', [ClientController ::class, 'orders'] );




