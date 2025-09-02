<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calcular Sueldo</title>
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
            <h2 class="text-center mb-4 text-pink">Calcular Sueldo</h2>
            <form method="post" action="mostrar_sueldo.php">
                <div class="mb-3">
                    <label for="categoria" class="form-label">Categoría:</label>
                    <select name="categoria" id="categoria" class="form-select">
                        <option value="A">A</option>
                        <option value="B">B</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="horas" class="form-label">Horas:</label>
                    <input type="number" name="horas" id="horas" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="hijos" class="form-label">Hijos:</label>
                    <input type="number" name="hijos" id="hijos" class="form-control" required>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" name="procesar_sueldo" class="btn btn-pink">Procesar</button>
                    <button type="reset" class="btn btn-outline-secondary">Borrar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>