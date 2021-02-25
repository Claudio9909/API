<?php
require_once "clases/conexion/conexion.php";

$conexion = new conexion;

$query = "Select * from pagos";
print_r($conexion->obtenerDatos($query));
?>