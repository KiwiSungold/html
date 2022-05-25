<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejer16</title>
</head>

<body>
    <?php

    /*
    Heu de crear un script en el qual definireu un array que contingui els números de l'1 al 10 i un
    altre array amb els números de l'11 al 20. Aquest script ha de generar un tercer array amb la
    suma dels dos primers arrays. 
    La suma serà el resultat de sumar els continguts de les mateixes posicions dels dos primers
    arrays i el resultat l’haureu d’afegir a la mateixa posició però del tercer array. Per exemple el
    contingut de la posició 0 del primer array serà 1 i del segon array serà 11, per tant la seva
    suma serà 1 + 11 = 12, i aquest resultat (12), s’ha de guardar en la posició 0 del tercer array.
    */
    for ($i = 0; $i < 10; $i++) {
        $vector1[$i] = $i + 1;
        $vector2[$i] = $i + 11;
        $vector3[$i] = $vector1[$i] + $vector2[$i];
    }

    print_r($vector1);
    echo "<br/>";
    print_r($vector2);
    echo "<br/>";
    print_r($vector3);



    ?>
</body>

</html>