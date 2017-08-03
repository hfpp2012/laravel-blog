<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = [
            '0' => [
                'first_name' => 'a',
                'last_name' => 'b'
            ],
            '1' => [
                'first_name' => 'c',
                'last_name' => 'd'
            ]
        ];
        return $users;
    }
}
