<?php

require 'vendor/autoload.php';


$encode = new Base\Encode();
$decode = new Base\Decode();
$encode = $encode->encode(PHP_INT_MAX); //return Z
$decode = $decode->decode($encode); // return 24815682095
printf('The encode value of %s map directly to %s', $encode, $decode);
print "\n";