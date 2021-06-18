<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T25: Ejercicio 4</title>
</head>
<body>
    <form method="post" action="pagina2.php">
            
        <input type="text" name="nombre" placeholder="Ingrese su nombre"><br><br>
        

        Estudios:<br>

        <input type="radio" name="estudios" value="noEstudios"> No tiene estudios<br>

        <input type="radio" name="estudios" value="estudiosPrimarios"> Tiene estudios primarios<br>

        <input type="radio" name="estudios" value="estudiosSecundarios"> Tiene estudios secundarios
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>