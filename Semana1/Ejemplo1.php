<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="UTF-8">
        <title> Taller de Programacion Web </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
        <body>
            <?php include 'cabecera.html'; ?>
        
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-6">
        
                        <?php
                        // Validar si el campo 'num' está definido y es numérico
                        if (isset($_POST['num']) && is_numeric($_POST['num'])) {
                            $n = $_POST['num'];
                            $d = $n * 2;
                            $t = $n * 3;
                        ?>
        
                            <div class="card border-success">
                                <div class="card-header bg-success text-white text-center">
                                    <h5>Resultado</h5>
                                </div>
                                <div class="card-body">
                                    <p><strong>Número ingresado:</strong> <?= $n ?></p>
                                    <p><strong>Doble:</strong> <?= $d ?></p>
                                    <p><strong>Triple:</strong> <?= $t ?></p>
                                </div>
                            </div>
        
                        <?php
                        } else {
                            ?>
                            <div class="alert alert-danger text-center" role="alert">
                                Por favor, ingrese un número válido.
                            </div>
                        <?php
                        }
                        ?>
        
                        <div class="mt-4 text-center">
                            <a href="Ejemplo1e.php" class="btn btn-primary">Volver</a>
                        </div>
        
                    </div>
                </div>
            </div>
        
            <!-- Bootstrap JS (opcional) -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        </body>
</html>