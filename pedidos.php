<?php
    session_start();
    error_reporting(0);
    if($_SESSION['idc']==null){
        header("Location: login.html");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bandit's Shop :: <?php echo " ".$_SESSION['nom'].""; ?></title>
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
                    echo "<li class='nav-item dropdown active'>
                    <a class='nav-link dropdown-toggle' href=# id='navbardrop' data-toggle='dropdown'>
                    <i class='fa fa-user' aria-hidden='true'></i>
                    </a>
                    <div class='dropdown-menu'>
                        <a href='carrito_lista.php' class='dropdown-item'>Carrito</a>
                        <a href='pedidos.php' class='dropdown-item active'>Mis Pedidos</a>
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
        <br><br><br>
        <div class="card border-success">
            <div class="card-header">
                <h2>ㅤ
                <?php
                        echo "<div class='alert alert-warning'>
                        <strong><center>Pedidos de ".$_SESSION['nom'].". <br> En unos instantes le enviaremos su/s pedido/s</center></strong>
                        </div>";

                    ?>
                </h2>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr class="text-center text-secondary">
                        <td>IdPedido</td>
                        <td>Fecha del Pedido</td>
                    </tr>
                    <?php
                    $sql = "select idpedido,fechaped from pedidos where idcliente='".$_SESSION['idc']."'";

                    require_once("conexion/conexion.php");

                    $rs = mysqli_query($cn,$sql);

                    while($fila = mysqli_fetch_row($rs)){
                        echo "<tr align=center>";
                        echo "<td>".$fila[0]."</td>";
                        echo "<td>".$fila[1]."</td>";
                        echo "</tr>";
                    }

                    ?>
                </table>
                <br><br><br>
                <table class="table">
                    <div class="table-header">
                        <p class="text-center" style="font-family: monospace;">Detalles del pedido</p>
                    </div>
                    <div class="table-body">
                        <tr class="text-center text-secondary">
                            <td>IdProducto</td>
                            <td>Descripción</td>
                            <td>Cantidad</td>
                            <td>Precio</td>
                            <td>Importe</td>
                            <td>Foto del Producto</td>
                        <?php

                            $sql = "select d.idproducto,descripcion,cantidad,d.precio,cantidad*d.precio importe,imagen from detallepedidos d inner join productos p on d.idproducto=p.idproducto inner join pedidos pe on d.idpedido=pe.idpedido where pe.idcliente='".$_SESSION['idc']."'";

                            $rs = mysqli_query($cn,$sql);

                            while($fila = mysqli_fetch_row($rs)){
                                echo "<tr>";
                                for ($i=0; $i <=5 ; $i++){
                                    if($i == 5){
                                        echo "<td class=text-center><img src=".$fila[5]." width=60 height=60></td>";
                                    }else{
                                        echo "<td>".$fila[$i];
                                        }
                                }
                                echo "</tr>";
                            }
                            mysqli_close($cn);

                        ?>
                    </div>
                </table>
                <br><br>
                
            </div>
        </div>
    </div>
    <br><br><br>
    <?php
        include("footer.php");
    ?>
</body>
</html>
