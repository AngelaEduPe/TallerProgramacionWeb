<?php
require_once 'Curso.php';
 
class CursoPresencial extends Curso {
    public $direccion;

    public function __construct($nombre, $precio, $direccion) {
        parent::__construct($nombre, $precio); // Llama al constructor de la clase base
        $this->direccion = $direccion;
    }

    public function mostrarInfo() {
        parent::mostrarInfo();
        echo "Modalidad: Presencial - direccion: {$this->direccion}<br>";
    }
}

?>