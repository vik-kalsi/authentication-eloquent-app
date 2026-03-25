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
            return redirect()->action([ChangePasswordController::class, 'OpenChangePasswordPage'])
            ->withErrors(['incorrectCurrentPassword' => "Current password is incorrect"]);
        }


        $user = auth()->user();
        $user->password = Hash::make($request->newpassword);
        $user->save();

        return redirect()->action([ChangePasswordController::class, 'OpenChangePasswordPage'])
        ->with('passwordChangeSuccess', 'Password has been succesfully changed');
    }
}
