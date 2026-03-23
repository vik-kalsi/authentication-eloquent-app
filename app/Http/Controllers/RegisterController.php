<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function OpenRegistrationPage(){
        return view('pages.registration');
    }


    public function RegisterAccount(Request $request){

        $request->validate([
            'username' => 'required|string|min:4|max:20',
            'password' => 'required|confirmed|min:8',
        ]);


        $userExists = User::where('username', $request->username)->exists();


        if(!$userExists){
            $user = User::create([
                'username' => $request->username,
                'password' => Hash::make($request->password),
            ]);

            return redirect()->action([LoginController::class, 'OpenLoginPage'])
            ->with('registerSuccess', 'Account has been registered succesfully, please login');

        } else{
            return redirect()->action([RegisterController::class, 'RegisterAccount'])
            ->withErrors(['usernameAlreadyExists' => "This Username already exists, please choose a different username"])
            ->withInput(); 
        }
    }

}
