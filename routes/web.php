<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RedirectController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FetchController;
use App\Http\Controllers\LoginController;

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

Route::get('/login/camera', [RedirectController::class, 'redirectToCameraLogin']);

Route::get('/register/user', [RedirectController::class, 'redirectToRegisterUser']);

Route::get('/dashboard', [RedirectController::class, 'redirectToDashboard']);

Route::get('/get/qrcode', [FetchController::class, 'getQrCode']);

Route::post('/register/user/process', [RegisterController::class, 'registerUser']);

Route::get('/login/upload', [RedirectController::class, 'redirectToUploadLogin']);

Route::get('/register/professional', [RedirectController::class, 'redirectToRegisterProfessional']);

Route::post('/register/professional/process', [RegisterController::class, 'registerProfessional']);

Route::post('/login/upload/process', [LoginController::class, 'loginByUpload']);

Route::post('/login/camera/process', [LoginController::class, 'loginByCamera']);

Route::get('/logout',[LoginController::class, 'logout']);

Route::get('search/process', [ProfDashboardController::class, 'getUserInfo']);

Route::get('/get/users', [FetchController::class, 'getUsers']);

Route::get('/get/patient_uses', [FetchController::class, 'getPatientUses']);

Route::get('/get/registers', [FetchController::class, 'getRegisters']);

Route::get('/get/patient_registers', [FetchController::class, 'getPatientRegisters']);

Route::get('/get/reading_trends', [FetchController::class, 'getReadingTrends']);

Route::get('/login/admin', [RedirectController::class, 'redirectToAdminLogin']);

Route::post('/login/admin/process', [LoginController::class, 'loginAdmin']);

Route::get('get/patient_list', [FetchController::class, 'getUsersList']);

Route::get('/get/count_reading', [FetchController::class, 'getCount']);

Route::get('/get/users_count', [FetchController::class, 'getUsersCount']);
