<?php
require_once 'Curso.php';

class CursoVirtual extends Curso {
    public $plataforma;

    public function __construct($nombre, $precio, $plataforma) {
        parent::__construct($nombre, $precio); // Llama al constructor de la clase base
        $this->plataforma = $plataforma;
    }

    public function mostrarInfo() {
        parent::mostrarInfo();
        echo "Modalidad: Virtual - ]Plataforma: {$this->plataforma}<br>";
    }
}
?>