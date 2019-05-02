<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function show($id)
    {
        dd('lalla');
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }
}
