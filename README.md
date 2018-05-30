[![Latest Stable Version](https://poser.pugx.org/tomgrohl/laravel4-php71-encrypter/v/stable)](https://packagist.org/packages/tomgrohl/laravel4-php71-encrypter)
[![Latest Unstable Version](https://poser.pugx.org/tomgrohl/laravel4-php71-encrypter/v/unstable)](https://packagist.org/packages/tomgrohl/laravel4-php71-encrypter)
[![License](https://poser.pugx.org/tomgrohl/laravel4-php71-encrypter/license)](https://packagist.org/packages/tomgrohl/laravel4-php71-encrypter)

# Laravel 4.2 Encrypter for PHP 7.1+

A port of the Laravel 5.4 Encrypter for 4.2 with PHP 7.1 support.

Due to mcrypt being deprecated in 7.1 you can't run Laravel 4.2 under PHP 7.1 without a lot of deprecate warnings.

This package adds a PHP 7.1+ Encrypter for Laravel 4.2

> **Note:** Backward compatibility has been added in version 1.1.0 for PHP 5.6+ to make upgrading easier

## Installation

You can install it using composer:

`composer require tomgrohl/laravel4-php71-encrypter`


## Configuration

### 1 .Add service provider

Add the following to your `providers` in the `app` config

```
\Tomgrohl\Laravel\Encryption\EncryptionServiceProvider::class
```

### 2. Check Encryption Key settings in app config

Cipher must either be 'AES-128-CBC' with a key length of 16

OR     
       
Cipher must either be 'AES-256-CBC' with a key length of 32


### 3.  You're good to go!


# Credits

- Peter Fritchley - Fellow co-worker that wrote this originally for a project

# License

MIT