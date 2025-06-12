<?php
require_once 'calculateTotalPaymentCall.php';
require_once 'calculateChocolateTotalCost.php';
require_once 'calculateChocolateTotalCost.php';
require_once 'calculateGumTotalCost.php';
require_once 'calculateCandyTotalCost.php';

//**Nivel 2**
//Ejercicio 1
$inCents = false;
$total = calculateTotalPaymentCall(10, $inCents);

echo "El total a pagar es: " . $total;
if ($inCents) {
    echo " céntimos.<br>";
} else {
    echo " euros. <br>";
};

//Ejercicio 2
$totalCost = calculateGumTotalCost(1) + calculateCandyTotalCost(1) + calculateChocolateTotalCost(2);
echo "Costo total a pagar: " . $totalCost . " euros.";
