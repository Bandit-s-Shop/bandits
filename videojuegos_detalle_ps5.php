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
    <title>Bandit's Shop :: Videojuegos :: Detalles</title>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="icon" type="imagen/png" href="recursos/icono.png">
    <style>
        h3{
            font-family: 'Tangerine', serif;
        }
        h2{
            font-family: "Times New Roman", Georgia, Serif;
        }
    </style>
    <script type="text/javascript">
        var inicio = 1;
        function aumentar(){
            var cantidad = frmAdd.txtCantidad.value = ++inicio;
        }
        function disminuir(){
            if(frmAdd.txtCantidad.value < 2){
                frmAdd.txtCantidad.value = 1;
                alert("No se puede comprar menos de 1 producto");
            }else{
                var cantidad = frmAdd.txtCantidad.value = --inicio;
            }
        }
    </script>
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
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Videojuegos
                    </a>
                    <div class="dropdown-menu">
                        <a href="videojuegos_ps5.php" class="dropdown-item active">Videojuegos de PS5</a>
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
        <br><br><br>
        <div class="card border-info">
            <div class="card-body">
                <table class="table">
                    <?php

                    $_SESSION['codpro'] = $_GET['id'];
                    $_SESSION['prepro'] = $_GET['pp'];
                    $_SESSION['codcli'] = $_SESSION['idc'];

                    $sql = "select p.imagen,p.idproducto,descripcion,precio,nomcategoria,propiedades
                     from productos p inner join categorias c on p.idcategoria=c.idcategoria
                     inner join atributos a on p.idproducto=a.idproducto where
                    p.idproducto='".$_SESSION['codpro']."'";

                    require_once("conexion/conexion.php");

                    $rs = mysqli_query($cn,$sql);

                    echo "<tr>";
                    while($fila = mysqli_fetch_row($rs)){
                        echo "<td align=center><img src=".$fila[0]." width=500 height=500></td><td><br><p class='text-primary'>V i d e o j u e g o sㅤ d eㅤ P l a y S t a t i o nㅤ 5
                        </p><br><p> Id del Producto: ".$fila[1].
                        "</p><br><h3>".$fila[2]."</h3><br><h2> S/ ".$fila[3]."</h2><br><p><b> Categoria:</b> ".$fila[4]."<br><br>
                        <b> Descripción:</b> ".$fila[5]."</p><br>";
                    }

                    ?>
                <form <?php echo "action=carrito_add.php"; ?> name="frmAdd" method="POST">
                    <div class="form-group">
                        <label for="Cantidad" >Cantidad:</label>
                        <input type="button" onclick="disminuir()" value="-">
                        <input type="text" name="txtCantidad" size="2" value="1">
                        <input type="button" onclick="aumentar()" value="+">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Cargar al carrito" class="btn btn-secondary">
                    </div>
                </form>
                <?php
                    echo "</td>";
                    echo "</tr>";
                    mysqli_close($cn);
                ?>
                </table>
                <div class="row">
                    <div class="col-md-12">
                        <?php
                            echo "<center><video src=trailers_videojuegos/".$_SESSION['codpro'].".mp4 controls muted autoplay width=840 height=570><center>";
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <?php
        include("footer.php");
    ?>
</body>
</html>