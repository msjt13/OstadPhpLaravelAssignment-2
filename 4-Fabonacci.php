<?php

function printFibonacci($n) {
    $a = 0;
    $b = 1;
    for ($i = 0; $i < $n; $i++) {
        echo $a . " ";
        $temp = $b;
        $b = $a + $b;
        $a = $temp;
    }
}

printFibonacci(15);