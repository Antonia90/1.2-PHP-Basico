<?php

function calculateTotalPaymentCall(int|float $duration): int|float
{
    $minDuration = 3;
    $minCost = 10;
    $extraMinuteCost = 5;

    if ($duration <= $minDuration) {
        return $minCost;
    }
    $extraMinutes = ceil($duration - $minDuration);

    $total = $minCost + ($extraMinutes * $extraMinuteCost);

    return ($total/100);
}