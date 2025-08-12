<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Taller de Programación Web</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
 
    <?php include 'cabecera.html'; ?>
 
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        <h5>Cotización</h5>
                    </div>
                    <div class="card-body">
                        <form action="Ejemplo3.php" method="post">
                            <label>Nombre del Cliente:</label><br>
                            <input type="text" name="nombre" placeholder="Ingrese su nombre"><br><br>
 
                            <label>Cantidad:</label><br>
                            <input type="number" name="cantidad" min="1" placeholder="Cantidad"><br><br>
 
                            <label>Producto:</label><br>
                            <select name="producto">
                                <option value="">-- Seleccione --</option>
                                <option value="laptop">Laptop</option>
                                <option value="mouse">Mouse</option>
                                <option value="monitor">Monitor</option>
                            </select>
                            <br><br>
 
                            <button type="submit">Cotizar</button>
                        </form>
                    </div>
                </div>
 
            </div>
        </div>
    </div>
 
    <!-- Bootstrap JS (opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
 
 