<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RedirectController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FetchController;

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

Route::get('/', [RedirectController::class, 'redirectToHomepage']);

Route::get('/cameralogin', [RedirectController::class, 'redirectToCameraLogin']);

Route::get('/register/user', [RedirectController::class, 'redirectToRegisterUser']);

Route::get('/dashboard', [RedirectController::class, 'redirectToDashboard']);

Route::get('/get/qrcode', [FetchController::class, 'getQrCode']);

Route::post('/register/user/process', [RegisterController::class, 'registerUser']);

Route::get('/uploadlogin', [RedirectController::class, 'redirectToUploadLogin']);
