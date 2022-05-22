<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejer13</title>
</head>

<body>
    <?php

    /*
    Heu de crear un script que indiqui si dues paraules rimen o no. Si coincideixen les tres últimes
    lletres, s'ha de mostrar un missatge que digui que rimen molt, si només coincideixen les dues
    últimes lletres, s'ha de mostrar un missatge que digui que rimen un poc i si no s'ha de mostrar
    un missatge que no rimen.
    */

    $palabra1 = "Michelle ama a Richard eso es así";
    $palabra2 = "Mafi ama a Richard también es así";

    if (substr($palabra1, -3) == substr($palabra2, -3)) {

        echo "Las palabras riman mucho.";

    } else if (substr($palabra1, -2) == substr($palabra2, -2)) {

        echo "Las palabras riman poco.";

    } else {

        echo "Las palabras no riman.";

    }

    ?>
</body>

</html>