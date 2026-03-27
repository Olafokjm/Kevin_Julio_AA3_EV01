<?php
session_start();
include("conexion/conexion.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Inicio de Sesión - LPC</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body class="auth-page">

    <div class="login-container">

        <img src="img/logo-fenix.png" class="logo-display">

        <div class="logo">LPC</div>

        <form action="auth/login.php" method="POST">

            <input type="text" name="usuario" class="form-control form-control-dark" placeholder="Usuario" required>

            <input type="password" name="password" class="form-control form-control-dark" placeholder="Contraseña" required>

            <button type="submit" class="btn btn-red w-100">Ingresar</button>

            <a href="#" class="forgot-password">¿Olvidó su contraseña?</a>
            <a href="registro-usuarios.php" class="forgot-password">¿No tienes una cuenta? Regístrate</a>

        </form>

    </div>

</body>

</html>