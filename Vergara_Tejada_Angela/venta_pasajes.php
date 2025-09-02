<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Venta de Pasajes</title>
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
        .btn-pink {
            background-color: #d81b60;
            border-color: #d81b60;
            color: white;
        }
        .btn-pink:hover {
            background-color: #c2185b;
            border-color: #c2185b;
            color: white;
        }
        .text-pink {
            color: #d81b60;
        }
    </style>
</head>
<body>
    <?php require_once 'cabecera.html'; ?>
    <div class="container mt-5">
        <div class="card p-4 shadow-lg mx-auto" style="max-width: 500px;">
            <h2 class="text-center mb-4 text-pink">Venta de Pasajes</h2>
            <form method="post" action="mostrar_pasajes.php">
                <div class="mb-3">
                    <label for="turno" class="form-label">Turno:</label>
                    <select name="turno" id="turno" class="form-select">
                        <option value="Mañana">Mañana</option>
                        <option value="Tarde">Tarde</option>
                        <option value="Noche">Noche</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="cantidad" class="form-label">Cantidad de pasajes:</label>
                    <input type="number" name="cantidad" id="cantidad" class="form-control" required>
                </div>
                <div class="d-grid">
                    <button type="submit" name="procesar_pasajes" class="btn btn-pink">Aceptar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>