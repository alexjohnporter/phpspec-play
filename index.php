<?php
require_once 'vendor/autoload.php';

use Calculator\Calculator;

$calc = new Calculator();

echo "2 + 2 = {$calc->add(2,2)} <br>";
echo "8 - 3 = {$calc->subtract(8,3)} <br>";
echo "3 * 9 = {$calc->multiply(3,9)} <br>";
echo "40 / 2 = {$calc->divide(40,2)} <br>";