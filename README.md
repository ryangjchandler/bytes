# A class to help convert bytes into other units (kb, mb, etc).

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ryangjchandler/bytes.svg?style=flat-square)](https://packagist.org/packages/ryangjchandler/bytes)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/ryangjchandler/bytes/run-tests?label=tests)](https://github.com/ryangjchandler/bytes/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/ryangjchandler/bytes/Check%20&%20fix%20styling?label=code%20style)](https://github.com/ryangjchandler/bytes/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ryangjchandler/bytes.svg?style=flat-square)](https://packagist.org/packages/ryangjchandler/bytes)

This package can be used to convert `int|float` values from bytes to `KB`, `MB` and `GB` as well as `KiB`, `MiB` and `GiB`.

## Installation

You can install the package via Composer:

```bash
composer require ryangjchandler/bytes
```

## Usage

You can instantiate a new `Converter` class via the `new` keyword or the static `Converter::from` constructor.

```php
use RyanChandler\Bytes\Converter;

$converter = new Converter(1_000);

$converter = Converter::from(1_000);
```

You can then use the available methods to convert from bytes to `KB`, `MB`, `GB`, `KiB`, `MiB` or `GiB`.

```php
$kb = $converter->toKb();
$kib = $converter->toKiB();
$mb = $converter->toMb();
$mib = $converter->toMiB();
$gb = $converter->toGb();
$gib = $converter->toGiB();
```

## Testing

```bash
composer test:unit
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Credits

- [Ryan Chandler](https://github.com/ryangjchandler)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
