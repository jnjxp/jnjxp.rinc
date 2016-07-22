# jnjxp.rinc
Round numbers to increments

[![Latest version][ico-version]][link-packagist]
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]

## Installation
```
composer require jnjxp/rinc
```

## Usage
```php
use Jnjxp\Rinc;

// Rounder
$roundTo = new Rinc\RoundTo;

echo $roundTo->nearest(1/4, 0.24);  // 0.25
echo $roundTo->next(1/4, 0.26);     // 0.5
echo $roundTo->previous(1/4, 0.46); // 0.25

// Increment
$quarter = new Rinc\Increment(1/4);
echo $quarter(0.24);           // 0.25 (same as nearest())
echo $quarter->nearest(0.24);  // 0.25
echo $quarter->next(0.26);     // 0.5
echo $quarter->previous(0.46); // 0.25

// Named Convenience Constructors
$eighth  = Rinc\Increment::eighth();  // new Rinc\Increment(1/8)
$quarter = Rinc\Increment::quarter(); // new Rinc\Increment(1/4)
$half    = Rinc\Increment::half();    // new Rinc\Increment(1/2)
```



[ico-version]: https://img.shields.io/packagist/v/jnjxp/rinc.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/jnjxp/jnjxp.rinc/develop.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/jnjxp/jnjxp.rinc.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/jnjxp/jnjxp.rinc.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/jnjxp/rinc
[link-travis]: https://travis-ci.org/jnjxp/jnjxp.rinc
[link-scrutinizer]: https://scrutinizer-ci.com/g/jnjxp/jnjxp.rinc
[link-code-quality]: https://scrutinizer-ci.com/g/jnjxp/jnjxp.rinc
