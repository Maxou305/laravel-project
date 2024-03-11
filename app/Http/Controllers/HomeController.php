<?php

namespace App\Http\Controllers;

use App\Models\Meow;

class HomeController extends Controller
{
    public function show(): string
    {
        $meow = new Meow;
        $meow->content = 'Hello, world!';

        $meow->save();

        return $meow->id . ' ' . $meow->content . ' ' . $meow->created_at . ' ' . $meow->updated_at;

//        return view('homepage');
    }
}
