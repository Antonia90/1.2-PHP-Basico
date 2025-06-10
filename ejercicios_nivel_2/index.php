<?php
require_once 'calculateTotalPaymentCall.php';
require_once 'calculateChocolateTotalCost.php';
require_once 'calculateChocolateTotalCost.php';
require_once 'calculateGumTotalCost.php';
require_once 'calculateCandyTotalCost.php';

//**Nivel 2**
//Ejercicio 1

echo "El total a pagar es: " . calculateTotalPaymentCall(10) . " céntimos.<br>";

//Ejercicio 2
$totalCost = calculateGumTotalCost(1) + calculateCandyTotalCost(1) + calculateChocolateTotalCost(2);
echo "Costo total a pagar: " . $totalCost . " euros.";