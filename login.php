<?php 
    include_once "encabezado.php";
    include_once "servidor.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="css/csslogin.css">
</head>
<body style="background-image: url('img/portada.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container">
        <div class="form-container">
            <div class="header">
                <img src="img/login.jpg" alt="Logo" class="logo">
            </div>
            <form action="index.php" method="POST" class="login-form">
    <div class="form-group">
        <label for="username">Correo</label>
        <input type="email" id="useremail" name="useremail" required>
    </div>
    <div class="form-group">
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn-login">Entrar</button>
    </div>
</form>
            <div class="create-account">
                <p>¿No tienes cuenta?</p>
                <a href="signup.php">Crear cuenta nueva</a>
            </div>
        </div>
    </div>
</body>
</html>
