<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejer05</title>
</head>
<body>
    <?php
        //Fes un script que declari tres variables de tipus enter i desprès faci diferents càlculs aritmètics
        //entre elles (suma, resta, divisió, mòdul, multiplicació) utilitzant els diferents operadors
        //d'assignació.

        $entero1 = 15;
        $entero2 = 20;
        $entero3 = 25;

        echo "Multiplicacion de $entero1 y $entero2 da como resultado el valor " . ($entero1*$entero2) . ".";
        echo "<br>Suma de $entero3 y $entero2 da como resultado el valor " . ($entero3+$entero2) .".";
        echo "<br>Resta de $entero2 y $entero1 da como resultado el valor " . ($entero2-$entero1) .".";
        echo "<br>División de $entero3 y $entero1 da como resultado el valor " . ($entero3/$entero1) .".";
        echo "<br>El modulo de $entero2 y $entero3 da como resultado el valor " . ($entero2%$entero3) .".";

    ?>
</body>
</html>