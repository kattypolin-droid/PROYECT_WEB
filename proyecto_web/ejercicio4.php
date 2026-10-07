<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Concatenación de cadenas</title>
</head>
<body>
<?php
/* Ejercicio 4: Concatenación de cadenas.
Definir tres strings, concatenarlos en una cuarta variable con el
operador punto (.) e imprimir la frase. Luego usar una variable integer
en una segunda frase con concatenación explícita. */
    $ciudad = "Lima";
    $pais = "Perú";
    $continente = "América";

    $frase = $ciudad . " " . $pais . " " . $continente . "<br>";
    echo $frase;

    $anio = 1535;   // integer
    echo $ciudad . " fue fundada en el año " . $anio . ".";
?>
</body>
</html>
