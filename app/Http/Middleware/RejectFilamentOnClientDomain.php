<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RejectFilamentOnClientDomain
{
    public function handle(Request $request, Closure $next): Response
    {
        $clientDomain = config('domains.client', 'client.morabangun.com');
        $host = $request->getHost();

        if ($host === $clientDomain && $request->is('admin*')) {
            abort(404);
        }

        return $next($request);
    }
}
