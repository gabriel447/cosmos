<?php

namespace App\Http\Controllers;

use App\Models\User;

class WelcomeController extends Controller
{
    public function index()
    {
        $user = User::query()->create([
            'name' => 'Gabriel',
            'email' => 'Gabe@gmail.com',
            'password' => '12345678'
        ]);

        dd($user);

        return view('welcome');
    }
}
