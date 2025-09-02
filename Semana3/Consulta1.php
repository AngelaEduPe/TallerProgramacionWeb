<?php
require_once 'cabecera.html';
// Conexion con PDO
try {
    $pdo = new PDO("mysql:host=localhost;dbname=neptuno;charset=utf8", "root", "123456");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta preparada
    $sql = "SELECT * FROM Cliente";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // Mostrar resultados en tabla HTML
    echo "<div class='container mt-5'>";
    echo "   <div class='row justify-content-center'>";
    echo "      <div class='col-md-10'>";
    echo "         <h2 class='text-center mb-4'>Lista de Clientes</h2>";
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
} catch (PDOException $e) {
    echo "Error: ". $e->getMessage();
}
?>