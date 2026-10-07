<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ficha de producto</title>
</head>
<body>
<?php
/* Ejercicio 1: Ficha de producto.
Definir una variable de cada tipo: integer, double, string y boolean,
y luego imprimirlas en la página, una por línea. */
    $codigo = 1001;          // integer
    $precio = 2599.90;       // double
    $nombre = "Laptop";      // string
    $disponible = true;      // boolean

    echo "Código del producto (integer): ";
    echo $codigo;
    echo "<br>";
    echo "Precio (double): S/ ";
    echo $precio;
    echo "<br>";
    echo "Nombre del producto (string): ";
    echo $nombre;
    echo "<br>";
    echo "Disponible en stock (boolean): ";
    echo $disponible;
?>
</body>
</html>
