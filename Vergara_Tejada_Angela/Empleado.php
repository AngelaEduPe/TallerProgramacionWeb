<?php

class Empleado {
    public $categoria;
    public $horas_trabajadas;
    public $hijos;

    public function __construct($categoria, $horas_trabajadas, $hijos) {
        $this->categoria = $categoria;
        $this->horas_trabajadas = $horas_trabajadas;
        $this->hijos = $hijos;
    }

    public function getTarifaHoraria() {
        if ($this->categoria == "A") {
            return 45.0; 
        } else { 
            return 37.5; 
        }
    }

    public function getSueldoBasico() {
        return $this->horas_trabajadas * $this->getTarifaHoraria();
    }

    public function getBonificacion() {
        if ($this->hijos <= 3) {
            return $this->hijos * 40.5; 
        } else {
            return $this->hijos * 35.0;
        }
    }

    public function getSueldoBruto() {
        return $this->getSueldoBasico() + $this->getBonificacion();
    }

    public function getDescuento() {
        $sueldo_bruto = $this->getSueldoBruto();
        if ($sueldo_bruto >= 3500) {
            return $sueldo_bruto * 0.135;
        } else {
            return $sueldo_bruto * 0.10;
        }
    }

    public function getSueldoNeto() {
        return $this->getSueldoBruto() - $this->getDescuento();
    }
}
?>