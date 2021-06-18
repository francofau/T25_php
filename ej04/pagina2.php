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
    if ($_REQUEST['estudios']=="noEstudios") {
    echo " no tiene estudios";
   }
   else{
       if ($_REQUEST['estudios']=="estudiosPrimarios") {
           echo " tiene estudios primarios";
       }
       else{
       if ($_REQUEST['estudios']=="estudiosSecundarios") {
           echo " tiene estudios secundarios";
       }
   }
   }
?>
    
</body>
</html>