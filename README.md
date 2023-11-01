# Application health checks for Concept7 projects

[![Latest Version on Packagist](https://img.shields.io/packagist/v/concept7/health-checks.svg?style=flat-square)](https://packagist.org/packages/concept7/health-checks)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/concept7/health-checks/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/concept7/health-checks/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/concept7/health-checks/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/concept7/health-checks/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/concept7/health-checks.svg?style=flat-square)](https://packagist.org/packages/concept7/health-checks)

Default application health checks for Concept7 projects with Ohdear! enabled.

## Support us

Send some love.

## Installation

You can install the package via composer:

```bash
composer require concept7/health-checks
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="health-checks-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

Set your OH_DEAR_HEALTH_CHECK_SECRET in your .env file and enabled the application healt in Ohdear!

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

- [Jan Henk Hazelaar](https://github.com/concept7)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
