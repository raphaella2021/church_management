<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChristianController;
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
    return view('index');
});
Route::get('christias', function () {
    return view('ch.s_create');
});
Route::resource('ch',ChristianController::class);
Route::get('/apply',[ChristianController::class,"apply"]);
Route::post('/saveData',[ChristianController::class,"saveData"]);
Route::get('/LoginForm',[AdminController::class,"login"]);
Route::get('/back',[AdminController::class,"abacklogin"]);
Route::get('/back',[AdminController::class,"abacklogin"]);
Route::get('/registerHere',[AdminController::class,"registerHere"]);
Route::post('/register1',[AdminController::class,"register1"]);
Route::post('/create_log',[AdminController::class,"create_log"]);
Route::get('/ViewApplicant',[AdminController::class,"ViewApplicant"]);
Route::get('/Logout',[AdminController::class,"logout"]);
Route::get('/report',[AdminController::class,"report"]);
Route::get('/back1',[AdminController::class,"back1"]);
