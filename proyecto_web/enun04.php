<?php
// Recibe y convierte a entero la calidad y el producto por POST
$c = isset($_POST['c']) ? (int)$_POST['c'] : '';
$p = isset($_POST['p']) ? (int)$_POST['p'] : '';

// Inicializa el precio del producto
$precio = 0;

// Matriz bidimensional de precios [Producto][Calidad]
$tablaPrecios = [
    1 => [1 => 5000, 2 => 4500, 3 => 4000], 
    2 => [1 => 4500, 2 => 4000, 3 => 3500],
    3 => [1 => 4000, 2 => 3500, 3 => 3000],
];

// Valida envío por POST y que exista la combinación de producto y calidad
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($tablaPrecios[$p][$c])) {
    // Obtiene el precio correspondiente de la matriz
    $precio = $tablaPrecios[$p][$c];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Precios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
    <div class="container" style="max-width: 450px;">
        <div class="card shadow-sm">
            <div class="card-header bg-warning text-white">
                <h5 class="mb-0">Precios</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="">
                    <div class="mb-3">
                        <label class="form-label">Calidad (1, 2 o 3)</label>
                        <input type="number" min="1" max="3" class="form-control" name="c" value="<?= $c ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Producto (1, 2 o 3)</label>
                        <input type="number" min="1" max="3" class="form-control" name="p" value="<?= $p ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Precio</label>
                        <input type="text" class="form-control fw-bold" value="<?= $precio > 0 ? $precio : '' ?>" readonly>
                    </div>
                    <button type="submit" class="btn btn-warning w-100">Calcular</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>