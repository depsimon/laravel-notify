# laravel-notify

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)

This package provides an easy way to flash notifications using bootstrap-notify.

## Install

Via Composer

``` bash
$ composer require depsimon/laravel-notify
```

## Usage

``` php
session()->flash('laravel-notify', ['message' => 'Profile updated!']);
```

## Security

If you discover any security related issues, please email simon@webartisan.be instead of using the issue tracker.

## Credits

- [Simon Depelchin][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/depsimon/laravel-notify.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/depsimon/laravel-notify
[link-travis]: https://travis-ci.org/depsimon/laravel-notify
[link-scrutinizer]: https://scrutinizer-ci.com/g/depsimon/laravel-notify/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/depsimon/laravel-notify
[link-downloads]: https://packagist.org/packages/depsimon/laravel-notify
[link-author]: https://github.com/depsimon
[link-contributors]: ../../contributors
