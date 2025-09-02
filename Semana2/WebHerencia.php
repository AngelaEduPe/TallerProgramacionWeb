<?php
require_once 'Curso_Presencial.php';
require_once 'Curso_Virtual.php';

// Crear instancias de los cursos
$curso1 = new CursoPresencial("Programacion en JAVA", 350, "Av. Los Ingenieros 123 - Lima");
$curso2 = new CursoVirtual("Base de Datos SQL Server", 300, "Zoom");

// Mostrar la información de los cursos
$curso1->mostrarInfo();
$curso2->mostrarInfo();

?>