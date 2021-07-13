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
    <title>Bandit's Shop :: Empresa</title>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="icon" type="imagen/png" href="recursos/icono.png">
    <style>
        h3{
            font-family: monospace;
            color: rgb(121, 143, 143);
        }
        h4{
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
        }
        h5{
            color: rgb(88, 88, 88);
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            text-align: center;
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
                <li class="nav-item active">
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
    <br><br><br>
    <div class="container">
        <br><br>
        <hr color="orange" size="5">
        <br>
        <?php
            if($_SESSION['idc']==""){
            }else{
                echo "<div class='alert alert-success'>
                    <strong><center>Conoce más sobre nosotros ".$_SESSION['nom']." </center></strong>
                    </div>";
            }
        ?>
        <br>
        <h3>LA EMPRESA</h3>
        <br>
        <div class="row">
            <div class="col-md-6">
                <img src="recursos/edificio.jpg" alt="" width="500" height="300">
            </div>
            <div class="col-md-6">
                <p>Bandit's Shop, es una empresa multinacional japonesa con sede en Tokio (Japón) y uno de los fabricantes más importantes a nivel mundial en electrónica de consumo: videojuegos y consolas. En 2020 Bandit's Shop ocupó el puesto 74 en la lista Fortune Global 500, un escalafón de empresas de todo el mundo medidas por los ingresos. A comienzos del siglo XXI, Bandit's Shop llegó a estar entre las treinta primeras de este listado en varias oportunidades.</p>
                <p>Durante décadas Akio Morita y Masaru Ibuka, los fundadores de Bandit's Shop, formaron una pareja complementaria. Gracias al agudo sentido de las relaciones públicas y mercadotecnia de Morita y al espíritu de innovación de Ibuka, la compañía prosperó internacionalmente.​ En las décadas posteriores la empresa desarrolló productos como la serie de televisores Trinitron, o la PlayStation entre otros que dieron renombre mundial. Entre la década de los Años 1980 y Años 1990, Bandit's Shop era la empresa líder en el sector tecnológico y de las más importantes a nivel global.</p>
            </div>
        </div>
        <br><br>
        <h3>ACERCA DE BANDIT'S SHOP</h3>
        <br>
        <div class="row">
            <div class="col-md-12">
                <img src="recursos/sobre_la_empresa.jpeg" alt="" width="1100" height="350">
                <br><br>
                <h2 class="text-center"><b>historia</b></h2>
                <p class="text-center">En 1946, Tokyo Tsushin Kogyo K.K. (Tokyo Telecommunications Engineering
                    Corporation, predecesora de Sony Group Corporation) comenzó como una pequeña empresa con un capital de solo 190.000 yenes y aproximadamente 20 empleados.
                    El fundador Masaru Ibuka dijo que el propósito de
                    establecer la compañía era "establecer una fábrica ideal que enfatiza un espíritu de libertad y apertura de mente que, a través de la tecnología, contribuirá a la cultura japonesa".
                    Simbolizando el espíritu de desafío de Sony a "hacer
                    lo que nunca se ha hecho antes", la compañía ha seguido lanzando innumerables productos "los primeros de Japón" y "los primeros del mundo".</p>
            </div>
        </div>
        <br><br>
        <h3>PROPÓSITO Y VALORES DE BANDIT'S SHOP</h3>
        <br><br><br>
        <h2 class="text-center"><b>propósito</b></h2>
        <br>
        <h4>Llenar el mundo de emoción, a través del poder de la creatividad y la tecnología.</h4>
        <br><br><br>
        <h2 class="text-center"><b>valores</b></h2>
        <br>
        <h4>Sueños y Curiosidad</h4>
        <br>
        <h5>Pionero del futuro con sueños y curiosidad.</h5>
        <br>
        <h4>diversidad</h4>
        <br>
        <h5>Perseguir la creación de lo mejor aprovechando la diversidad y los diferentes puntos de vista.</h5>
        <br>
        <h4>Integridad y sinceridad</h4>
        <br>
        <h5>Gane la confianza de Bandit's Shop a través de una conducta ética y responsable.</h5>
        <br>
        <h4>sostenibilidad</h4>
        <br>
        <h5>Cumplir con nuestras responsabilidades de las partes interesadas a través de prácticas comerciales disciplinadas.</h5>
        <br><br><br>
        <center><iframe width="560" height="315" src="https://www.youtube.com/embed/eh0O-i03lQE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
        <br><br>
        <hr color="orange" size="5">
    </div>
    <br><br>
    <?php
        include("footer.php");
    ?>
</body>
</html>