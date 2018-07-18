[![Build Status](https://travis-ci.org/ajepe/base62.svg?branch=master)](https://travis-ci.org/ajepe/base)
## BASE62 
Base is a small package that encodes integer to a string and decodes the same string back to an integer, this is can useful in making  URL shortening application or generating unique URL slug. It convert the __int__ id to base 62 characters with the encode method and converts it back to an integer with the decode public method.

* It converts non-negative integer number like _42000000_  up to _PHP\_INT\_SIZE_ of the platform in which the package is being use on into a string like _2Qe7m_. The action is reversible.
* It can also decode the id back from _2Qe7m_ to _42000000_.
* This is useful in youtube like url or simply using them making url shortening website.


### Install

Via Composer
``` bash
composer require ajepe/base62:0.0.2
```

### Usage

``` php
require 'vendor/autoload.php';


$encode = new Base\Encode();
$decode = new Base\Decode();
$encode = $encode->encode(PHP_INT_MAX); //return HXy0p9
$decode = $decode->decode($encode); // return 24815682095
printf('The encode value of %s map directly to %s', $encode, $decode);

```
[README.md](README.md), [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [LICENSE.txt](LICENSE) and [composer.json](composer.json)

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.
