<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     * Untuk Sessi Login
     */
    public function handle(Request $request, Closure $next, ...$allowedKelompok)
    {
        $user = Auth::user();
        if ($user && in_array($user->id_kelompok, $allowedKelompok)) {
            return $next($request);
        } elseif ($user && $this->checkAllowedKelompok($user->id_kelompok, $allowedKelompok)) {
            return $next($request);
        }
        Auth::logout();
        return redirect('/login');
        // return redirect('/logout');
        // return response()->view('welcome');

        // return $next($request);
        // Jika user tidak memiliki hak akses, Anda dapat mengarahkannya ke halaman lain atau memberikan respons sesuai kebutuhan.
        // return abort(403, 'Unauthorized action.');
    }
    /**
     * Untuk Range Id_Kelompok
     */
    protected function checkAllowedKelompok($userKelompok, $allowedKelompok)
    {
        foreach ($allowedKelompok as $kelompok) {
            $limits = explode('-', $kelompok);
            if (count($limits) === 2) {
                $min = intval($limits[0]);
                $max = intval($limits[1]);

                if ($userKelompok >= $min && $userKelompok <= $max) {
                    return true;
                }
            } elseif (intval($kelompok) === $userKelompok) {
                return true;
            }
        }

        return false;
    }
}
