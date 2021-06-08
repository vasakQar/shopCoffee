<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
    }
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        return view('login',[]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function verify(Request $request)
    {
//        $request->validate([
//            'email' => 'required|email',
//            'password' => 'required|min:8',
//        ]);

        $query = [
            'email'    => $request->email,
            'password' => $request->password,
        ];

        $is_autheticated = false;
        if ( Auth::guard('web')->attempt( $query ) ){
            $is_autheticated = true;
            Auth::shouldUse('web');

            return redirect()->intended( route('user-index') );
        }

        if ( Auth::guard('admin')->attempt( $query ) )
        {
            $is_autheticated = true;
            Auth::shouldUse('admin');
        };

        if ($is_autheticated){
            $request->session()->regenerate();
            return redirect()->intended( route('admin-index') );
        }
        return redirect()
            ->back()
            ->withInput()
            ->with('error','User doesn existt, please try again!');

    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerate();

        return redirect('login');
    }
}
