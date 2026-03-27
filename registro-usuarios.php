<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios - LPC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body class="auth-page">

    <div class="register-container">
        <h1 class="text-center">Registro de usuarios</h1>

        <form action="crear_usuario.php" method="POST">
            <input type="text" class="form-control form-control-dark" placeholder="Usuario" name="usuario" required>
            <input type="password" class="form-control form-control-dark" placeholder="Contraseña" name="password" required>

            <label for="rol-select" class="rol-label">Rol</label>

            <select class="form-select form-select-dark" id="rol-select" name="rol" required>
                <option value="Administrador">Administrador</option>
                <option value="Contador" selected>Contador</option>
                <option value="Trabajador" selected>Trabajador</option>
            </select>

            <button type="submit" class="btn btn-dark-register">Registrar</button>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>