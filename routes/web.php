<?php

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

Route::get('/', function () {
    return view('login');
});

/*login logout */
Route::get('logout',[App\Http\Controllers\LoginController::class, 'logoutPost']);
Route::get('login',[App\Http\Controllers\LoginController::class, 'viewLogin'])->name('login');
Route::post('loginPost',[App\Http\Controllers\LoginController::class, 'loginPost']);

/*admin panel*/
/*admin page*/
Route::get('index', [App\Http\Controllers\AdminController::class, 'index'])->name('index');
Route::post('changePassword',[App\Http\Controllers\AdminController::class, 'changePasswordPost'])->name('changePassword');

/*guestbook page*/
Route::get('guest',[App\Http\Controllers\AdminController::class, 'guest'])->name('guest');
Route::get('delete/{id}',[App\Http\Controllers\AdminController::class, 'delete']);
Route::get('guestadd/{id}',[App\Http\Controllers\AdminController::class, 'viewEdit']);
Route::post('guestadd/post/{id}',[App\Http\Controllers\AdminController::class, 'editPost']);
Route::get('guestadd',[App\Http\Controllers\AdminController::class, 'addGuest'])->name('guestindex');
Route::post('guestadd/post',[App\Http\Controllers\AdminController::class, 'store'])->name('store');

