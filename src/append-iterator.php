<?php

$iterator = new AppendIterator();
$iterator->append(new ArrayIterator(['orange', 'apple', 'grape']));
$iterator->append(new ArrayIterator(['banana', 'kiwi', 'apple']));

foreach ($iterator as $fruit) {
    echo $fruit . ', ';
}
echo PHP_EOL;
