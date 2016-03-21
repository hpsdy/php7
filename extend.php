<?php
error_reporting(0);
class My {
	public $name='blue y';
}

Threaded::extend(My);

$my = new My();
var_dump(count($my));
var_dump($my->chunk(1));
var_dump($my instanceof Threaded);
?>
