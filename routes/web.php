<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('my-appointments', [App\Http\Controllers\AppointmentController::class, 'list_Appointments'])->name('show_appointments');

Route::view('/appointment', 'appointment')->middleware('auth')->name('create_appointment');

Route::post('save-appointment', [App\Http\Controllers\AppointmentController::class, 'save_appointment'])->name('save-appointment');