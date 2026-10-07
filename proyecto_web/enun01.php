<?php
// Inicializa las variables del consumo, descuento, igv y total
$c = 0;
$m_d = 0;
$m_igv = 0;
$p = 0;

// Valida si se presionó el botón de calcular
if (isset($_POST['btnCalcular'])) {

    // Recibe y convierte a decimal el consumo por POST
    $c = $_SERVER['REQUEST_METHOD'] === 'POST' ? floatval($_POST['c']) : 0;

    // Procesa los cálculos si el consumo es mayor a cero
    if ($c > 0) {
        // Descuento del 10% si consume hasta 100, de lo contrario 20%
        if ($c <= 100) {
            $m_d = $c * 0.10; 
        } else {
            $m_d = $c * 0.20; 
        }

        // Resta el descuento al consumo base
        $subtotal = $c - $m_d;

        // Calcula el 18% de impuesto sobre el subtotal
        $m_igv = $subtotal * 0.18;

        // Suma el subtotal y el IGV para obtener el total a pagar
        $p = $subtotal + $m_igv;
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 19 - Restaurante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light p-4">
    <div class="container" style="max-width: 450px;">
        <div class="card shadow-sm">
            <div class="card-header bg-secondary text-white">
                <h5 class="mb-0">Restaurante</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="">
                    <div class="mb-3">
                        <label for="c" class="form-label">Consumo (S/)</label>
                        <input type="number" step="0.01" min="0" class="form-control" id="c" name="c"
                            value="<?= $c > 0 ? htmlspecialchars($c) : '' ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Monto descuento</label>
                        <input type="text" class="form-control" value="<?= number_format($m_d, 2) ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Impuesto IGV (18%)</label>
                        <input type="text" class="form-control" value="<?= number_format($m_igv, 2) ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Importe a pagar</label>
                        <input type="text" class="form-control" value="<?= number_format($p, 2) ?>" readonly>
                    </div>

                    <button type="submit" name="btnCalcular" class="btn btn-secondary w-100">Calcular</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>