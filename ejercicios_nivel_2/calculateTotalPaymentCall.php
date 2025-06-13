<?php

const MIN_DURATION = 3;
const MIN_COST = 10;
const EXTRA_MIN_COST = 5;

function calculateTotalPaymentCall(int|float $duration, bool $inCents = true): int|float
{
    if ($duration <= MIN_DURATION) {
        return MIN_COST;
    }
    $extraMinutes = ceil($duration - MIN_DURATION);

    $total = MIN_COST + ($extraMinutes * EXTRA_MIN_COST);

    return $inCents ? $total : ($total / 100);
}
