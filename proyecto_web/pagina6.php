<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio Resuelto 1 - IGV</title>
</head>
<body>
<h1>Definir una constante en PHP</h1>
<?php
/* Definición de constante */
define("IGV", 0.18);

/* Variables de cálculo */
$subtotal = 150.00;
$montoIgv = $subtotal * IGV;
$total = $subtotal + $montoIgv;

/* Impresión de resultados */
echo "Subtotal: S/ " . $subtotal . "<br>";
echo "Monto de IGV (18%): S/ " . $montoIgv . "<br>";
echo "Total a pagar: S/ " . $total;
?>
</body>
</html>