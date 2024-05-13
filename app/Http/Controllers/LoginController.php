<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wavey\Sweetalert\Sweetalert;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('clients.login.index');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string'
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        } else {
            alert()->error('halo', 'halo');
            return back();
        }
    }
}
