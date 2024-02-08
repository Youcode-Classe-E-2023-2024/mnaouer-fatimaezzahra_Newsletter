<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    public function showLogin() {
        return view('login');
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $credentials = ['email' => $email , 'password' => $password ];
        if(Auth::attempt($credentials))
        {
            $profile = Auth::user();
            $request->session()->regenerate(true);
            return to_route('home')->with('success', 'Vous êtes bien connecté '.$email." .");

        }else{
            return back()->withErrors([
                'email'=> 'Email ou mot de passe incorrect.'
            ])->onlyInput('email');
        }
    }

    public function showRegister(){
        return view('register');
    }

    public function register(Request $request){
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect('/login')->with('success', 'Registration successful. Please log in.');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
