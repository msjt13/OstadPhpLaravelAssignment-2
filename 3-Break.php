<?php

$a = 0;
$b = 1;

for ($i = 0; $i < 10; $i++) {
    $fib = $a + $b;
    if ($fib > 100) {
        break;
    }
    echo $fib . " ";
    $a = $b;
    $b = $fib;
}