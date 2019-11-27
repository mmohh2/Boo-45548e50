<?php

$a = (false && foo());
$b = (true  || foo());
$c = (false and foo());
$d = (true  or  foo());


$f = false or true;


$g = true && false;

$h = true and false;

var_dump($g, $h);
