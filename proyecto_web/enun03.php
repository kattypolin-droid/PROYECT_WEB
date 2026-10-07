<?php
// Recibe y convierte a entero el día y el mes por POST
$d = isset($_POST['d']) ? (int)$_POST['d'] : '';
$m = isset($_POST['m']) ? (int)$_POST['m'] : '';

// Inicializa la variable de la estación
$estacion = '';

// Valida que el formulario se haya enviado y los campos no estén vacíos
if ($_SERVER["REQUEST_METHOD"] == "POST" && $d !== '' && $m !== '') {
    
    // Convierte la fecha a un formato numérico continuo (mes * 100 + día)
    $fecha = ($m * 100) + $d;

    // Rango del 21 de diciembre al 20 de marzo: Verano
    if (($fecha >= 1221 && $fecha <= 1231) || ($fecha >= 101 && $fecha <= 320)) {
        $estacion = 'VERANO';
    } 
    // Rango del 21 de marzo al 21 de junio: Otoño
    elseif ($fecha >= 321 && $fecha <= 621) {
        $estacion = 'OTOÑO';
    } 
    // Rango del 22 de junio al 22 de septiembre: Invierno
    elseif ($fecha >= 622 && $fecha <= 922) {
        $estacion = 'INVIERNO';
    } 
    // Rango del 23 de septiembre al 20 de diciembre: Primavera
    elseif ($fecha >= 923 && $fecha <= 1220) {
        $estacion = 'PRIMAVERA';
    } 
    // Si la fecha no coincide con ningún rango válido
    else {
        $estacion = 'FECHA INVÁLIDA';
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title> Estaciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
    <div class="container" style="max-width: 450px;">
        <div class="card shadow-sm">
            <div class="card-header bg-danger text-white">
                <h5 class="mb-0">Estaciones</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="">
                    <div class="mb-3">
                        <label class="form-label">Día</label>
                        <input type="number" min="1" max="31" class="form-control" name="d" value="<?= $d ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mes</label>
                        <input type="number" min="1" max="12" class="form-control" name="m" value="<?= $m ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Estación</label>
                        <input type="text" class="form-control fw-bold" value="<?= $estacion ?>" readonly>
                    </div>
                    <button type="submit" class="btn btn-danger w-100">Calcular</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>