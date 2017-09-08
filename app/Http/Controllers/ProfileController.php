<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function profile($username)
    {
        // return $username;
        $user = User::whereUsername($username)->first();
        // $user = User::where('username', $username)->first();
        // $user = User::where('username', '=', $username)->first();
        return $user;
        dd($user);
    }
}
