<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class PagesController extends Controller
{
    public function index()
    {
        if (View::exists('pages.index'))
            return view('pages.index')
                ->with('text', '<b>Laravel</b>')
                ->with('name', 'Nicole');
            # return view('pages.index', ['text' => '<b>Laravel</b>', 'name' => 'Nicole']);
        else
            return 'No view available';
    }

    public function profile()
    {
        return view('pages.profile');
    }

    public function settings()
    {
        return view('pages.settings');
    }

    public function blade()
    {
        return view('blade.bladetest');
    }
}
