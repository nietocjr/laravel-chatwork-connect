# Seamless integration of Chatwork API with Laravel for easy messaging.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/nietocjr/laravel-chatwork-connect.svg?style=flat-square)](https://packagist.org/packages/nietocjr/laravel-chatwork-connect)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/nietocjr/laravel-chatwork-connect/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/nietocjr/laravel-chatwork-connect/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/nietocjr/laravel-chatwork-connect/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/nietocjr/laravel-chatwork-connect/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/nietocjr/laravel-chatwork-connect.svg?style=flat-square)](https://packagist.org/packages/nietocjr/laravel-chatwork-connect)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require nietocjr/laravel-chatwork-connect
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-chatwork-connect-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-chatwork-connect-config"
```

This is the contents of the published config file:

```php
return [
    'lcc_apikey' => env('LCC_CHATWORK_APIKEY'),
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-chatwork-connect-views"
```

## Usage

```php
$laravelChatworkConnect = new nietocjr\LaravelChatworkConnect();
echo $laravelChatworkConnect->echoPhrase('Hello, nietocjr!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Nieto Jose](https://github.com/nietocjr)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
