<?php

use App\Http\Controllers\AccountCotroller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\deviceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\numberController;
use App\Http\Controllers\personalController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use PHPUnit\TextUI\XmlConfiguration\Group;
use App\Http\Controllers\roleController;
use App\Http\Controllers\UserCotroller;

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
        Route::get('/service/add','create')->name('service.add');
        Route::get('/service/detail','detail')->name('service.detail');
    });
    Route::controller(numberController::class)->group(function(){
        Route::get('/number','index')->name('number');
        Route::get('/number/add','create')->name('number.add');
        Route::get('/number/information','information')->name('number.information');
    });
    Route::controller(ReportController::class)->group(function(){
        Route::get('/Report','index')->name('report');
    });
    Route::controller(roleController::class)->group(function(){
        Route::get('/role','index')->name('role');
    });
    Route::controller(AccountCotroller::class)->group(function(){
        Route::get('/account','index')->name('account');
    });
    Route::controller(UserCotroller::class)->group(function(){
        Route::get('/user','index')->name('user');
    });
});
