<?php

use App\Http\Controllers\SubscriberController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


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

Route::get("/data",[SubscriberController::class, 'getData'])->name('userData');
Route::get("/test",[SubscriberController::class,'test'])->name('test');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::patch('/fcm-token', [HomeController::class, 'updateToken'])->name('fcmToken');
Route::post('/send-notification',[HomeController::class,'notification'])->name('notification');


