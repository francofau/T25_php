<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T25: Ejercicio 20</title>
</head>
 <body>
 <!-- Los signos aritméticos disponibles son:
+: suma los dos operandos.
-: resta los operandos.
*: multiplica los operandos.
/: divide los operandos, este debe dar un resultado con decimales (double)
^: 1º operando como base y 2º como exponente.
%: módulo, resto de la división entre operando1 y operando2. -->
    <form method="post" action="pagina2.php">
        <p>Número 1: </p>
        <input type="text" name="numero1" />
        <p>Número 2: </p>
        <input type="text" name="numero2" />
        <p>Ingrese el operador: </p>
        <input type="text" name="operador" />
        <input type="submit" value="Calcular"/>
    </form>
  </body>
 </html>  