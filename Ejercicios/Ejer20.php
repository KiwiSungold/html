<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejer20</title>
</head>

<body>
    <?php
    /*
    20. Heu de crear un script on definireu un array associatiu per guardar les notes trimestrals dels
    alumnes de 1DAM. Els índexs d’aquest array seran els noms dels alumnes, i els continguts
    associats als índexs la nota trimestral de cada alumne. 
    L’script ha d’imprimir per pantalla:
    ▪ El nom de l’alumne amb millor nota i la seva nota.
    ▪ El nom de l’alumne amb pitjor nota i la seva nota.
    ▪ La mitjana de les notes dels alumnes.
    */

    $arrayNotasTrimestrales = array("Michelle" => 10, "Richard" => 8, "Aaron" => 9, "Dani" => 7);
    $mejorNota = 0;
    $peorNota = 10;
    $contador = 0;
    $media = 0;
    $nombrePeor = "";
    $nombreMejor = "";

    foreach ($arrayNotasTrimestrales as $index => $notas) {
        $contador++;
        $media += $notas;
        if ($notas > $mejorNota) {
            $mejorNota = $notas;
            $nombreMejor = $index;
        }
        if ($notas < $peorNota) {
            $peorNota = $notas;
            $nombrePeor = $index;
        }
    }

    echo "La mejor nota la tiene $nombreMejor, $mejorNota y la peor nota la tiene $nombrePeor, $peorNota, la media es de " . $media/$contador .".";

    ?>
</body>

</html>