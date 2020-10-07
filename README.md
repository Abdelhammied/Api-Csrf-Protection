# Api-Csrf-Protection
This Package is used to secure apis from any cross sites request forgery while wroking with mobile applications using rsa assemetric key with two ways authentication with your mobile team / any one who wants to interact with your apis 

**This Package uses phpseclib/phpseclib**

## Installation

```composer
composer require abdelhammied/api-csrf-protection
```

## Configuration

We Are Setting Every Thing To You We Only Need Your Support And Have Fun With Our Package

## Usage
1. Create Public and private keys using  ```php artisan createencrytionkeys``` This will create public key and private keys at ```storage/app/keys```, share the public keys with your mobile team.
2. Start to define the middleware as route middleware at ``` app/Http/Kernel.php ``` using this middleware ```\ApiCsrfProtection\Middlewares\VerifyApiToken::class```
3. You can define which apis to be secured with the package ``` should be Not GET method ```
4. from the mobile team side start to create a random string with each not GET request, use the public key to hash the string after that use base64_encode with the hased value, send the data with the request like: 

```json
{
  "__token": {
    "plainText": "$RANDOM_STRING",
    "cipherText": "$HASHED_VALUE"
  }
}
```

### For Any Inquires please contact us : 
``` abdelhammied@gmail.com ```
 
