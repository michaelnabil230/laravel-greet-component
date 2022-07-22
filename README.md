# Greet component for user

[![Latest Version on Packagist](https://img.shields.io/packagist/v/michaelnabil230/laravel-greet-component.svg?style=flat-square)](https://packagist.org/packages/michaelnabil230/laravel-greet-component)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/michaelnabil230/laravel-greet-component/run-tests?label=tests)](https://github.com/michaelnabil230/laravel-greet-component/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/michaelnabil230/laravel-greet-component/Check%20&%20fix%20styling?label=code%20style)](https://github.com/michaelnabil230/laravel-greet-component/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/michaelnabil230/laravel-greet-component.svg?style=flat-square)](https://packagist.org/packages/michaelnabil230/laravel-greet-component)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[![](.assets/ko-fi.png)](https://ko-fi.com/michaelnabil230)[![](.assets/buymeacoffee.png)](https://www.buymeacoffee.com/michaelnabil230)[![](.assets/paypal.png)](https://www.paypal.com/paypalme/MichaelNabil23)

## Installation

You can install the package via composer:

```bash
composer require michaelnabil230/laravel-greet-component
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="greet-config"
```

This is the contents of the published config file:

```php
return [
    'is_christmas' => date('m') == 11 && date('d') == 25,

    'is_valentine' => date('m') == 1 && date('d') == 14,
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="greet-views"
```

## Usage

```html
<x-greet :username="$name" />

<x-greet username="Michael Nabil" />
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/michaelnabil230/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Michael Nabil](https://github.com/michaelnabil230)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
