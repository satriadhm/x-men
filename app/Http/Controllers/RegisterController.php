<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        return view('clients.register.index');
    }

    public function register(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
            'email' => 'required|email',
            'name' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        } else {
            alert()->error('halo', 'halo');
            return back();
        }
    }
}
