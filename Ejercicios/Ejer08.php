<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejer08</title>
</head>

<body>
    <?php
    //Heu d'escriure un script que donat un mes en número (1 per gener, 2 per febrer,...) i un any,
    //indiqui el nombre de dies d'aquest mes. Recordeu que un any és de traspas si es divisible per
    //4, excepte quan és divisible per 100, a no ser que sigui divisible per 400. Així, 1900 no va ser
    //un any de traspas, però l'any 2000 si ho va ser

    $mes = 2;
    $y = 2000;
    switch ($mes) {
        case 1:
            echo "Enero tiene 31 días.";
            break;
        case 2:
            if (($y % 4 == 0 and $y % 100 == 0) or $y % 400 == 0) echo 'Febrero tiene 29 días';
            else echo "Febrero tiene 28 días.";
            break;
        case 3:
            echo "Marzo tiene 31 días.";
            break;
        case 4:
            echo "Abril tiene 30 días.";
            break;
        case 5:
            echo "Mayo tiene 31 días.";
            break;
        case 6:
            echo "Junio tiene 30 días.";
            break;
        case 7:
            echo "Julio tiene 31 días.";
            break;
        case 8:
            echo "Agosto tiene 31 días.";
            break;
        case 9:
            echo "Septiembre tiene 30 días.";
            break;
        case 10:
            echo "Octubre tiene 31 días.";
            break;
        case 11:
            echo "Noviembre tiene 30 días.";
            break;
        case 12:
            echo "Diciembre tiene 31 días.";
            break;
    }

    ?>
</body>

</html>