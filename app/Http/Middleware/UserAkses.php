<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAkses
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next, ...$allowedRoles): Response
    {
        $userRole = auth()->user()->role_id;

        if (in_array($userRole, $allowedRoles)) {
            return $next($request);
        }

        return response()->json(['error' => 'Anda Tidak Bisa Mengakses Halaman Ini'], 403);
    }
}