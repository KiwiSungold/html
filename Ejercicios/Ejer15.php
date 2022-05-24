<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejer15</title>
</head>

<body>
    <?php
    /*
    Heu de crear un script que donada una frase comprovi si aquesta és un palíndrom o no.
    Recordeu que els palíndroms són aquelles frases que si es llegeixen de dreta a esquerra,
    diuen el mateix que d’esquerra a dreta. Exemple de palíndrom: “A cavar a Caravaca”.
    */

    $frase = "a cavar a caravaca";
    $frase1 = "";
   // $cadenaLimpia = trim($frase);
    $cadenaLimpia = str_replace(' ', '', $frase);
    echo $cadenaLimpia;
    $longitud = strlen($cadenaLimpia);

    $escrito = false;

    /*for ($i = 0; $i < $longitud; $i++) {
        $escrito = false;
        for ($j = $longitud; $j >= 0 && $escrito == false; $j--) {
            $frase1[$j] = $cadenaLimpia[$i];
            $escrito = true;
        }
    }*/

    for ($i = $longitud - 1 ; $i >= 0 ; $i-- ) {
        $frase1[$longitud - 1 - $i] = $cadenaLimpia[$i];
    }

    if ($cadenaLimpia == $frase1) {
        echo "La frase \"$cadenaLimpia\" es palíndromo.";
    } else {
        echo "No es palíndromo.";
    }

    ?>
</body>

</html>