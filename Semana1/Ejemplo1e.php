<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title> Taller de PRogramacion Web </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <?php include 'cabecera.html'; ?>

    <div class="container mt-5">
        <div class="row justify-content-center ">
            <div class="col-md-6">
                <div class="card">
                <div class="card-header bg-primary text-white text-center">
                <h5> Ingrese un número </h5>
                </div>
                <div class="card-body">
                    <form action="Ejemplo1.php" method="post">
                        <div class="mb-3">
                            <label for="num" class="form-label"> Número</label>
                            <input type="text" name="num" id="num" class="form-control" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">Aceptar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</body>



</html>