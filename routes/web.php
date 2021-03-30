<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TelegramController;
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

Route::get('/updated-activity', [TelegramController::class,'updatedActivity'])->name('updated-activity');

Route::get('/contact', [TelegramController::class,'contactForm'])->name('contact-form');//'TelegramController@contactForm');
Route::post('/send-message', [TelegramController::class,'sendMessage'])->name('send-message');//'TelegramController@storeMessage');
