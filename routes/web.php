<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisteredUserController;
use  App\Http\Controllers\Auth\AuthenticatedSessionController;
use  App\Http\Controllers\AvaibilityController;

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

Route::get('/',[HomeController::class, 'landing'])->name('landing');

Route::get('/dashboard',[HomeController::class, 'index'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/register/otp/mail',[RegisteredUserController::class, 'otpmail'])->name('otp.mail');
Route::post('/register/otp/mail/verify',[RegisteredUserController::class, 'OTPMailVerify'])->name('otp.verify');

Route::get('/register/otp/phone',[RegisteredUserController::class, 'otpphone'])->name('otp.phone');
Route::post('/register/otp/phone/verify',[RegisteredUserController::class, 'OTPPhoneVerify'])->name('otp.phone.verify');

Route::get('/login/otp//login/mail',[AuthenticatedSessionController::class, 'loginotpmail'])->name('login.otp.mail');
Route::post('/login/otp/login/mail/verify',[AuthenticatedSessionController::class, 'OTPMailVerify'])->name('login.otp.verify');

Route::get('/login/otp/phone',[AuthenticatedSessionController::class, 'loginotpphone'])->name('login.otp.phone');
Route::post('/login/otp/phone/verify',[AuthenticatedSessionController::class, 'OTPPhoneVerify'])->name('login.otp.phone.verify');

Route::get('/profile',[UserController::class, 'profile'])->middleware(['auth'])->name('profile');
Route::post('/profile/update',[UserController::class, 'update'])->name('profile.update');

Route::get('/waiting_page/{id}',[UserController::class, 'waiting_page'])->middleware(['auth'])->name('waiting_page');

Route::get('/admin/requests',[UserController::class, 'requests'])->middleware(['auth'])->name('admin.requests');
Route::get('/admin/requests/update/{status}/{id}',[UserController::class, 'requestsUpdate'])->middleware(['auth'])->name('request.update');

Route::get('/resend/otp/',[UserController::class, 'resend'])->name('resend.otp');

Route::get('/avaibility/create/{date}',[AvaibilityController::class, 'create'])->name('avaiblity.add');
Route::post('/avaibility/store',[AvaibilityController::class, 'store'])->name('avaibility.store');



