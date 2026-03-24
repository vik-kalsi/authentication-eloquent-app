<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function OpenChangePasswordPage()
    {
        return view('pages.changepassword');
    }



    public function ChangePassword(Request $request)
    {


        $request->validate([
            'currentpassword' => 'required',
            'newpassword' => 'required|min:8',
        ]);

        
        if (!Hash::check($request->currentpassword, auth()->user()->password)) {
            return "password NOT match";
        }


        $user = auth()->user();

        $user->password = Hash::make($request->newpassword);
        $user->save();

        return "password updated successfully";
    }
}
