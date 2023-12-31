<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function SingUp(Request $req){
        $formFields = $req->validate([
            "name" => ['required'],
            "age" => ['required'],
            "phone" => ['required'],
            "email" => ['required'],
            "address" => ['required'],
            "password" => ['required'],
            "image" => ['required','mimes:png,jpg,jpeg'],
        ]);

        $formFields['image'] = $req->file('image')->store('user_images', 'public');
        $formFields['password'] = bcrypt($formFields['password']);
        $user = User::create($formFields);
        auth()->login($user);
        return redirect('/')->with('message', 'Welcome');
    }
}
