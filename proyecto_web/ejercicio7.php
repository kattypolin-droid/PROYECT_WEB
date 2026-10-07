<?php
/* Ejercicio 7: Hallar el cociente y el residuo (resto) de dos números enteros.
   Expresión algorítmica: c <- n1 \ n2   (división entera)
                          r <- n1 Mod n2 */

//iniciar variables
$n1 = "";
$n2 = "";
$c = "";
$r = "";
$error = "";

if (isset($_REQUEST["btnCalcular"])) {
    //entrada
    $n1 = (int) $_REQUEST["n1"];
    $n2 = (int) $_REQUEST["n2"];
    //proceso
    if ($n2 == 0) {
        $error = "El Número 2 no puede ser cero (no se puede dividir entre 0).";
    } else {
        $c = intdiv($n1, $n2);
        $r = $n1 % $n2;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cociente y residuo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0"> Cociente y residuo</h5>
                </div>
                <div class="card-body">
                    <?php if ($error != "") { ?>
                        <div class="alert alert-danger"><?php echo $error; ?></div>
                    <?php } ?>
                    <form method="post" action="ejercicio7.php">
                        <div class="mb-3">
                            <label for="n1" class="form-label">Número 1</label>
                            <input type="number" class="form-control" id="n1" name="n1" value="<?php echo $n1; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="n2" class="form-label">Número 2</label>
                            <input type="number" class="form-control" id="n2" name="n2" value="<?php echo $n2; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="cociente" class="form-label">Cociente</label>
                            <input type="text" class="form-control bg-light" id="cociente" value="<?php echo $c; ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="residuo" class="form-label">Residuo</label>
                            <input type="text" class="form-control bg-light" id="residuo" value="<?php echo $r; ?>" readonly>
                        </div>
                        <div class="d-grid">
                            <button type="submit" name="btnCalcular" class="btn btn-success">Calcular</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
