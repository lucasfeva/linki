<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\MakeLoginRequest;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(MakeLoginRequest $request)
    {
        // Para interceptar o post do formulario de login
        // dd(request()->all());

        if ($request->attempt()) {
            return to_route('dashboard');
        }

        return back()->with([
            'message' => 'Email ou senha inválidos',
        ]);
    }
}
