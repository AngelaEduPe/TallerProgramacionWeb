<?php

class Pasajes {
    public $turno;
    public $cantidad;

    public function __construct($turno, $cantidad) {
        $this->turno = $turno;
        $this->cantidad = $cantidad;
    }

    public function getPrecioPasaje() {
        if ($this->turno == "Mañana") {
            return 50.0;
        } elseif ($this->turno == "Tarde") {
            return 65.0;
        } else { 
            return 70.0;
        }
    }

    public function getImporteCompra() {
        return $this->cantidad * $this->getPrecioPasaje();
    }

    public function getPorcentajeDescuento() {
        if ($this->cantidad >= 1 && $this->cantidad <= 3) {
            return 0.05;
        } elseif ($this->cantidad >= 4 && $this->cantidad <= 8) {
            return 0.10;
        } elseif ($this->cantidad >= 9 && $this->cantidad <= 12) {
            return 0.15;
        } else {
            return 0.20;
        }
    }

    public function getImporteDescuento() {
        return $this->getImporteCompra() * $this->getPorcentajeDescuento();
    }

    public function getImportePagar() {
        return $this->getImporteCompra() - $this->getImporteDescuento();
    }
}
?>