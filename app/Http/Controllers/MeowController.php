<?php

namespace App\Http\Controllers;


use App\Models\Meow;

class MeowController extends Controller
{
    public function show(): string
    {
        $meows = Meow::with('comments')->get();
        return view('meows-list', ['meows' => $meows]);
    }

    public function showOne(string $id): string
    {
        return view('meow-detail', ['id' => $id]);
    }
}
