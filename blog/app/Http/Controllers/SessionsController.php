<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;


class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {

        //Validate request
        $attributes=request()->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
//        dd('akf');
        // Authenticate
        // login
        if (!auth()->attempt($attributes)){
            throw  ValidationException::withMessages([
                'email'=> 'Your provided email address could not be verified.'
            ]);

        }
        session()->regenerate();
        return redirect('/')->with('success',"Welcome Back!");
        //If Error Occurs

//        return back()
//            ->withInput()
//            ->withErrors(['email'=> 'Your provided email address could not be verified.']);
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success',"Goodbye!");
    }
}
