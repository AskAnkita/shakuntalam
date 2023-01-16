<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OtpController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'contact'], function () {
    Route::get('', [ContactController::class, 'index']);
    Route::post('', [ContactController::class, 'store']);
    Route::get('{id}', [ContactController::class, 'edit']);
    Route::post('{id}', [ContactController::class, 'update']);
    Route::delete('{id}', [ContactController::class, 'destroy']);
});

Route::group(['prefix' => 'customers'], function () {
//    Route::get('', [CustomerController::class, 'index']);
    Route::post('', [CustomerController::class, 'store']);
    Route::get('{id}', [CustomerController::class, 'edit']);
    Route::post('{id}', [CustomerController::class, 'update']);
    Route::delete('{id}', [CustomerController::class, 'destroy']);
});

Route::get('generate-pdf', [ContactController::class, 'generatePDF']);

//Route::get('sendbasicemail','MailController@basic_email');
//Route::get('sendhtmlemail','MailController@html_email');
//Route::get('sendattachmentemail','MailController@attachment_email');

Route::group(['prefix' => 'otp'], function () {
    Route::get('purchase', [OtpController::class,'confirmationPage']);
    Route::post('otp-request', [OtpController::class,'requestForOtp']);
    Route::post('otp-validate', [OtpController::class,'validateOtp'])->name('validateOtp');
    Route::post('otp-resend', [OtpController::class,'resendOtp'])->name('resendOtp');
});