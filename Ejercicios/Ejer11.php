<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejer11</title>
</head>

<body>
    <?php
    //11. Heu de crear un script que doni la volta (comenci pel final) a una cadena de caràcters.
    $cadena = ".daba le arroz a la zorra elabaD";
    $longitud = strlen($cadena);

    for ($i = $longitud; $i >= 0; $i--) {
        echo $cadena[$i];
    }


    ?>
</body>

</html>