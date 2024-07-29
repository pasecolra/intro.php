<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operadores comparación</title>
</head>
<body>
<?php
// Definir dos números
$num1 = 10;
$num2 = 20;

// Comparaciones
$igual = ($num1 == $num2);
$diferente = ($num1 != $num2);
$mayor = ($num1 > $num2);
$menor = ($num1 < $num2);
$mayor_o_igual = ($num1 >= $num2);
$menor_o_igual = ($num1 <= $num2);

// Mostrar resultados
echo "<h1>Resultados de Comparación</h1>";
echo "<p>$num1 es igual a $num2: " . ($igual ? "Sí" : "No") . "</p>";
echo "<p>$num1 es diferente de $num2: " . ($diferente ? "Sí" : "No") . "</p>";
echo "<p>$num1 es mayor que $num2: " . ($mayor ? "Sí" : "No") . "</p>";
echo "<p>$num1 es menor que $num2: " . ($menor ? "Sí" : "No") . "</p>";
echo "<p>$num1 es mayor o igual a $num2: " . ($mayor_o_igual ? "Sí" : "No") . "</p>";
echo "<p>$num1 es menor o igual a $num2: " . ($menor_o_igual ? "Sí" : "No") . "</p>";
?>
    
</body>
</html>