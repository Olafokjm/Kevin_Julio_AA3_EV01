<?php
include("../conexion/conexion.php");

$nombre=$_POST['nombre'];
$cantidad=$_POST['cantidad'];
$precio=$_POST['precio'];

$sql="INSERT INTO productos(nombre,cantidad,precio)
VALUES('$nombre','$cantidad','$precio')";

$conexion->query($sql);

header("Location: ../inventario.php");

?>