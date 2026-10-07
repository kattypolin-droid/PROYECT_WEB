<?php
/* Ejercicio 8: Encontrar el área de un círculo.
   Fórmula: A = PI * r^2   con PI = 3.14159
   Expresión algorítmica: A <- 3.14159 * r ^ 2 */

//constante
define("PI", 3.14159);

//iniciar variables
$r = "";
$a = "";

if (isset($_REQUEST["btnCalcular"])) {
    //entrada
    $r = (float) $_REQUEST["radio"];
    //proceso
    $a = PI * pow($r, 2);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Área del círculo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-sm">
                <div class="card-header bg-info text-dark">
                    <h5 class="mb-0"> Área de un círculo</h5>
                </div>
                <div class="card-body">
                    <form method="post" action="ejercicio8.php">
                        <div class="mb-3">
                            <label for="radio" class="form-label">Radio</label>
                            <input type="number" step="any" min="0" class="form-control" id="radio" name="radio" value="<?php echo $r; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="area" class="form-label">Área</label>
                            <input type="text" class="form-control bg-light" id="area" value="<?php echo $a; ?>" readonly>
                        </div>
                        <div class="d-grid">
                            <button type="submit" name="btnCalcular" class="btn btn-info">Calcular</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
