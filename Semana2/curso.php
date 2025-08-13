<?php
//Clase base
class Curso{
    public $nombre;
    public $precio;

    public function __construct($nombre, $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function mostrarInfo() {
        echo "Curso: {$this->nombre} - Precio: <S> {$this->precio}<br>";
    }
}
?>