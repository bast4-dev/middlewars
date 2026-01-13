<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class LogRequestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Récupérer le User-Agent
        $userAgent = $request->header('User-Agent');
        
        // Logger l'info
        Log::info('Navigateur utilisé : ' . $userAgent);
        
        // Continuer vers le controller
        return $next($request);
    }
}
