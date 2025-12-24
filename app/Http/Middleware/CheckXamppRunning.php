<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckXamppRunning
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Cek Port MySQL (3306) yang dipakai XAMPP
        $connection = @fsockopen('127.0.0.1', 3306, $errno, $errstr, 1);

        if (!is_resource($connection)) {
            // Jika tidak bisa connect ke MySQL XAMPP, tampilkan error dan hentikan
            return response('<h1>Error: XAMPP is OFF</h1><p>Please turn on XAMPP (Apache & MySQL) to access this website.</p>', 503);
        }

        fclose($connection);

        return $next($request);
    }
}
