<?php
require_once 'cabecera.html';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Búsqueda de Clientes</title>
</head>
<body>

<div class="container mt-5 d-flex justify-content-center">
    <div class="card p-4 shadow-lg" style="width: 500px;">
        <h2 class="text-center mb-4">Buscar Clientes por Ciudad</h2>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="ciudad" class="form-label">Ingrese ciudad:</label>
                <input type="text" name="ciudad" id="ciudad" class="form-control" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>

<?php
try {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $pdo = new PDO("mysql:host=localhost;dbname=Neptuno;charset=utf8", "root", "Root2018");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $ciudad = $_POST["ciudad"];
        $sql = "SELECT * FROM Cliente where ciudad=:p_ciudad";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':p_ciudad' => $ciudad]);

        // Mostrar resultados en tabla HTML
        echo "<div class='container mt-5'>";
        echo "   <div class='row justify-content-center'>";
        echo "      <div class='col-md-10'>";
        echo "         <div class='table-responsive'>";
        echo "            <table class='table table-bordered table-striped text-center'>";
        echo "               <thead class='table-dark'>";
        echo "                  <tr>";
        echo "                     <th>IdCliente</th>";
        echo "                     <th>NombreEmpresa</th>";
        echo "                     <th>Direccion</th>";
        echo "                     <th>Ciudad</th>";
        echo "                     <th>Pais</th>";
        echo "                  </tr>";
        echo "               </thead>";
        echo "               <tbody>";
        while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "                  <tr>";
            echo "                     <td>". $fila['IdCliente'] ."</td>";
            echo "                     <td>". $fila['NombreEmpresa'] ."</td>";
            echo "                     <td>". $fila['Direccion'] ."</td>";
            echo "                     <td>". $fila['Ciudad'] ."</td>";
            echo "                     <td>". $fila['Pais'] ."</td>";
            echo "                  </tr>";
        }
        echo "               </tbody>";
        echo "            </table>";
        echo "         </div>";
        echo "      </div>";
        echo "   </div>";
        echo "</div>";
    }
} catch (PDOException $e) {
    echo "Error: ". $e->getMessage();
}
?>