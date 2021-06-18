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
    if ($_REQUEST['edad'] > 17) {
        echo " es mayor de edad";
    } else {
        echo " no es mayor de edad";
    }
?>
    
</body>
</html>