<?php
include("../conexion/conexion.php");

$id=$_GET['id'];

$sql="DELETE FROM productos WHERE id='$id'";

$conexion->query($sql);

header("Location: ../inventario.php");

?>