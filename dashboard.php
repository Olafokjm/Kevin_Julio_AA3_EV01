<?php
include("auth/verificar_sesion.php");
include("conexion/conexion.php");
?>

<?php

$sqlProductos = "SELECT COUNT(*) AS total FROM productos";
$resultadoProductos = $conexion->query($sqlProductos);
$filaProductos = $resultadoProductos->fetch_assoc();

$totalProductos = $filaProductos['total'];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - LPC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>


    <div class="d-flex">

        <div class="sidebar">
            <div class="p-3 text-center">
                <div class="logo-img-container mb-2">
                    <img src="img/logo-fenix.png" alt="Logo LPC">
                </div>
                <div class="logo">LPC</div>
            </div>
            <nav class="nav flex-column">
                <a class="nav-link active" href="dashboard.php">Dashboard</a>
                <a class="nav-link" href="inventario.php">Inventario</a>
                <a class="nav-link" href="proveedores.php">Proveedores</a>
                <a class="nav-link" href="facturacion.php">Facturación</a>
                <a class="nav-link" href="logout.php">Cerrar Sesión</a>
                <hr> 
                
                <a class="nav-link nav-config" href="#">Configuración</a>
            </nav>
        </div>

        <div class="content flex-grow-1">
            <header class="header-top mb-4 sticky-top" style="margin-left: -20px; margin-right: -20px;">
                <div></div> 
                <div>John Doe ▼</div>
            </header>

            <h1 class="mb-4">Dashboard</h1>

            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <h2><?php echo $totalProductos; ?></h2>
                        <p>Productos</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <h2>8</h2>
                        <p>Proveedores</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <h2>$5,820</h2>
                        <p>Ventas</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <h2>24</h2>
                        <p>Facturas</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
