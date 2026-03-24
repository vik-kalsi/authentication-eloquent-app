<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\UserListController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [LoginController::class, 'OpenLoginPage'])->name('login');
Route::post('/login', [LoginController::class, 'LoginUser']);


Route::get('/register', [RegisterController::class, "OpenRegistrationPage"]);
Route::post('/register', [RegisterController::class, "RegisterAccount"]);

Route::get('/logout', [LogOutController::class, "LogOutUser"]);

Route::get('/listofusers', [UserListController::class, "OpenUserListPage"])
->middleware('auth');

Route::get('/dashboard', [DashboardController::class, "OpenDashboard"])
->middleware('auth');