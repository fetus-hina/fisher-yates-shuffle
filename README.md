fisher-yates-shuffle
====================

Simple implementation of Fisher-Yates Shuffle algorithm.


REQUIREMENTS
------------

* PHP 5.4 or later (strongly recommended PHP 5.6 or later)
* Composer


USAGE
-----

1. Install via [Composer](https://getcomposer.org/).

    `$ composer.phar require "jp3cki/fisher-yates-shuffle"`

2. Use `jp3cki\fisherYatesShuffle\shuffle` function.

### PHP 5.6 or later ###

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use function jp3cki\fisherYatesShuffle\shuffle as fy_shuffle;

$list = range(1, 10);

fy_shuffle($list);

var_dump($list);
```

### PHP 5.4 or 5.5 ###

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$list = range(1, 10);

\jp3cki\fisherYatesShuffle\shuffle::shuffle($list);

var_dump($list);
```


LICENSE
-------

Released under [the Unlicense](http://unlicense.org/).
It means this library is a public domain software.
