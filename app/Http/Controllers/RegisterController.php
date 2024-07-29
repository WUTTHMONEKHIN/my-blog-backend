<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $cleanData = request()->validate([
            'name' => ['required' ,'max:20'],
            'email' => ['required', 'email', 'max:20'],
            'username' => ['required', 'max:20'],
            'password' => ['required', 'min:8', 'max:20'],
        ]);

       

       $user = new User();
       $user->name = $cleanData['name'];
       $user->email = $cleanData['email'];
       $user->username = $cleanData['username'];
       $user->password = $cleanData['password'];
       $user->save();

       //login
       auth()->login($user);

       return redirect('/')->with('message', 'Welcome '. $user->name);
    }
}
