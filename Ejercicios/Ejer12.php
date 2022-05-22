<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejer12</title>
</head>

<body>
    <?php
    //12. Heu de crear un script que substitueixi les vocals d’una cadena de caràcters per “X”.
    $cadena = "Dabale arroz a la zorra el abad";
    $longitud = strlen($cadena);
    $posicion = true;

    for ($i = 0; $i <= $longitud && $posicion; $i++) {
        $posicion = strpos($cadena, "a");

        if ($posicion) {
            $cadena[$posicion] = "x";
        }
    }
    echo $cadena;

    ?>
</body>

</html>