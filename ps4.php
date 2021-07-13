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
    <title>Bandit's Shop :: PlayStation® 4</title>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="icon" type="imagen/png" href="recursos/icono.png">
    <style>
        h1{
            font-family: 'Tangerine', serif;
        }
        h4{
            font-family: 'Times New Roman', Times, serif;
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
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        PlayStation y Accesorios
                    </a>
                    <div class="dropdown-menu">
                        <a href="ps5.php" class="dropdown-item">PlayStation 5</a>
                        <a href="ps4.php" class="dropdown-item active">PlayStation 4</a>
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
                <li class="nav-item">
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
        <div class="row">
            <div class="col-md-12">
                <br><br><br><br><br>
                <h1 class="text-center">PlayStation® 4</h1>
                <br>
                <h2 class="text-center" style="font-family: 'Times New Roman', Times, serif;">Controller</h2>
            </div>
            <div class="col-md-12">
                <br>
                <video src="recursos/ps4_controller.mp4" controls autoplay muted  width="1100" height="590"></video>
                <br><br>
                <h4 class="text-center"><b>"¿Quién eres para no ser grande? Tú,con la imaginación de un niño brillante y los poderes de un dios ancestral".</b></h4>
            </div>
        </div>
        <br><br><br>
        <div class="card border-success">
            <div class="card-header">
                <h2>ㅤ
                <?php
                        error_reporting(0);
                        if($_SESSION['idc']==null){
                        }else{
                        echo "<div class='alert alert-success'>
                        <strong><center>Escoge productos para tu <a href=carrito_lista.php>carrito </a> ".$_SESSION['nom']."</center></strong>
                        </div>";
                        }
                    ?>
                </h2>
            </div>
            <div class="card-body">
                <table class="table">
                    <?php

                    $sql = "select imagen,idproducto,descripcion,precio from productos where idcategoria='002' order by idproducto";

                    require_once("conexion/conexion.php");

                    $rs = mysqli_query($cn,$sql);

                    $linea = 1;
                    echo "<tr>";
                    while($fila = mysqli_fetch_row($rs)){
                        echo "<td align=center width=200><img src=".$fila[0]." width=170 height=170><br><br>".$fila[1].
                        "<br>".$fila[2]."<br>S/ ".$fila[3]."<br><br><a href=detalle_ps4.php?id=".$fila[1]."&pp=".$fila[3]." class='btn btn-success'>Ver Detalles</a></td>";
                        if($linea > 2){
                            echo "<tr>";
                            $linea = 1;
                        }else{
                            $linea++;
                        }
                    }
                    mysqli_close($cn);

                    ?>
                </table>
            </div>
        </div>
    </div>
    <br><br><br>
    <?php
        include("footer.php");
    ?>
</body>
</html>