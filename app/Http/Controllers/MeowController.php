<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeowController extends Controller
{
    public function show(): string
    {
        return 'Liste des messages';
    }

    public function showOne(string $id): string
    {
        return 'Un message ' . $id;
    }
}
