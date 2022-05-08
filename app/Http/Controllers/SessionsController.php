<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create() {
        return view('sessions.create');
    }

    public function store() {
        //login user based on provided creditentials
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!auth()->attempt($attributes)) {
            return back()
                ->withInput()
                ->withErrors(['email' => 'Credentials couldn\'t be verified']);
        } else {
            session()->regenerate();
            //return redirect('/')->with("success","You have been logged in");
            return back()->with("success","You have been logged in");
        }
        // return view('sessions.create');
    }

    public function destroy() {
        //ddd('log the user out');
        auth()->logout();
        //return redirect('/')->with("success","You have been logged out");
        return back()->with("success","You have been logged out");
    }
}
