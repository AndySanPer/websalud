<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abarrotes Salazar</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/cssencabezado.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #E991AE;">
        <div class="container-fluid">
            <a class="navbar-brand" href="inicio.php" class="imagentama">
                <img src="img/logo.png" alt="Logo" style="height: 70px; width: 70px; margin-right: 20px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Productos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="productos.php#frescos">Productos Frescos</a></li>
                            <li><a class="dropdown-item" href="productos.php#enlatados">Enlatados</a></li>
                            <li><a class="dropdown-item" href="productos.php#bebidas">Bebidas</a></li>
                            <li><a class="dropdown-item" href="productos.php#snacks">Snacks</a></li>
                            <li><a class="dropdown-item" href="productos.php#limpieza">Productos de Limpieza</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sobre_nosotros.php">Sobre nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.php">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>
