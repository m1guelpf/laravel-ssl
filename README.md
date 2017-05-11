# Enforce SSL for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/m1guelpf/laravel-ssl.svg?style=flat-square)](https://packagist.org/packages/m1guelpf/laravel-ssl)
[![Software License](https://img.shields.io/github/license/m1guelpf/laravel-ssl.svg?style=flat-square)](LICENSE.md)
[![Total Downloads](https://img.shields.io/packagist/dt/m1guelpf/laravel-ssl.svg?style=flat-square)](https://packagist.org/packages/m1guelpf/laravel-ssl)

Laravel SSL is a Laravel package that allows you to enforce HTTPS in certain parts of your site, or even the entire site!

## Installation

You can install the package via composer:

``` bash
composer require m1guelpf/laravel-ssl
```

Next, you must install the service provider:

```php
// config/app.php
'providers' => [
    ...
    M1guelpf\LaravelSSL\LaravelSSLServiceProvider::class,
];
```

## Usage

Your app is now HTTPS-only!

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email soy@miguelpiedrafita.com instead of using the issue tracker.

## Credits

- [Miguel Piedrafita](https://github.com/m1guelpf)
- [All Contributors](../../contributors)

## License

This package is licensed under the Mozilla Public license. Please see [License File](LICENSE.md) for more information.
