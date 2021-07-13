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
    <title>Bandit's Shop :: Home</title>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="icon" type="imagen/png" href="recursos/icono.png">
    <style>
        /* Make the image fully responsive */
        .carousel-inner img {
          width: 100%;
          height: 100%;
        }
        h2{
            font-family: 'Tangerine', serif;
        }
        h1{
            font-family: 'Impact';
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
    <br><br>
    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
            <li data-target="#demo" data-slide-to="4"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="recursos/carousel1.jpg" width="1100" height="500">   
                <div class="carousel-caption">
                    <h3>Marvel's Spider-Man: Miles Morales</h3>
                    <p>Marvel's Spider-Man: Miles Morales llega en exclusiva a PlayStation, en PS5 y PS4. Disponible el 12 de noviembre de 2020</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="recursos/carousel5.jpg" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Resident Evil Village</h3>
                    <p>Retomando unos años después de los eventos de Resident Evil 7: Biohazard, Village reúne a los jugadores con el protagonista sin rostro Ethan Winters y su esposa, Mia, ya que están viviendo vidas aparentemente felices con su bebé recién nacido, Rose. Las cosas se rompen cuando Chris Redfield y sus gruñidos armados aparecen en su casa, despachando a Mia a sangre fría y pellizcando a la bebé Rose en el proceso.</p>
                </div>   
            </div>
            <div class="carousel-item">
                <img src="recursos/carousel2.jpg" width="1100" height="500">
                <div class="carousel-caption">
                    <h3 class="text-warning">MLB® The Show™ 21</h3>
                    <p class="text-warning">A pesar de que las Grandes Ligas ya han lanzado su primer lanzamiento, MLB The Show 21 no se estrena hasta finales de este mes, el 20 de abril de 2021. El juego de este año será el primero en lanzarse en una consola que no sea PlayStation, ya que también llegará a Xbox Series X|S y Xbox One.</p>
                </div>   
            </div>
            <div class="carousel-item">
                <img src="recursos/carousel3.jpg" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>God od War - PS4</h3>
                    <p>Kratos es padre de nuevo. Como mentor y protector de Atreus, un hijo decidido a ganarse su respeto, se ve obligado a lidiar y controlar la rabia que lo ha definido durante mucho tiempo mientras está en un mundo muy peligroso con su hijo.</p>
                </div>   
            </div>
            <div class="carousel-item">
                <img src="recursos/carousel4.jpg" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Sackboy: A big adventure</h3>
                    <p>Guía a Sackboy en una aventura épica en una plataforma 3D con tus amigos.</p>
                </div>   
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <br><br>
    <div class="container">
        <?php
            if($_SESSION['idc']==""){
            }else{
                echo "<div class='alert alert-success'>
                    <strong><center>Bienvenido ".$_SESSION['nom']." </center></strong>
                    </div>";
            }
        ?>
        <br>
        <hr color="orange" size="5">
        <br>
        <div class="row">
            <div class="col-md-12" style="background-image: url(recursos/galaxia.jpg);">
                <br>
                <h1 class="text-center text-white">BIENVENIDOS A BANDIT'S SHOP</h1>
                <br>
                <center><img src="recursos/bandit.png" width="470" height="380"></center>
                <br>
            </div>
        </div>
        <br><hr color="orange" size="6">
        <div class="row">
            <div class="col-md-5">
                <br><br><br><br>
                <p class="text-primary">E lㅤ j u e g oㅤ n o ㅤt i e n eㅤ l í m i t e s. </p>
                <br>
                <h2>Consola PlayStation 5</h2>
                <br>
                <p>Vive una nueva generación de juegos increíbles de PlayStation.</p>
                <br>
                <a 
                <?php
                    echo " href=detalle_ps5.php?id=00001&pp=2000.00";
                ?>
                class="btn btn-info text-center">tienda</a>
            </div>
            <div class="col-md-7">
                <img src="recursos/playstation5.png" width="500" height="500">
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-8">
                <h2>ㅤㅤComprar directamente desde PlayStation</h2>
                <br>
                <img src="recursos/image1.png" width="680" height="400">
            </div>
            <div class="col-md-4">
                <br><br>
                <p class="text-primary">D i s p o n i b l eㅤ a h o r a</p>
                <br>
                <h2>Compre los nuevos colores del controlador inalámbrico DualSense</h2>
                <br>
                <p>Como parte de una nueva línea de colores con temática galáctica, explora las nuevas fronteras de los juegos con los controladores inalámbricos DualSense™ Cosmic Red y Midnight Black.</p>
                <br>
                <a
                    <?php
                        echo "href='ps4.php'";
                    ?> 
                  class="btn btn-info">tienda</a>
            </div>
        </div>
        <br><br><br>
        <div class="row">
            <div class="col-md-4">
                <p class="text-primary">D i s p o n i b l eㅤ a h o r a</p>
                <br>
                <h2>Ratchet &Clank: Rift Apart Launch Edition</h2>
                <br>
                <p>Salta entre mundos llenos de acción a velocidades alucinantes mientras los aventureros intergalácticos irrupcionan a la consola PS5™.</p>
                <br>
                <a
                <?php 
                    echo " href=videojuegos_detalle_ps5.php?id=00020&pp=280.00";
                ?>
                 class="btn btn-info">tienda</a>
            </div>
            <div class="col-md-8">
                <br>
                <video src="recursos/video1.mp4" controls autoplay width="710" height="300"></video>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-7">
                <br>
                <img src="recursos/image2.png" alt="ps4" width="650" height="400">
            </div>
            <div class="col-md-5">
                <br><br>
                <p class="text-primary">Juegos increíbles. Entretenimiento sin parar.</p>
                <br>
                <h2>Tienda PlayStation® 4 consola de 1 TB</h2>
                <br>
                <p>Obtén tu próxima PlayStation directamente desde PlayStation.</p>
                <br>
                <a 
                 <?php
                    echo " href=detalle_ps4.php?id=00007&pp=1200.00";
                 ?>
                  class="btn btn-info">tienda</a>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-3">
                <br>
                <p class="text-primary">The Last of Us Parte II - PS4</p>
                <br>
                <h2>Ahora S/ 160.00</h2>
                <br>
                <p>Mientras Ellie persigue la venganza después de un evento violento traumático, debes enfrentar las devastadoras repercusiones físicas y emocionales de sus acciones.</p>
                <br>
                <a 
                <?php
                    echo " href=videojuegos_detalle_ps4.php?id=00033&pp=160.00";
                ?>
                 class="btn btn-info">tienda</a>
            </div>
            <div class="col-md-9">
                <img src="recursos/image3.png" width="850" height="500">

            </div>
        </div>
        <br><br>
        <hr color="orange" size="5">
    </div>
    <br><br><br>
    <?php
        include("footer.php");
    ?>
</body>
</html>