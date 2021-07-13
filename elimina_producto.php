<?php

    session_start();
    require_once("conexion/conexion.php");

    $id = $_GET['id'];
    $idp = $id + $_SESSION['idc'];

    $sql = "delete from carrito where idproducto+idcliente='".$idp."'";
    mysqli_query($cn,$sql);
    mysqli_close($cn);
    header("Location: carrito_lista.php");

?>