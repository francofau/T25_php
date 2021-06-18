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
    $total=0;
    echo $_REQUEST['nombre'];
    echo " practica";
    if (isset($_REQUEST['futbol'])) {
        echo " fútbol";
   }
    if (isset($_REQUEST['basket'])) {
        echo " basket";
    }
    if (isset($_REQUEST['tenis'])) {
        echo " tenis";
   }
   if (isset($_REQUEST['voley'])) {
        echo " voley";
   }
?>
    
</body>
</html>