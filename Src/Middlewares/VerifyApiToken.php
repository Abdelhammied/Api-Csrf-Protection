<?php

namespace ApiCsrfProtection\Middlewares;

use Closure;
use App\Services\Auth\ApiCsrfVerification;
use ApiCsrfProtection\Exceptions\ApiException;

class VerifyApiToken
{
    public function handle($request, Closure $next)
    {
        if ($request->method() == 'GET') {
            return $next($request);
        }

        $token = $request->get('__token') ?? null;

        if (!$token || !is_array($token)) {
            throw new ApiException("Token Invalid", 400);
        }

        if (ApiCsrfVerification::tokenIsValid($token)) {
            return $next($request);
        }

        throw new ApiException("Token Invalid", 400);
    }
    }
}
