<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('auth.dashboard');
        }
    public function login(Request $request)
    {
       
        $regles = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
 
        if (Auth::attempt($regles)) {
            $request->session()->regenerate();
 
            return redirect()->intended('auth/dashboard');
        }
 
        return back()->withErrors([
            'email' => 'Email incorrect',
            'password' => 'Mot de passe incorrect.'
        ]);
    }
    public function login_page(){
        return view('welcome');
    }
    public function __invoke(Request $request)
    {
        //
    }
}
