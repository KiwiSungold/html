<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejer18</title>
</head>

<body>
    <?php
    /*
    Heu de crear un script que generi un array associatiu on guardarem tres fruites: "poma",
    "pera" i "plàtan" en aquest ordre. Els seus índexs seran les seves traduccions a l'anglès, és a
    dir, l'índex de "poma" serà "apple", el de "pera" "pear" i el "plàtan" "banana". I mostrareu el
    seu contingut mitjançant la funció print_r.
    Ara li afegireu una nova fruita després del "plàtan", en concret "pinya" amb índex
    "pineapple", i de nou mostrareu el contingut de l'array mitjançant la funció print_r.
    A continuació canviareu la "pera" per "pruna" mantenint el mateix índex, i consultareu l'array
    per mostrar per pantalla la traducció de "pear" al català. El que s'ha de mostrar per pantalla
    és "Pear : pruna", on pruna ha de ser el valor associat a l'índex "pear"
    */

    $arrayAssociatiu = array("apple" => "poma", "pear" => "pera", "banana" => "platan");

    print_r($arrayAssociatiu);
    echo "<br>";

    $arrayAssociatiu["pineapple"] = "pinya";

    print_r($arrayAssociatiu);
    echo "<br>";

    $arrayAssociatiu["pear"] = "pruna";
    print_r($arrayAssociatiu["pear"]);



    ?>
</body>

</html>