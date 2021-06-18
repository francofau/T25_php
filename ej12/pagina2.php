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
    /* Si es divisible por 2 */
    $numero = $_REQUEST['numero'];
    if ($numero%2 ==0){
        print 'Multiplo de 2';
    } else print 'No es multiplo de 2';
?>
    
</body>
</html>