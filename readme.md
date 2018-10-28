# LaravelForgeFacade

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

A simple facade with the alias `LaravelForge` to access a instance of the [`themsaid/forge-sdk`](https://github.com/themsaid/forge-sdk).

## Installation

Via Composer

``` bash
$ composer require the-mr-tech/laravel-forge-facade
```

## Configuration

Add the `LARAVEL_FORGE_TOKEN` env variable to your `.env` as the example below:

```dotenv
LARAVEL_FORGE_TOKEN="YOUR_KEY_GOES_HERE"
```

## Usage

Simply use `LaravelForge` as a alias to a [`Themsaid\Forge\Forge`](https://github.com/themsaid/forge-sdk#usage) instance. There is some examples below: 

### Listing servers

```php
use LaravelForge;

LaravelForge::servers();
```

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email author email instead of using the issue tracker.

## License

license. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/themrtech/laravelforgefacade.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/themrtech/laravelforgefacade.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/themrtech/laravelforgefacade/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/themrtech/laravelforgefacade
[link-downloads]: https://packagist.org/packages/themrtech/laravelforgefacade
[link-travis]: https://travis-ci.org/themrtech/laravelforgefacade
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/themrtech
[link-contributors]: ../../contributors]
