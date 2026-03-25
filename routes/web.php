<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\UserListController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\DeleteAccountController;


#Default page
Route::get('/', function () {
    return view('welcome');
})->middleware('guest');


#Login page
Route::get('/login', [LoginController::class, 'OpenLoginPage'])
->middleware('guest')
->name('login');

Route::post('/login', [LoginController::class, 'LoginUser']);


#Register page
Route::get('/register', [RegisterController::class, "OpenRegistrationPage"])
->middleware('guest');

Route::post('/register', [RegisterController::class, "RegisterAccount"]);


#Logout function
Route::get('/logout', [LogOutController::class, "LogOutUser"]);


#List of Users page
Route::get('/listofusers', [UserListController::class, "OpenUserListPage"])
->middleware('auth');


#Change password page
Route::get('/changepassword', [ChangePasswordController::class, "OpenChangePasswordPage"])
->middleware('auth');

Route::post('/changepassword', [ChangePasswordController::class, "ChangePassword"]);


#Delete account page
Route::get('/deleteaccount', [DeleteAccountController::class, "OpenDeleteAccountPage"])
->middleware('auth');



#Dashboard page
Route::get('/dashboard', [DashboardController::class, "OpenDashboard"])
->middleware('auth');