<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LinkiController extends Controller
{
    public function __invoke(User $user)
    {
        return view('linki', compact('user'));
    }
}