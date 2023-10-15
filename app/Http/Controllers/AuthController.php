<?php

namespace App\Http\Controllers;

use App\Models\Compte;
use App\Models\Profil;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);



        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = User::where('email', '=', $credentials['email'])->first();
           $roleName=Profil::find($user->profil_id);
            // $roleName = $user->nom;
            // return "hello ". $roleName->role;
            if ($roleName->role === 'chafeProject') {
                return redirect()->to('chafProject');

            } else if ($roleName->role  === 'secrtire') {
                return redirect()->to('project');

            } else if ($roleName->role  === 'Administrator') {
                return redirect()->to('user');
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
