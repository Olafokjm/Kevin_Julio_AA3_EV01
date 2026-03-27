<?php
//include("verificar_sesion.php");
include("conexion/conexion.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario - Lista de productos - LPC</title>
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
                <a class="nav-link" href="dashboard.php">Dashboard</a>
                <a class="nav-link active" href="inventario.php">Inventario</a>
                <a class="nav-link" href="proveedores.php">Proveedores</a>
                <a class="nav-link" href="facturacion.php">Facturación</a>

                <hr>

                <a class="nav-link nav-config" href="#">Configuración</a>
            </nav>
        </div>

        <div class="content flex-grow-1">
            <header class="header-top mb-4 sticky-top" style="margin-left: -20px; margin-right: -20px;">
                <div></div>
                <div>John Doe ▼</div>
            </header>

            <h1 class="mb-4">Lista de productos</h1>

            <div class="d-flex justify-content-between mb-3">
                <input type="text" class="form-control form-control-dark w-25" placeholder="Search">
                <button class="btn btn-dark-custom" data-bs-toggle="modal" data-bs-target="#modalProducto">
                    Nuevo producto
                </button>
            </div>

            <div class="table-responsive">
                <table class="table table-dark">

                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>

                    <?php

                    $sql = "SELECT * FROM productos";
                    $resultado = $conexion->query($sql);

                    while ($fila = $resultado->fetch_assoc()) {

                    ?>

                        <tr>

                            <td><?php echo $fila['id']; ?></td>
                            <td><?php echo $fila['nombre']; ?></td>
                            <td><?php echo $fila['cantidad']; ?></td>
                            <td><?php echo $fila['precio']; ?></td>

                            <td>

                                <a href="inventario/eliminar_producto.php?id=<?php echo $fila['id']; ?>"
                                    class="btn btn-danger"
                                    onclick="return confirm('¿Seguro que deseas eliminar este producto?')">
                                    Eliminar
                                </a>

                            </td>

                        </tr>

                    <?php } ?>

                </table>
            </div>

            <!-- MODAL NUEVO PRODUCTO -->
            <div class="modal fade" id="modalProducto" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content bg-dark text-white">

                        <div class="modal-header">
                            <h5 class="modal-title">Nuevo Producto</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                        </div>

                        <form action="inventario/insertar_producto.php" method="POST">

                            <div class="modal-body">

                                <div class="mb-3">
                                    <label>Nombre</label>
                                    <input type="text" name="nombre" class="form-control form-control-dark" required>
                                </div>

                                <div class="mb-3">
                                    <label>Cantidad</label>
                                    <input type="number" name="cantidad" class="form-control form-control-dark" required>
                                </div>

                                <div class="mb-3">
                                    <label>Precio</label>
                                    <input type="number" name="precio" class="form-control form-control-dark" required>
                                </div>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-red">Guardar</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>