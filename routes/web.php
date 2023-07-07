<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RedirectController;

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

Route::get('/camera/login', [RedirectController::class, 'redirectToCameraLogin']);

Route::get('/upload/login', [RedirectController::class, 'redirectToUploadLogin']);