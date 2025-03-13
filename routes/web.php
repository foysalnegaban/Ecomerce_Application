<?php

use App\Http\Controllers\registrationController;
use App\Http\Controllers\loginController;
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
    return view('welcome');
});
Route::get('reg',[registrationController::class,'registration'])->name('registration');
Route::post('regpost',[registrationController::class,'registerPost'])->name('registerPost');
Route::get('log',[loginController::class,'login'])->name('login');
Route::post('logpost',[loginController::class,'loginPost'])->name('loginPost');

