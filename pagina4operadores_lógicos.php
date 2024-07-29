<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operadores lógicos</title>
</head>
<body>
<?php
// Definir variables
$nota_final = 85; // Nota final del estudiante
$asistencia = 90; // Porcentaje de asistencia

// Criterios de aprobación
$nota_minima = 70;
$asistencia_minima = 75;

$aprueba = ($nota_final >= $nota_minima) && ($asistencia >= $asistencia_minima);
$no_aprueba = !$aprueba;

// Mostrar resultado
echo "<h1>Resultado del Curso</h1>";
echo "<p>Nota final: $nota_final</p>";
echo "<p>Asistencia: $asistencia%</p>";
echo "<p>El estudiante aprueba el curso: " . ($aprueba ? "Sí" : "No") . "</p>";
echo "<p>El estudiante no aprueba el curso: " . ($no_aprueba ? "Sí" : "No") . "</p>";
?>
    
</body>
</html>