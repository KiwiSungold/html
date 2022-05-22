<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejer09</title>
</head>

<body>
    <?php
    //9. Heu de crear un script que donats dos nombres: a de tipus real i b de tipus enter, calculi a
    $a = 10;
    $b = 3;
    $r = $a;
    $contador = 0;

    while ($contador < $b) {
        $r = $r * $a;
        $contador++;
    }
    echo $r;
    ?>
</body>

</html>