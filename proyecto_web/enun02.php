<?php 
// Recibe y convierte a decimal la temperatura por POST
$t = isset($_POST['t']) ? (float) $_POST['t'] : ''; 

// Inicializa la variable del clima
$clima = ''; 

// Valida que el formulario se haya enviado y el campo no esté vacío
if ($_SERVER["REQUEST_METHOD"] == "POST" && $t !== '') { 
    
    // Menor a 10 grados: Frío
    if ($t < 10) { 
        $clima = 'FRÍO'; 
    } 
    // Entre 10 y 20 grados: Nublado
    elseif ($t >= 10 && $t <= 20) { 
        $clima = 'NUBLADO'; 
    } 
    // Entre 21 y 30 grados: Calor
    elseif ($t >= 21 && $t <= 30) { 
        $clima = 'CALOR'; 
    } 
    // Mayor a 30 grados: Tropical
    else { 
        $clima = 'TROPICAL'; 
    } 
} 
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title> Clima</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light p-4">
    <div class="container" style="max-width: 450px;">
        <div class="card shadow-sm">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">Clima</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="">
                    <div class="mb-3">
                        <label class="form-label">Temperatura</label>
                        <input type="number" step="0.1" class="form-control" name="t" value="<?= $t ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Clima</label>
                        <input type="text" class="form-control fw-bold" value="<?= $clima ?>" readonly>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Calcular</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>