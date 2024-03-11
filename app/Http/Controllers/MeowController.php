<?php

namespace App\Http\Controllers;


class MeowController extends Controller
{
    public function show(): string
    {
        return view('meows-list');
    }

    public function showOne(string $id): string
    {
        return view('meow-detail', ['id' => $id]);
    }
}
