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
 $radio = $_REQUEST['radio'];
    print 'El área es '.pow($radio, 2) *pi();;
?>
    
</body>
</html>