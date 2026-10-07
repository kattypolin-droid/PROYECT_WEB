<?php
/* Ejercicio 6: Dado dos números enteros, hallar la suma.
   Expresión algorítmica: s <- n1 + n2 */

//iniciar variables
$n1 = "";
$n2 = "";
$s = "";

if (isset($_REQUEST["btnCalcular"])) {
    //entrada
    $n1 = (int) $_REQUEST["n1"];
    $n2 = (int) $_REQUEST["n2"];
    //proceso
    $s = $n1 + $n2;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Suma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0"> Suma de dos números</h5>
                </div>
                <div class="card-body">
                    <form method="post" action="ejercicio6.php">
                        <div class="mb-3">
                            <label for="n1" class="form-label">Número 1</label>
                            <input type="number" class="form-control" id="n1" name="n1" value="<?php echo $n1; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="n2" class="form-label">Número 2</label>
                            <input type="number" class="form-control" id="n2" name="n2" value="<?php echo $n2; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="suma" class="form-label">Suma</label>
                            <input type="text" class="form-control bg-light" id="suma" value="<?php echo $s; ?>" readonly>
                        </div>
                        <div class="d-grid">
                            <button type="submit" name="btnCalcular" class="btn btn-primary">Calcular</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
