<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seguna página</title>
</head>
<body>
<?php
    echo $_REQUEST['nombre'];
    if ($_REQUEST['ingresos'] == 3) {
        echo " debe pagar impuestos.";
    } else {
        echo " no debe pagar impuestos a las ganancias.";
    }

  ?>
    
</body>
</html>