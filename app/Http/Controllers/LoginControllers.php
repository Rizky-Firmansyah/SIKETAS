<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginControllers extends Controller
{
    function authLogin(Request $request)
    {
        $infoLogin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        // dd($infoLogin);
        if (Auth::attempt($infoLogin)) {
            $user = Auth::user();
            if (Auth::user()->id_kelompok == '1') {
                session(['user' => $user]);
                return redirect('/dashboard');
            } else {
                return redirect('/login')->withErrors('Anda Tidak Di Izinkan Masuk')->withInput();
            }
        } else {
            return redirect('/login')->withErrors('Email atau Password yang dimasukkan salah')->withInput();
        }
    }

    function logout()
    {
        Auth::logout();
        Session::forget('user');
        return redirect('/login');
    }
}
