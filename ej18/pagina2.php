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
    $dia = $_REQUEST['dia'];
    switch ($dia) {
        case 'Lunes':
        case 'Martes':
        case 'Miércoles':
        case 'Jueves':
        case 'Viernes':
        print "El día $dia es laboral";    
    break;
        case 'Sábado':
        case 'Domingo':
        print "El día $dia no es laboral";
    break;
}
?>
    
</body>
</html>