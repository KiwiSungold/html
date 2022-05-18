<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejer03</title>
</head>
<body>
    <?php
        $temporal = gettype( 'Joan' );
        echo "$temporal"; //String (4)
        $temporal = gettype( 3.14 );
        echo "<br>$temporal"; //float(3.14)
        $temporal = gettype( false );
        echo "<br>$temporal";//bool(false)
        $temporal = gettype( 3 );
        echo "<br>$temporal";//int(3)
        $temporal = gettype( null );
        echo "<br>$temporal";//NULL
    ?>
</body>
</html>