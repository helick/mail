# Helick Mail

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Software License][ico-license]](LICENSE.md)
[![Quality Score][ico-code-quality]][link-code-quality]

Mail integration.

## Requirements

Make sure all dependencies have been installed before moving on:

* [PHP](http://php.net/manual/en/install.php) >= 7.1
* [Composer](https://getcomposer.org/download/)

## Install

Install via Composer:

``` bash
$ composer require helick/mail
```

Update your application config by declaring the following:

``` php
Config::define('MAIL_HOST', env('MAIL_HOST'));
Config::define('MAIL_PORT', env('MAIL_PORT'));
Config::define('MAIL_USER', env('MAIL_USER'));
Config::define('MAIL_PASSWORD', env('MAIL_PASSWORD'));
```

Update your env variables by declaring the following:

``` dotenv
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USER=null
MAIL_PASSWORD=null
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email evgenii@helick.io instead of using the issue tracker.

## Credits

- [Evgenii Nasyrov][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/helick/mail.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/helick/mail.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/helick/mail.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/helick/mail
[link-code-quality]: https://scrutinizer-ci.com/g/helick/mail
[link-downloads]: https://packagist.org/packages/helick/mail
[link-author]: https://github.com/nasyrov
[link-contributors]: ../../contributors
