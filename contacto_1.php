<?php
    session_start();
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bandit's Shop :: Contacto</title>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="icon" type="imagen/png" href="recursos/icono.png">
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            background-image: url(recursos/logo_contactenos.png);
            background-size: cover;
            background-attachment: fixed;
        }
        .contenedor{
            width: 100%;
            padding: 15px;
        }
        .formulario{
            background-color: rgb(255, 255, 255);
            margin-top: 150px;
            padding: 3px;
        }
        .input-contenedor{
            margin-bottom: 10px;
            border: 1px solid #aaa;
        }
        .button{
            border: none;
            width: 100%;
            color: white;
            font-size: 20px;
            background: gray;
            padding: 15px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .button:hover{
            background: cadetblue;
        }
        *{
            box-sizing: border-box;
        }
        @media(min-width:768px){
            .formulario{
                margin: auto;
                width: 350px;
                margin-top: 150px;
                border-radius: 2%;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark fixed-top" style="background-color: #000000;">
            <!-- Brand/logo -->
            <a href="home.php" class="navbar-brand">
            <img src="recursos/logo.png" width="143" height="30"></a>
            
            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="empresa.php" class="nav-link">¿Quiénes somos?</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        PlayStation y Accesorios
                    </a>
                    <div class="dropdown-menu">
                        <a href="ps5.php" class="dropdown-item">PlayStation 5</a>
                        <a href="ps4.php" class="dropdown-item">PlayStation 4</a>
                        <a href="accesorios.php" class="dropdown-item">Accesorios</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Videojuegos
                    </a>
                    <div class="dropdown-menu">
                        <a href="videojuegos_ps5.php" class="dropdown-item">Videojuegos de PS5</a>
                        <a href="videojuegos_ps4.php" class="dropdown-item">Videojuegos de PS4</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a href='contacto_1.php' class="nav-link">Contáctenos</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <?php
                    if($_SESSION['idc']==null){
                        echo "<li class='nav-item'>
                        <a class='nav-link' href='registrarse.html'>Registrarse</a>
                        </li>
                        <li class='nav-item'>
                        <a class='nav-link' href='login.html'>Iniciar Sesión</a>
                        </li>";
                    }else{
                        echo "<li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle' href=# id='navbardrop' data-toggle='dropdown'>
                        <i class='fa fa-user' aria-hidden='true'></i>
                        </a>
                        <div class='dropdown-menu'>
                            <a href='carrito_lista.php' class='dropdown-item'>Carrito</a>
                            <a href='pedidos.php' class='dropdown-item'>Mis Pedidos</a>
                            <a href='cliente.php' class='dropdown-item'>Mi Cuenta</a>
                        </div>
                        </li>";
                        echo "<li class='nav-item'>";
                        echo "<a class='nav-link' href='cerrar_sesion.php'>Cerrar Sesión</a>
                        </li>";
                    }
                ?>
            </ul>
        </nav>
    </header>
    <div class="container">
        <form class="formulario" action="contacto_2.php" method="POST">
            <div class="contenedor">
                <br><br>
                <div class="input-contenedor">
                    <label for="text">Nombres : </label>
                    <input type="text" id="txtNombres" name="txtNombres">
                </div>
            </div>
            <div class="contenedor">
                <div class="input-contenedor">
                    <label for="number">Número : </label>
                    <input type="number" name="txtTelefono" id="txtTelefono">
                </div>
            </div>
            <div class="contenedor">
                <div class="input-contenedor">
                    <label for="email">Email : </label>
                    <input type="text" name="txtEmail" id="txtEmail">
                </div>
            </div>
            <div class="contenedor">
                <div class="input-contenedor">
                    <label for="text">Ingrese su comentario : </label>
                    <textarea name="txtComentario" id="txtComentario" cols="36" rows="10"></textarea>
                </div>
            </div>
            <input type="submit" value="Enviar Comentario" class="button">
        </form>
    </div>
    <br><br><br>
    <?php
        include("footer.php");
    ?>
</body>
</html>