<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!$this->isAdmin($request)) {
            return response()->json([
                'success' => false,
                'message' => 'Anda tidak memiliki akses untuk melakukan operasi ini.',
                'data' => null
            ], 403);
        }
        return $next($request);
    }

       private function isAdmin($request)
    {
        return $request->user()->role_id == 1 || $request->user()->role_id == 2;
    }
    
}
