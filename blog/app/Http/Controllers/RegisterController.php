<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public static function create()
    {
        return view('register.create');
    }

    public static function store()
    {
//        var_dump(request()->all());
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|min:3|unique:users,username',
//            'username'=>['required','min:3','max:255',Rule::unique('users','username')],
            'email' => 'required|email|max:255|unique:users,email',
            'password' => ['required', 'max:255', 'min:6'],
        ]);

        $user=User::create($attributes);
        auth()->login($user);
//        session()->flash('success',"Your account has been created");
        return redirect('/')->with('success', "Your account has been created");
    }
}
