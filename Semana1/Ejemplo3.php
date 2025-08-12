<?php
    // Lista de precios por producto
    $listaPrecios = [
        "laptop" => 3000,
        "mouse" => 80,
        "monitor" => 800
    ];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = trim($_POST["nombre"]);
        $producto = $_POST["producto"];
        $cantidad = intval($_POST["cantidad"]);

        // Validaciones con IF
        if ($nombre == "" || $producto == "" || $cantidad < 0) {
            echo "<p style='color:red;'>Por favor, completa todos los campos correctamente.</p>";
        } else {
            // procesar con SWITCH
            switch ($producto) {
                case "laptop":
                    $total = $listaPrecios["laptop"] * $cantidad;
                    echo "<h3><p>Cliente: <b>$nombre</b></p></h3>";
                    echo "<p>Producto: laptop</p>";
                    echo "<p>Cantidad: $cantidad</p>";
                    echo "<p>Total: S/ $total</p>";
                    echo "<p><b>Promoción:</b> Incluye maletín gratis.</p>";
                    break;
                case "mouse":
                    $total = $listaPrecios["mouse"] * $cantidad;
                    echo "<h3><p>Cliente: <b>$nombre</b></p></h3>";
                    echo "<p>Producto: Mouse</p>";
                    echo "<p>Cantidad: $cantidad</p>";
                    echo "<p>Total: S/ $total</p>";
                    echo "<p><b>Promoción:</b> Oferta 2x1.</p>";
                    break;
                case "monitor":
                    $total = $listaPrecios["monitor"] * $cantidad;
                    echo "<h3><p>Cliente: <b>$nombre</b></p></h3>";
                    echo "<p>Producto: Monitor</p>";
                    echo "<p>Cantidad: $cantidad</p>";
                    echo "<p>Total: S/ $total</p>";
                    echo "<p><b>Promoción:</b> Incluye cable HDMI.</p>";
                    break;
                default:
                    echo "<p>Producto no válido.</p>";
                    break;
            }
        }
    }
?>