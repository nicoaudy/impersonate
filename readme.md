# Laravel Impersonate

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]

Simple package that do the trick, Impersonate makes it easy to authenticate as your users. Add a simple trait to your user model and impersonate as one of your users in one click.

## Installation

Via Composer

``` bash
$ composer require nicoaudy/impersonate
```

Add traits to your user model

```php
// User.php

use NicoAudy\Impersonate\Traits\Impersonate;

class User extends Authenticatable
{
    use Notifiable, Impersonate;
    

    // Other stuff
}
```

Register Middleware to route

```php
Route::middleware('impersonate')->group(function(){
     // your routes can be impersonates
});
```


## Usage

Impersonate a user :

```php
Auth::user()->setImpersonating($other_user_id);
```

Stop impersonating :
```php
Auth::user()->stopImpersonating();
```

Check if current user impersonating :
```php
Auth::user()->isImpersonating();
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

## Credits

- [NicoAudy][link-author]

## License

license. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/nicoaudy/impersonate.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/nicoaudy/impersonate.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/nicoaudy/impersonate
[link-downloads]: https://packagist.org/packages/nicoaudy/impersonate
[link-author]: https://github.com/nicoaudy
