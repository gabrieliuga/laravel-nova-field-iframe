# Laravel nova field iframe
[![Build Status](https://img.shields.io/travis/gabrieliuga/laravel-nova-field-iframe/master.svg?style=flat-square)](https://travis-ci.org/gabrieliuga/laravel-nova-field-iframe)
[![Quality Score](https://img.shields.io/scrutinizer/g/gabrieliuga/laravel-nova-field-iframe.svg?style=flat-square)](https://scrutinizer-ci.com/g/gabrieliuga/laravel-nova-field-iframe)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/gabrieliuga/laravel-nova-field-iframe.svg?style=flat-square)](https://packagist.org/packages/gabrieliuga/laravel-nova-field-iframe)
[![StyleCI](https://github.styleci.io/repos/234938102/shield?branch=master)](https://github.styleci.io/repos/234938102)
[![Total Downloads](https://img.shields.io/packagist/dt/gabrieliuga/laravel-nova-field-iframe.svg?style=flat-square)](https://packagist.org/packages/gabrieliuga/laravel-nova-field-iframe)

Allows you to add iframe fields on the details of a nova resource


## Installation

You can install the package via composer:

```bash
composer require gabrieliuga/laravel-nova-field-iframe
```

## Usage
``` php
use Giuga\LaravelNovaFieldIframe\Iframe;

....

 public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),
            Iframe::make('Message')->onlyOnDetail()
        ];
    }
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email me@iuga.dev instead of using the issue tracker.

## Credits

- [Gabriel Iuga](https://github.com/gabrieliuga)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
