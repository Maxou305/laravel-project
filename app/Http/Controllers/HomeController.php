<?php

namespace App\Http\Controllers;

use App\Models\User;

class HomeController extends Controller
{
    public function show(): string
    {

        return view('homepage', ['users' => User::all()]);
    }
}
