<?php

use App\Http\Controllers\appointmentController;
use App\Http\Controllers\doctorController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

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

Route::view('/','welcome');
Route::view('admin/deshbord','admin.deshbord');
Route::view('/admin/deshbord/add_doctors','admin.add-doctor');
Route::view('/ragester', 'user.ragester');

Route::post('/book-appointment',[appointmentController::class, 'bookappointment']);
Route::post('/add-doctors', [doctorController::class, 'adddoctor']);
Route::post('/ragester', [userController::class , 'SingUp']);

