<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginControllers extends Controller
{
    public function authLogin(Request $request)
    {
        $infoLogin = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        // dd($infoLogin);

        if (Auth::attempt($infoLogin)) {
            $user = Auth::user();
            // Periksa peran kelompok
            if ($user->id_kelompok == '1') {
                session(['user' => $user]);
                return redirect('/dashboard');
            } elseif (in_array($user->id_kelompok, [2, 3, 4, 5, 6])) {
                session(['user' => $user]);
                return redirect('/dashboard-petani');
            } else {
                Auth::logout();
                Session::forget('user');
                return redirect('/login')->withErrors('Anda tidak diizinkan masuk')->withInput();
            }
        } else {
            return redirect('/login')->withErrors('Email atau Password yang dimasukkan salah')->withInput();
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        Session::forget('user');
        return redirect('/login');
    }

    public function home()
    {
        return redirect('/login');
    }
}
