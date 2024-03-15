<?php

namespace App\Http\Controllers;


use App\Http\Requests\UpdateCommentRequest;
use App\Models\Comment;
use App\Models\Meow;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class MeowController extends Controller
{
    public function show(): string
    {
        return view('dashboard', ['meows' => Meow::orderBy('created_at', 'desc')->get()]);
    }

    public function showOne(string $id): string
    {
        return view('meow-detail', ['id' => $id]);
    }

    public function store(Request $request): RedirectResponse
    {
//        dump($request->all());

        $request->validate([
            'content' => 'required|max:255',
        ]);

        $meow = new Meow();
        $meow->content = $request->input('content');
        $meow->user_id = Auth::id();
        $meow->save();

        return redirect()->route('meows');
    }

    public function destroy($id): RedirectResponse
    {
//        dump($id);
        Meow::destroy($id);
        return redirect()->route('meows');
    }

    public function update(Request $request, string $id)
    {
        $meow = Meow::find($id);
        $meow->content = $request->input('content');

        $meow->update();

        return redirect()->route('meows');
    }
}
