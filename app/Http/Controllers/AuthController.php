<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('backend.auth.login');
    }

    public function loginAction(Request $request)
    {
        if (Auth::attempt($request->only('username', 'password'))) {
            return redirect()->route('dashboard')->with('toast_success', 'Oturumunuz başlatıldı, hoş geldiniz.');
        }

        return back()->with('toast_error', 'Opps! Bir şeyler yanlış olmalı.');
    }

    public function logoutAction()
    {
        Auth::logout();
        return redirect()->route('login')->with('toast_success', 'Oturumunuz başarılı bir şekilde sonlandırıldı.');

    }
}
