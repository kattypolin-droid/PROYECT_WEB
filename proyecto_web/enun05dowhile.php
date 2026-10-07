<?php
$ni = isset($_POST['ni']) ? (int)$_POST['ni'] : '';
$nf = isset($_POST['nf']) ? (int)$_POST['nf'] : '';
$cp = 0;
$cn = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST" && $ni !== '' && $nf !== '') {
    $i = min($ni, $nf);
    $fin = max($ni, $nf);

    if ($i <= $fin) {
        do {
            if ($i > 0) {
                $cp++;
            } elseif ($i < 0) {
                $cn++;
            }
            $i++;
        } while ($i <= $fin);
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title> Rango de Números</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
    <div class="container" style="max-width: 450px;">
        <div class="card shadow-sm">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">Rango de Números</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="">
                    <div class="mb-3">
                        <label class="form-label">Num. Inicial</label>
                        <input type="number" class="form-control" name="ni" value="<?= $ni ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Num. Final</label>
                        <input type="number" class="form-control" name="nf" value="<?= $nf ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Cant. Positivos</label>
                        <input type="text" class="form-control" value="<?= $cp ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Cant. Negativos</label>
                        <input type="text" class="form-control" value="<?= $cn ?>" readonly>
                    </div>
                    <button type="submit" class="btn btn-secondary w-100">Calcular</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>