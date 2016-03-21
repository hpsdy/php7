<?php
$array = [];

while (count($array) < 10)
    $array[] = count($array);

$stdClass = new stdClass();
$stdClass->foo = "foo";
$stdClass->bar = "bar";
$stdClass->baz = "baz";

$safe = new Threaded();
$safe->merge($array);
$safe->merge($stdClass);

var_dump($safe);
?>
