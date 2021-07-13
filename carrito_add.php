<?php
session_start();
    if($_SESSION['idc']==null){
        header("Location: login.html");
    }else{
        $cantidad = $_POST['txtCantidad'];

        $sql = "insert carrito values('".$_SESSION['codpro']."',".$cantidad.",'".$_SESSION['prepro']."','".$_SESSION['idc']."')";

        require_once("conexion/conexion.php");

        mysqli_query($cn,$sql);

        mysqli_close($cn);

        header("Location: carrito_lista.php");
    }

 

?>