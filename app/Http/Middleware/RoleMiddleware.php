<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle($request, Closure $next, $role)
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        $user = Auth::user();
        if (!$user->hasRole($role)) {
            return abort(403, 'No tienes permiso para acceder a esta página.');
        }

        // Redirige a diferentes vistas según el rol del usuario
        switch ($role) {
            case 'admin':
                return redirect()->route('admin.dashboard');
            case 'user':
                return redirect()->route('user.dashboard');
            default:
                return abort(403, 'Rol no válido.');
        }
    }
}
