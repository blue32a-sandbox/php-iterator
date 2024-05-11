<?php

$iterator = mt_rand(0, 1)
          ? new ArrayIterator(['orange', 'apple', 'grape'])
          : new EmptyIterator();

foreach ($iterator as $fruit) {
    echo $fruit . ', ';
}

echo PHP_EOL;
