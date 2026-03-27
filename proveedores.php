<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proveedores - LPC</title>
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
                <a class="nav-link" href="inventario.php">Inventario</a>
                <a class="nav-link active" href="proveedores.php">Proveedores</a>
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

            <h1 class="mb-4">Proveedores</h1>

            <div class="d-flex justify-content-between mb-3">
                <input type="text" class="form-control form-control-dark w-25" placeholder="Search">
                <button class="btn btn-dark-custom">Nuevo proveedor</button>
            </div>

            <div class="table-responsive">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th>ID del producto</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>1</td><td>Proveedor 1</td><td>proveedor@gm</td></tr>
                        <tr><td>2</td><td>Proveedor 2</td><td>proveedor@tco</td></tr>
                        <tr><td>3</td><td>Proveedor 3</td><td>proveedor@mc</td></tr>
                        <tr><td>4</td><td>Proveedor 4</td><td>proveedor@pet</td></tr>
                        <tr><td>5</td><td>Proveedor 5</td><td>proveedor@brp</td></tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
