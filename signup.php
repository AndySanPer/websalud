<?php 
    include_once "encabezado.php";
    include_once "servidor.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/csssignup.css">
    
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.6.4.min.js"></script>
    <script src="js/popper.min.js"></script>
</head>
<body style="background-image: url('img/portada.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container">
        <div class="form-container">
            <div class="header">
                <img src="img/logo.png" alt="Logo" class="logo">
            </div>
            <form action="signup_process.php" method="POST" class="signup-form">
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label for="firstname">Nombre</label>
                            <input type="text" id="firstname" name="firstname" class="form-control" required>
                        </div>
                        <div class="col">
                            <label for="lastname">Apellido(s)</label>
                            <input type="text" id="lastname" name="lastname" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label for="email">Correo electrónico</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="col">
                            <label for="confirm_email">Confirmar Correo electrónico</label>
                            <input type="email" id="confirm_email" name="confirm_email" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label for="password">Contraseña</label>
                            <input type="password" id="password" name="password" class="form-control" required>
                        </div>
                        <div class="col">
                            <label for="confirm_password">Confirmar Contraseña</label>
                            <input type="password" id="confirm_password" name="confirm_password" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label for="usertype">Tipo de Usuario</label>
                            <select id="usertype" name="usertype" class="form-control" required>
                                <option value="">Seleccionar tipo de usuario</option>
                                <option value="comun">Estudiante</option>
                                <option value="admin">Administrador</option>
                                <option value="psicologo">Psicólogo</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group text-center">
                <button type="submit" class="btn btn-primary btn-signup" formaction="login.php">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
