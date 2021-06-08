<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use App\Models\User;

class RegisterController extends Controller
{
    /**
     * RegisterController constructor.
     */
    public function __construct()
    {
        $this->middleware('guest');
//        $this->middleware('guest:admin');
//        $this->middleware('guest:web');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function createUser( Request $request )
    {
        $request->validate(
            [
                'name'              =>      'required|string|max:20',
                'email'             =>      'required|email|unique:users,email',
                'password'          =>      'required|alpha_num|min:6',
                'confirm_password'  =>      'required|same:password',
            ]
        );

        $dataArray      =       array(
            "name"          =>          $request->name,
            "email"         =>          $request->email,
            "password"      =>          Hash::make($request->password),
        );

        $user               =       User::create($dataArray);

        if(!is_null($user)) {
            return redirect()->route('login')->with('error','user created successfully!');
        }

        else {
            return back()->with("failed", "Alert! Failed to register");
        }

    }
}
