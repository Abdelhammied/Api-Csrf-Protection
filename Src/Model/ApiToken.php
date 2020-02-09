<?php

namespace ApiCsrfProtection\Model;

use Illuminate\Database\Eloquent\Model;

class ApiToken extends Model
{
    protected $fillable = [
        'token'
    ];

    public function getKey()
    {
        return 'token';
    }
}
