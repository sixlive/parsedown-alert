# Parsedown Alert

## *NOTE: This requires v1.8 of Parsedown, which has not been released yet.*

[![Packagist Version](https://img.shields.io/packagist/v/sixlive/parsedown-alert.svg?style=flat-square)](https://packagist.org/packages/sixlive/parsedown-alert)
[![Packagist Downloads](https://img.shields.io/packagist/dt/sixlive/parsedown-alert.svg?style=flat-square)](https://packagist.org/packages/sixlive/parsedown-alert)
[![Travis](https://img.shields.io/travis/sixlive/parsedown-alert.svg?style=flat-square)](https://travis-ci.org/sixlive/parsedown-alert)
[![Code Quality](https://img.shields.io/scrutinizer/g/sixlive/parsedown-alert.svg?style=flat-square)](https://scrutinizer-ci.com/g/sixlive/parsedown-alert/)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/sixlive/parsedown-alert.svg?style=flat-square)](https://scrutinizer-ci.com/g/sixlive/parsedown-alert/)
[![StyleCI](https://github.styleci.io/repos/156152871/shield)](https://github.styleci.io/repos/156152871)

## Installation
You can install the package via composer:

```bash
> composer require sixlive/parsedown-alert
```

## Usage

```md
# Here is a post

::: warning
**Warning**
This post is over a year old. Some of this information may be out of date.
:::
```

```php
$parsedown = new \sixlive\ParsedownAlert;

$parsedown->text(file_get_contents(__DIR__.'/README.md'));
```

```html
<div class="alert-warning">
    <strong>Warning</strong>
    <p>This post is over a year old. Some of this information may be out of date.</p>
</div>
```

## Testing

``` bash
> composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Code Style
In addition to the php-cs-fixer rules, StyleCI will apply the [Laravel preset](https://docs.styleci.io/presets#laravel).

### Linting
```bash
> composer styles:lint
```

### Fixing
```bash
> composer styles:fix
```

## Security

If you discover any security related issues, please email oss@tjmiller.co instead of using the issue tracker.

## Credits

- [TJ Miller](https://github.com/sixlive)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
