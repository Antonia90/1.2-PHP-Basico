<?php

function calculateTotalPaymentCall(int|float $duration, bool $inCents = true): int|float
{
    define('MIN_DURATION', 3);
    define('MIN_COST', 10);
    define('EXTRA_MIN_COST', 5);

    if ($duration <= MIN_DURATION) {
        return MIN_COST;
    }
    $extraMinutes = ceil($duration - MIN_DURATION);

    $total = MIN_COST + ($extraMinutes * EXTRA_MIN_COST);

    return $inCents ? $total : ($total / 100);
}
