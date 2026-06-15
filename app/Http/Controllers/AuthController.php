<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    private $views      = 'auth/';
    private $url        = 'auth/';
    private $title      = 'Auth';

    public function login(Request $request)
    {
        $data = [
            'title'  => $this->title,
            'url'    => $this->url,
            'page'   => $this->title,
        ];
        return view($this->views . 'login', $data);
    }
    public function loginProcess(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('admin');
        }



        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
