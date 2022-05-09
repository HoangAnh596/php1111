<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;

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
Route::get('users', [HomeController::class, 'index']);
Route::get('users/detail/{id}', [HomeController::class, 'detail']);

// truyền dữ liệu từ đường dẫn a => đường dẫn b 
Route::get('info', [HomeController::class, 'infoForm']);
Route::get('save-info', [HomeController::class, 'saveInfo'])->name('save.info');

Route::get('dang-nhap', [LoginController::class, 'loginForm'])->name('login');
Route::post('dang-nhap', [LoginController::class, 'postLogin']);

Route::get('fake-password/{mk?}', function($mk = '123456'){
    return Hash::make($mk);
});