<?php

namespace App\Http\Controllers;

use App\Models\User;

class WelcomeController extends Controller
{
    public function index()
    {
        $user = User::find(1);
        
        //setando especificamente cada uma das propriedades..
        $user->email_verified_at = now();
        $user->save();
        
        //atualizando em massa
        $user->update(['email_verified_at' => now()]);
        dd($user->email_verified_at);

        return view('welcome');
    }
}
