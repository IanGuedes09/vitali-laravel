<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MasterMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // Verifica se o usuário está logado e tem perfil 'master'
        if (auth()->check() && auth()->user()->perfil === 'master') {
            return $next($request);
        }

        // Se não, redireciona (pode mudar para onde quiser)
        return redirect()->route('home')->with('error', 'Acesso negado.'); 
    }
}
