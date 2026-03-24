<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function OpenLoginPage(){
        return view('pages.login');
    }



    public function LoginUser(Request $request){

        $credentials = ['username' => $request->username, 'password' => $request->password];


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->action([DashboardController::class, 'OpenDashboard']);


        } else {
            return redirect()->action([LoginController::class, 'OpenLoginPage'])
            ->withErrors(['incorrectCredenials' => "Credentials are incorrect"])
            ->withInput();
        }

    }


}
