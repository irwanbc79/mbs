<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetClientSessionCookie
{
    public function handle(Request $request, Closure $next): Response
    {
        config([
            'session.cookie'    => 'mbs_client_session',
            'session.domain'    => null, // Host-only cookie to isolate from admin
            'session.path'      => '/',
            'session.same_site' => 'lax',
            'session.secure'    => true,
        ]);

        return $next($request);
    }
}
