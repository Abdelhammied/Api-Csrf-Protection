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

#### Create Keys 
You Can Create Public and private keys using ```php php artisan createencrytionkeys``` This will create public key and private keys at storage/app/keys, share the public keys with your mobile team. 
from the mobile team side start to create a random string with each non get request, use the public key to hask the string after that use base64_encode , send the data with the request .

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
