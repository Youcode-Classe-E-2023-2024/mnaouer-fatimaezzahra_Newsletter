<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validation
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $email = $request->email;
        $password = $request->password;
        $credentials = ['email' => $email, 'password' => $password];

        //si on a cocher remember me
        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();
            return to_route('home')->with('success', 'Vous êtes bien connecté ' . $email . ".");

            //si on n'a pas cocher remember me. le point c'est le termine du phrase

        } elseif (Auth::attempt($credentials)) {
            $request->session()->regenerate(true);
            return to_route('home')->with('success', 'Vous êtes bien connecté ' . $email . ".");

            //si email ou pass incorrect
        } else {
            return back()->withErrors([
                'email' => 'Email ou mot de passe incorrect.'
            ])->onlyInput('email');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
