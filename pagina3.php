<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        define('PI', 3.14159);
        define('RADIO', 5); 
        define('ALTURA', 10);


        $area_base = PI * pow(RADIO, 2);


        $area_lateral = 2 * PI * RADIO * ALTURA;


        $area_total = 2 * $area_base + $area_lateral;


        $volumen = $area_base * ALTURA;


        echo "<h1>Resultados del Cilindro</h1>";
        echo "<p>Área de la base: " . number_format($area_base, 2) . " unidades cuadradas</p>";
        echo "<p>Área lateral: " . number_format($area_lateral, 2) . " unidades cuadradas</p>";
        echo "<p>Área total: " . number_format($area_total, 2) . " unidades cuadradas</p>";
        echo "<p>Volumen: " . number_format($volumen, 2) . " unidades cúbicas</p>";
    ?>
    
</body>
</html>