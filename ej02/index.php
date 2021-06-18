<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T25: Ejercicio 2</title>
</head>
<body>
    <?php
        /* Hasta 500 */
        echo "FOR", "<br>";
        for ($i = 2; $i <= 500; $i = $i + 2) {
            echo $i;
            echo " - ";
        }
        echo "<br>", "<br>";
        
        echo "WHILE";
        echo "<br>";
        $w = 2;
        while ($w <= 500) {
            echo $w;
            echo " - ";
            $w = $w + 2;
        }
        echo "<br>", "<br>";
        
        echo "DO WHILE";
        echo "<br>";
        $i = 2;
        do {
            echo $i;
            echo " - ";
            $i = $i + 2;
        } while ($i <= 500);

  ?>
</body>
</html>