<?php

namespace App\Http\Controllers;


use App\Models\Meow;

class MeowController extends Controller
{
    public function show(): string
    {
        return view('meows-list', ['meows' => Meow::all()]);
    }

    public function showOne(string $id): string
    {
        return view('meow-detail', ['id' => $id]);
    }
}
