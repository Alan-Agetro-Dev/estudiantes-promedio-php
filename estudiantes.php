<?php
// Clase estudiante
class Estudiante {

// Atributos
    public $nombre;
    public $edad;
    public $calificaciones;
    
// Constructor de la clase
    public function __construct($nombre, $edad, $calificaciones) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->calificaciones = $calificaciones;
    }
// Metodo para calcular el promedio
    public function calcularPromedio() {
        return array_sum($this->calificaciones) / count($this->calificaciones);
    }

    // Metodo para mostrar informacion
    public function mostrarInfo() {
        echo "<h3>Estudiante</h3>";
        echo "Nombre: $this->nombre <br>";
        echo "Edad: $this->edad <br>";
        echo "Promedio: " . $this->calcularPromedio() . "<br><br>";
    }
}
?>
