<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T25: Ejercicio 1</title>
</head>
<body>
    <?php 
        //genera un número aleatorio entre 1 y 3 inclusive
        $generarAleatorio = rand(1,3);
        //array con el nombre de los números
        $array=array("Uno","Dos","Tres");

        echo"El número generado es ";
        for($i=0;$i<3;$i++){            
            if($generarAleatorio==$i+1){//le asigna a i el valor inicial que se generó (1, 2 ó 3)
                echo "$generarAleatorio";//muestra el número
                echo " y se escribe $array[$i]";//busca como se escribe tal número en el array
            }
        }
    ?>
</body>
</html>