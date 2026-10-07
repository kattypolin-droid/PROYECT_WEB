<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Datos de un estudiante</title>
</head>
<body>
<?php
/* Ejercicio 3: Datos de un estudiante.
Definir variables para almacenar: edad (integer), promedio (double),
nombre completo (string) y estado de inscripción activa (boolean).
Luego imprimir cada valor, línea por línea. */
    $edad = 19;                          // integer
    $promedio = 15.75;                   // double
    $nombreCompleto = "Juan Pérez Gómez"; // string
    $inscripcionActiva = true;           // boolean

    echo "Nombre completo: " . $nombreCompleto . "<br>";
    echo "Edad: " . $edad . " años<br>";
    echo "Promedio de calificaciones: " . $promedio . "<br>";
    echo "Inscripción activa: " . $inscripcionActiva;
?>
</body>
</html>
