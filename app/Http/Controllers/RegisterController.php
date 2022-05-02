<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create() {
        //return 'hello world';
        return view('register.create');
    }
    public function store() {
        //create the user
            //return(request()->all());

        User::create(request()->validate([
            'name'=>['required','max:255','min:3'],
            'username'=>['required','max:255','min:3'],
            'email'=>['required','email','max:255'],
            'password'=>['required','max:255','min:8']
        ]));

        return redirect('/');
    }
}
