<?php
include("../conexion/conexion.php");

$sql="SELECT * FROM productos";
$resultado=$conexion->query($sql);

while($fila=$resultado->fetch_assoc()){
echo $fila['nombre']." - ".$fila['cantidad']."<br>";
}
?>