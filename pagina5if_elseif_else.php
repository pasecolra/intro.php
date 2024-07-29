<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instrucciones IF_ELSEIF_ELSE</title>
</head>
<body>
<?php
// Definir la variable
$edad = 30; // Puedes cambiar este valor para probar otras edades

// Clasificar la edad
if ($edad < 18) {
    echo "<h1>Resultado</h1>";
    echo "<p>La persona es menor de edad.</p>";
} elseif ($edad <= 65) {
    echo "<h1>Resultado</h1>";
    echo "<p>La persona es adulta.</p>";
} else {
    echo "<h1>Resultado</h1>";
    echo "<p>La persona es anciana.</p>";
}
?>
    
</body>
</html>