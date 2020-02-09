<?php

namespace ApiCsrfProtection\Exceptions;

use Exception;
use Illuminate\Http\Request;

class ApiException extends Exception
{
    public function render(Request $request)
    {
        $json = [
            'success' => false,
            'message' => $this->message,
            'status_code' => $this->code ?? 400
        ];

        return response()->json($json, $this->code ?? 400);
    }
}
