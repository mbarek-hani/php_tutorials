<?php

// data type & type casting

//bool true or false
// $completed = true;
//integer 1,2,3,4,-5,100,0...
// $counter = 12;
//float
// $price = 9.99;
//string
// $name = "Mbarek";

// echo $completed . PHP_EOL;
// echo $counter . PHP_EOL;
// echo $price . PHP_EOL;
// echo $name . PHP_EOL;

// echo "=======================================" . PHP_EOL;

// echo gettype($completed) . PHP_EOL;
// echo gettype($counter) . PHP_EOL;
// echo gettype($price) . PHP_EOL;
// echo gettype($name) . PHP_EOL;

// echo "=======================================" . PHP_EOL;

// var_dump($completed);
// var_dump($counter);
// var_dump($price);
// var_dump($name);

declare(strict_types=1);

echo "=======================================" . PHP_EOL;

//array
$items = [1, 2, "mbarek", 0, true, 9.15];
echo "=======================================" . PHP_EOL;
var_dump($items);
echo "=======================================" . PHP_EOL;
print_r($items);
echo "=======================================" . PHP_EOL;

function sum(int $x, int $y): int {
    return $x + $y;
}

$result = sum(12, 10);
// $result = sum('12', '20'); ERROR

$num = (int)'12';