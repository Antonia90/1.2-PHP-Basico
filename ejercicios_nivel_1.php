<?php
//Ejercicio 1

echo "<h3> Ejercicio 1 </h3>";
$int = 1;
$double = 2.5;
$str = "Buen día";
$bool = true;

echo $int . "<br>";
echo $double . "<br>";
echo $str . "<br>";
echo $bool . "<br>";

define('NOMBRE', "Antonia");
echo "<h1>" . NOMBRE . "</h1>";

//Ejercicio 2
echo "<h3> Ejercicio 2 </h3>";

$greeting = "Hello, World!";
echo $greeting . "<br>";

$greeting = strtoupper($greeting);
echo $greeting . "<br>";

echo strlen($greeting) . "<br>";

echo strrev($greeting) . "<br>";

$curso_php = "Este es el curso de PHP.";
echo $greeting . " " .  $curso_php . "<br>";

//Ejercicio 3
echo "<h3> Ejercicio 3 </h3>";

$x = 2;
$y = 3;
$n = 6.5;
$m = 4.2;

echo "X = " . $x . "<br>";
echo "Y = " . $y . "<br>";
echo "X + Y = " . $x + $y . "<br>";
echo "X - Y = " . $x - $y . "<br>";
echo "X * Y = " . $x * $y . "<br>";
echo "X % Y = " . $x % $y . "<br>";
echo "<br>";
echo "N = " . $n . "<br>";
echo "M = " . $m . "<br>";
echo "N + M = " . $n + $m . "<br>";
echo "N - M = " . $n - $m . "<br>";
echo "N * M = " . $n * $m . "<br>";
echo "N % M = " . $n % $m . "<br>";
echo "<br>";
echo $x * 2 . "<br>";
echo $y * 2 . "<br>";
echo $n * 2 . "<br>";
echo $m * 2 . "<br>";
echo "<br>";
echo $y + $y + $n + $m;
echo "<br>";
echo $y * $y * $n * $m;
echo "<br>";

function calculadora(int|float $x, int|float $y, string $str): int|float
{
    switch ($str) {
        case "+":
            return $x + $y;
            break;
        case "-":
            return $x - $y;
            break;
        case "*":
            return $x * $y;
            break;
        case "/":
            return $x / $y;
        default:
            echo "Ingrese un caracter válido";
            return 0;
    }
}
echo calculadora(2, 3, "*");

//Ejercicio 4
echo "<h3> Ejercicio 4 </h3>";

function contador(int $numSalto, int $numTope = 10): void
{
    $i = 0;
    while ($i <= $numTope) {
        echo $i . "<br>";
        $i += $numSalto;
    }
}

contador(5);
contador(2, 15);

//Ejercicio 5
echo "<h3> Ejercicio 5 </h3>";

function verificarGrado(int|float $nota): string
{
    if ($nota < 0 || $nota > 10) {
        return "Nota inválida";
    }
    $porcentaje = $nota * 10;

    if ($porcentaje >= 60) {
        return "Primera División";
    } elseif ($porcentaje >= 45) {
        return "Segunda División";
    } elseif ($porcentaje >= 33) {
        return "Tercera División";
    } else {
        return "Debe repetir la cursada";
    }
}
echo verificarGrado(7);

//Ejercicio 6
echo "<h3> Ejercicio 6 </h3>";

function isBitten(): bool
{
    return rand(0, 1) === 1;
}
if (isBitten()) {
    echo "Charlie te mordió el dedo!";
} else {
    echo "Charlie no te mordió el dedo.";
}
