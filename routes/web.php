<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SubjectController;

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



// Route::get('/user', [UserController::class, 'index']);


// Route::controller(RegisterController::class)->group(function(){
//     Route::get('/register','showshow');
// });


//for register
Route::get('/register',[RegisterController::class,'index']);
Route::POST('/register',[RegisterController::class,'create']);

//forlogin
Route::get('/login',[LoginController::class,'index']);
Route::POST('/login',[LoginController::class,'login']);


Route::get('/home',[SubjectController::class,'index']);
Route::get('/home/addgrade/{id}',[SubjectController::class,'viewAddgrade']);
Route::POST('/home/addgrade',[SubjectController::class,'addGradeAction']);



Route::get('/home/update_profile',[SubjectController::class,'viewProfile']);
Route::POST('/home/update_profile',[SubjectController::class,'updateProfile']);


Route::get('/home/delete/{id}',[SubjectController::class,'removeSubject']);

// //this is for home
// Route::get('/home', function () {
 //   return view('home');
// });