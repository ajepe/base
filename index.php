<?php

require 'vendor/autoload.php';

use Base\Decode;
use Base\Encode;

$encode = new Encode();
$decode = new Decode();
$encode = $encode->encode(PHP_INT_MAX); //return __HXy0p9__
$decode = $decode->decode($encode); // return 24815682095
printf('The encode value of %s map directly to %s', $encode, $decode);
print "\n";