<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function all_users(){
        $users = User::all();
        return view('backend.users.all_users' , compact('users'));
    }
}
