<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RichCommunicationController;
use App\Http\Controllers\SMSController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/send-sms',[RichCommunicationController::class, 'sendSMS'])->name('send-sms');

// Route::post('/send-viber-message',[RichCommunicationController::class, 'sendViberMessage'])->name('send-sms-viber');



Route::get('/send',[SMSController::class, 'sendSMS']);
