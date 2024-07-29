<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>union de cadenas</title>
</head>
<body>
<?php
// Definir variables de cadena
$nombre = "Juan";
$apellido = "Pérez";
$ciudad = "Barcelona";

// Unir las cadenas
$frase = "Hola, mi nombre es " . $nombre . " " . $apellido . " y vivo en " . $ciudad . ".";

// Mostrar la frase completa
echo "<h1>Frase Completa</h1>";
echo "<p>$frase</p>";
?>
    
</body>
</html>