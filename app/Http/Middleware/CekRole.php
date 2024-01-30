<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CekRole
{
    public function handle($request, Closure $next, ...$roles)
    {
        $user = Auth::user();

        // Cek apakah pengguna memiliki role yang diperlukan
        if ($user && in_array($user->role, $roles)) {

            // Cek apakah pengguna memiliki status yang memenuhi syarat (misalnya, status 2)
            if ($user->status == 1) {
                return $next($request);
            } else {

                return redirect('/completesiswa');
            }
        }
    }
}
