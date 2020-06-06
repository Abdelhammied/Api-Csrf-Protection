<?php

namespace ApiCsrfProtection\Services;

use ApiCsrfProtection\Exceptions\ApiException;
use ApiCsrfProtection\Model\ApiToken;
use phpseclib\Crypt\RSA;

class VerifyTokenService
{
    public static function tokenIsValid(array $token)
    {
        $apiCsrfVerification = new static();

        $token = $apiCsrfVerification->tokenBodyValidation($token);

        $rsa = new RSA();

        $privateKey = file_get_contents(storage_path('app/keys/privateKey.pem'));

        $rsa->loadKey($privateKey);

        try {
            return $rsa->decrypt(base64_decode($token['cipherText'])) == $token['plainText'] ? ApiToken::create([
                'token' => $token['plainText'],
            ]) : false;
        } catch (\Throwable $ex) {
            throw new ApiException('Invalid Token', 400);
        }
    }

    public function tokenBodyValidation($token)
    {
        if (array_key_exists('plainText', $token) && array_key_exists('cipherText', $token)) {
            return $token;
        }

        throw new ApiException('Invalid Token Body', 400);
    }
}
