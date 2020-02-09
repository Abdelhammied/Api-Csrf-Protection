# Api-Csrf-Protection
This Package is used to secure apis from any cross sites request forgery while wroking with mobile applications using rsa assemetric key with two ways authentication with your mobile team / any one who wants to interact with your apis 

** This Package uses phpseclib/phpseclib **

## Installation

```composer
composer require abdelhammied/api-csrf-protection
```

## Configuration

We Are Setting Every Thing To You We Only Need Your Support And Have Fun With Our Package

## Usage

#### 1 Create The Public / Private Keys  => php artisan createencrytionkeys 

```json
{
    "name": "vendor/package",
    ...
    "autoload": {
        "psr-4": {
            "Vendor\\Package\\": "src/"
        }
    },
    ...
},
```


### config/packagename.php

Rename `config/packagename.php` to something more useful, like `config/my-package.php`.  This is the configuration file that Laravel will publish into it's `config` directory.  Laravel 5 doesn't use the `config/packages/vendor/...` structure that Laravel 4 did, so pick a file name that's not likely to conflict with existing configuration files.


### src/ServiceProvider.php

Open up `src/ServiceProvider.php` as well.  At a minimum you'll need to change the namespace at the top of the file (it needs to match the PSR-4 namespace you set in `composer.json`).

In the `boot()` method, comment out or uncomment the components your package will need.  For example, if your package only has a configuration, then you can comment out everything except the `handleConfigs()` call:

```php
public function boot() {
    $this->handleConfigs();
    // $this->handleMigrations();
    // $this->handleViews();
    // $this->handleTranslations();
    // $this->handleRoutes();
}
```

In the `handleConfigs()` method, you'll want to change the "packagename" references to the name you chose up above (in the [config/packagename.php] instructions).

For the other methods, again change instances of "vendor" and "packagename" to your package's name.


### Last Steps

Update the `LICENSE` file as required (make sure it matches what you said your package's license is in `composer.json`).

Finally, edit this `README.md` file and replace it with a description of your own, awesome Laravel 5 package.

Commit everything to your (newly initialized) git repo, and push it wherever you'll keep your package (Github, etc.).

Enjoy coding!