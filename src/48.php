<?php
function calculateGCD($a, $b) {
    while ($b != 0) {
        $temp = $a % $b;
        $a = $b;
        $b = $temp;
    }
    return $a;
}

$number1 = 48;
$number2 = 60;

function findGCD($num1, $num2) {
    while ($num2 != 0) {
        $temp = $num1 % $num2;
        $num1 = $num2;
        $num2 = $temp;
    }
    return $num1;
}

$gcdValue = findGCD($number1, $number2);
echo "The GCD of $number1 and $number2 is: $gcdValue";
