<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class DeleteAccountController extends Controller
{
    public function OpenDeleteAccountPage(){
        return view('pages.deleteaccount');
    }


    public function DeleteAccount(){
        $userToDelete = auth()->user();

        Auth::Logout();
        $userToDelete->delete();

        return redirect('/login')
        ->with('AccountDeletedSuccess', 'Account succesfully deleted');;
    }

}
