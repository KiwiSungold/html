<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejer19</title>
</head>

<body>
    <?php
    /*
    Heu de crear un script on definireu un array associatiu on els seus índexs seran els set dies de
    la setmana ordenats de dilluns a diumenge, i el valor associat a aquests índexs, el valor
    numèric que els representa dins de la setmana, és a dir, si l'índex és "dilluns", el seu valor
    associat serà 1, sí és "dimarts" el seu valor serà 2, i així successivament fins arribar al
    "diumenge" que el seu valor serà 7. 
    L’script ha d’imprimir per pantalla:
    ▪ El valor numèric donat un dia de la setmana. Feu servir una variable per guardar el dia
    de la setmana. 
    ▪ El dia de la setmana donat un valor numèric de l’1 al 7. Feu servir una variable per
    guardar el valor numèric
    */

    $arrayAssociatiu = array("Lunes" => 1, "Martes" => 2, "Miercoles" => 3, "Jueves" => 4, "Viernes" => 5, "Sábado" => 6, "Domingo" => 7);
    $valorNumerico = 1;
    $diaSemana = "Lunes";

    foreach ($arrayAssociatiu as $index => $contingut) {
        if ($index == $diaSemana) {
            echo " $index <br/>";
        }
        if ($valorNumerico == $contingut)
            echo " $contingut<br/>";
    }

    ?>
</body>

</html>