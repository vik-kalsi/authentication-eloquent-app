<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogOutController extends Controller
{
    public function LogOutUser(Request $request){
        Auth::Logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')
        ->with('LogOutSuccess', 'You have succesfully logged out');
    }
}
