<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados de Sueldo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-image: url('imagenes/mi_imagen_de_fondo.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            position: relative;
        }
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            z-index: -1;
        }
        .container {
            position: relative;
            z-index: 1;
        }
        .card {
            background-color: rgba(248, 187, 208, 0.8);
            border: none;
        }
        .text-pink {
            color: #d81b60;
        }
        .text-success-custom {
            color: #d81b60;
        }
        strong {
            color: #4a148c;
        }
    </style>
</head>
<body>
    <?php require_once 'cabecera.html'; ?>
    <div class="container mt-5">
        <?php
        require_once 'Empleado.php';

        if (isset($_POST['procesar_sueldo'])) {
            $categoria = $_POST['categoria'];
            $horas = $_POST['horas'];
            $hijos = $_POST['hijos'];

            $empleado = new Empleado($categoria, $horas, $hijos);
            ?>

            <div class="card p-4 mt-4 shadow-lg mx-auto" style="max-width: 500px;">
                <h3 class="text-center mb-4 text-success-custom">Resultados</h3>
                <p><strong>Sueldo básico:</strong> S/. <?php echo number_format($empleado->getSueldoBasico(), 2); ?></p>
                <p><strong>Bonificación:</strong> S/. <?php echo number_format($empleado->getBonificacion(), 2); ?></p>
                <p><strong>Sueldo bruto:</strong> S/. <?php echo number_format($empleado->getSueldoBruto(), 2); ?></p>
                <p><strong>Descuento:</strong> S/. <?php echo number_format($empleado->getDescuento(), 2); ?></p>
                <p><strong>Sueldo neto:</strong> S/. <?php echo number_format($empleado->getSueldoNeto(), 2); ?></p>
                <a href="calculo_sueldo.php" class="btn btn-outline-primary mt-3">Volver</a>
            </div>
            
        <?php } else { ?>
            <div class="alert alert-danger text-center mx-auto" style="max-width: 500px;">
                No se han recibido datos del formulario. Por favor, <a href="calculo_sueldo.php">vuelve atrás</a> y completa el formulario.
            </div>
        <?php } ?>
    </div>
</body>
</html>