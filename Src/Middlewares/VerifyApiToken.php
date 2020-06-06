<?php

namespace ApiCsrfProtection\Middlewares;

use ApiCsrfProtection\Exceptions\ApiException;
use ApiCsrfProtection\Services\VerifyTokenService;
use Closure;

class VerifyApiToken
{
    public function handle($request, Closure $next)
    {
        if ($request->method() == 'GET') {
            return $next($request);
        }

        $token = $request->get('__token') ?? null;

        if (!$token || !is_array($token)) {
            throw new ApiException('Token Invalid', 400);
        }

        if (VerifyTokenService::tokenIsValid($token)) {
            return $next($request);
        }

        throw new ApiException('Token Invalid', 400);
    }
}
