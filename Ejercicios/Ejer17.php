<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejer17</title>
</head>

<body>
    <?php
    /*
Heu de crear un script per a calcular la nota mitjana trimestral d'un alumne. Per calcular-la,
heu de tenir en compte que les notes del trimestre es guarden en un array numèric.
*/
    $vectorMedia = array(5, 8, 4, 9, 10, 3, 7, 6, 8, 9);
    $media;
    for ($i = 0; $i < count($vectorMedia); $i++) {
        $media += $vectorMedia[$i];
    }

    echo "La media de las notas es: " . $media / $i . "";

    ?>
</body>

</html>