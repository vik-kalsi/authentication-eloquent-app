<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserListController extends Controller
{
    public function OpenUserListPage(){
        $usersList = User::all();
        return view('pages.listofusers', ["users" => $usersList]);
    }
}
