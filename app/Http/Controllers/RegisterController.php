<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create() {
        //return 'hello world';
        return view('register.create');
    }
    public function store() {
        //create the user
            //return(request()->all());
        $attributes = request()->validate([
            'name'=>['required','max:255','min:3'],
            'username'=>['required','max:255','min:3','unique:users,username'],
            'email'=>['required','email','max:255', Rule::unique('users','email')],
            'password'=>['required','max:255','min:8']
        ]);
        //added a mutator to the User model
        // $attributes['password'] = bcrypt($attributes['password']);

        $user = User::create($attributes);

        //login in
        Auth()->login($user);

        // session()->flash('success','Your Account has been created.');
        return redirect('/')->with('success','Your Account has been created.');
    }
}
