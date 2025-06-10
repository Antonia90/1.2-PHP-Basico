<?php
function calculateCandyTotalCost(int $candyQuantity): int|float
{
    $candyCost = 1.5;
    if ($candyQuantity < 0) {
        return 0;
    }
    return $candyCost * $candyQuantity;
}
