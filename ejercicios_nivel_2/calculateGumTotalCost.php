<?php
function calculateGumTotalCost(int $gumQuantity): int|float
{
    $gumCost = 0.5;
        if ($gumQuantity < 0) {
        return 0;
    }
    return $gumCost * $gumQuantity;
}
