<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructura condicional (if)</title>
</head>
<body>
<?php
$valor = rand(1, 10);
echo "El valor sorteado es $valor<br>";
if ($valor <= 5) {
    echo "Es menor o igual a 5";
} else {
    echo "Es mayor a 5";
}
?>
</body>
</html>
