<?php

/**
 * ArrayIterator
 */

$fruits = ['orange', 'apple', 'grape'];

$iterator = new ArrayIterator($fruits);

foreach ($iterator as $fruit) {
    echo $fruit . ', ';
}
echo PHP_EOL;

$iterator->natsort();
foreach ($iterator as $fruit) {
    echo $fruit . ', ';
}
echo PHP_EOL;

$iterator->rewind();
var_dump($iterator->valid());
echo $iterator->current() . PHP_EOL;
echo $iterator->key() . PHP_EOL;

$iterator->next();
var_dump($iterator->valid());
echo $iterator->current() . PHP_EOL;
echo $iterator->key() . PHP_EOL;

$iterator->next();
var_dump($iterator->valid());
echo $iterator->current() . PHP_EOL;
echo $iterator->key() . PHP_EOL;

$iterator->next();
var_dump($iterator->valid());
