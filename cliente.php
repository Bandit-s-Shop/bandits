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
    <title>Bandit's Shop :: Mi Cuenta</title>
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
        form{
            margin: auto;
            width: 40%;
            height: 40%;
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
                        <a href='pedidos.php' class='dropdown-item'>Mis Pedidos</a>
                        <a href='cliente.php' class='dropdown-item active'>Mi Cuenta</a>
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
        <div class="card">
            <div class="card-header">
                <div class='alert alert-secondary'>
                        <strong><center>Mi cuenta</center></strong>
                </div>
            </div>
            <?php
                $sql = "select * from clientes where idcliente='".$_SESSION['idc']."'";

                require_once("conexion/conexion.php");

                $rs = mysqli_query($cn,$sql);

                while($fila = mysqli_fetch_row($rs)){

                

            ?>
            <div class="card-body">
                <div class="col-md-12">
                    <center><form action="cliente_update.php" method="POST" name="frmCliente">
                        <div class="form-group">
                            <label for="Nombres">Nombres:</label>
                                <input type="text" name="txtNombres" value="<?php echo $fila[1]; ?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="Direccion">Dirección:</label>
                                <input type="text" name="txtDireccion" value="<?php echo $fila[2]; ?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="Telefono">Teléfono:</label>
                                <input type="text" name="txtTelefono" value="<?php echo $fila[3]; ?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="DNI">DNI:</label>
                                <input type="text" name="txtDNI" value="<?php echo $fila[4]; ?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="Passwd">Contraseña:</label>
                                <input type="text" name="txtPwd" value="<?php echo $fila[5]; ?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="Email">Correo Electrónico:</label>
                                <input type="email" name="txtEmail" value="<?php echo $fila[6]; ?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Actualizar cuenta">
                            </div>
                        </div>
                    </form><center>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    </div>
    <br><br><br>
    <?php
        include("footer.php");
    ?>
</body>
</html>
