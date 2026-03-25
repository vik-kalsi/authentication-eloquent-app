<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeleteAccountController extends Controller
{
    public function OpenDeleteAccountPage(){
        return view('pages.deleteaccount');
    }
}
