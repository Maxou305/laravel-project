<?php

namespace App\Http\Controllers;


use App\Models\Meow;

class DashboardController extends Controller
{
    public function show(): string
    {
        return view('dashboard', ['meows' => Meow::orderBy('created_at', 'desc')->get()]);
    }
}
