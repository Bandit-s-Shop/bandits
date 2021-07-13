<?php

    session_start();

    $usr = $_POST['txtEmail'];
    $pwd = $_POST['txtPwd'];
    $sql = "select idcliente,nombres from clientes where email='".$usr."' and pwdcli='".$pwd."'";

    require_once("conexion/conexion.php");

    $rs = mysqli_query($cn,$sql);

    if(mysqli_num_rows($rs) > 0){
        $fila = mysqli_fetch_row($rs);
        $_SESSION['idc'] = $fila[0];
        $_SESSION['nom'] = $fila[1];
        header("Location: home.php");
    }else{
        header("Location: login.html");
    }


?>