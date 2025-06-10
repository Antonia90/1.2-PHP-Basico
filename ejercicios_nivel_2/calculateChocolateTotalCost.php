<?php
function calculateChocolateTotalCost(int $chocolateQuantity): int|float
{
    $chocolateCost = 1;
    if ($chocolateQuantity < 0) {
        return 0;
    }
    return $chocolateQuantity * $chocolateCost;
}
