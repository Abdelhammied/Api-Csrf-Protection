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
You Can Create Public and private keys using 

```php
php artisan createencrytionkeys
```

### Start To Share The Public Key With Your Mobile Team .. 
### Let The Mobile Team Create A Random String Then Encrypt This String Using The Public Key 
### After That Convert This Encryption into base64_encode

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