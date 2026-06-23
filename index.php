<?php
require_once "Estudiante.php";

// Crear objeto
$estudiante1 = new Estudiante("Alan", 20, [90, 80, 85]);

echo "Nombre: " . $estudiante1->nombre . "<br>";
echo "Promedio: " . $estudiante1->calcularPromedio();
?>