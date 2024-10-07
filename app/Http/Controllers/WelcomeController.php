<?php

namespace App\Http\Controllers;

use App\Models\User;

class WelcomeController extends Controller
{
    public function index()
    {
        $user = User::find(1);
        $user->email_verified_at = now();
        $user->save();
        $user->update(['email_verified_at' => now()]);
        dd($user->email_verified_at);

        return view('welcome');
    }
}
