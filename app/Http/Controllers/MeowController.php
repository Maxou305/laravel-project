<?php

namespace App\Http\Controllers;


use App\Models\Meow;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class MeowController extends Controller
{
    public function show(): string
    {
        $meows = Meow::with('comments')->get();
        return view('dashboard', ['meows' => $meows]);
    }

    public function showOne(string $id): string
    {
        return view('meow-detail', ['id' => $id]);
    }

    public function store(Request $request): RedirectResponse
    {
        dump($request->all());

        $request->validate([
            'content' => 'required|max:255',
        ]);

        $meow = new Meow();
        $meow->content = $request->input('content');
        $meow->user_id = Auth::id();
        $meow->save();

        return redirect()->route('meows');
    }
}
