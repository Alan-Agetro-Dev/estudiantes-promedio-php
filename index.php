<?php
require_once "estudiantes.php";

$estudiante1 = new Estudiante("Alan", 20, [90, 80, 85]);
$estudiante2 = new Estudiante("Maria", 22, [95, 88, 92]);
$estudiante3 = new Estudiante("Luis", 19, [70, 75, 80]);

$estudiante1->mostrarInfo();
$estudiante2->mostrarInfo();
$estudiante3->mostrarInfo();
?>