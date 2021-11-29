<?php

use App\Http\Controllers\FooterController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/order', function () {
    return view('order');
});

Auth::routes();
//Route::get('/', [App\Http\Controllers\FooterController::class, 'Footer'])->name('/');
Route::get('/', [App\Http\Controllers\FooterController::class, 'getItem'])->name('/');

Route::get('/admindashbord', [App\Http\Controllers\AdminDashboardController::class, 'index'])->name('/admindashbord');

Route::post('/AddCategory', [App\Http\Controllers\AdminDashboardController::class, 'AddCategory'])->name('AddCategory');

Route::post('/AddItem', [App\Http\Controllers\AdminDashboardController::class, 'AddItem'])->name('AddItem');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::get('/dresses', [App\Http\Controllers\DressesController::class, 'index'])->name('dresses');

Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('login');

Route::get('/office', [App\Http\Controllers\OfficeController::class, 'index'])->name('office');

Route::get('/tops', [App\Http\Controllers\TopsController::class, 'index'])->name('tops');

Route::get('/tshirts', [App\Http\Controllers\TshirtsController::class, 'index'])->name('tshirts');

Route::get('/footer', [App\Http\Controllers\FooterController::class, 'Footer'])->name('footer');

Route::get('/categories/{id}', [App\Http\Controllers\DressesController::class, 'category_list'])->name('category_list');

