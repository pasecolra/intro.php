<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Intruccion de decision switch en php</h1>
    <?php
        $color="negro";
        switch($color)
        {
            case "blanco":
                $sector = "claro";
                break;
            case "naranja":
                $sector = "normal";
                break;
            case "negro":
                $sector = "oscuro";
                break;
        }
        print($sector)
    ?>
    
</body>
</html>