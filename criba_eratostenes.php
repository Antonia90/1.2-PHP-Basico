<?php

function calculateCriba(int $topNumber): array
{
    $startNumber = 2;
    $allNumbers = range($startNumber, $topNumber);
    $primeNumbers = $allNumbers;

    foreach ($allNumbers as $number) {
        if (pow($number, 2) > $topNumber) {
            break;
        }
        $primeNumbers = array_filter($primeNumbers, function ($x) use ($number) {
            return ($x == $number) || ($x % $number != 0);
        });
    }

    return array_values($primeNumbers);
}

print_r(calculateCriba(30));