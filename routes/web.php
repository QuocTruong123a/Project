<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\deviceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\personalController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('Login/Login_in');
});
Route::prefix('Admin')->group(function(){
    Route::get('/login',[LoginController::class,'index'])->name('Login');
    Route::get('/Reset',[LoginController::class,'reset'])->name('Reset_password');
    Route::get('/Password',[LoginController::class,'pass'])->name('password');
    Route::get('/personal_information',[personalController::class,'index'])->name('personal_information');
    Route::controller(DashboardController::class)->group(function(){
        Route::get('/dashboard','index')->name('dashboard');
    });
    Route::controller(deviceController::class)->group(function(){
        Route::get('/device','index')->name('device');
        Route::get('/device/add','create')->name('device.add');
        Route::get('/device/detail','device_detail')->name('device.detail');
    });
    Route::controller(ServiceController::class)->group(function(){
        Route::get('/service','index')->name('service');
    });
});
