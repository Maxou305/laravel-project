<?php

namespace App\Http\Controllers;


use App\Models\Meow;

class DashboardController extends Controller
{
    public function show(): string
    {
        $meows = Meow::with('comments')->get();
        return view('dashboard', ['meows' => $meows]);
    }
}
