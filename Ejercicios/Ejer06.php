<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejer06</title>
</head>
<body>
    <?php
        //6. Heu de crear un script que mostri per pantalla un missatge “Edat correcte” si el valor de la
        //variable $edat està entre els 18 i 35 anys inclosos i sinó ha de mostrar el missatge “Edat
        //incorrecte”. Heu d’utilitzar l’operador ternari.
        $edad = 18;

        $queEdadTengo = ( $edad >= 18 && $edad <= 35 ) ? "Edad correcta." : "Incorrecto.";

        echo $queEdadTengo;

    ?>
</body>
</html>