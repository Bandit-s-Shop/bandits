<?php
    session_start();

    $nom = $_POST['txtNombres'];
    $dir = $_POST['txtDireccion'];
    $tel = $_POST['txtTelefono'];
    $dni = $_POST['txtDNI'];
    $pwd = $_POST['txtPwd'];
    $email = $_POST['txtEmail'];

    $sql = "update clientes set nombres='".$nom."',dirección='".$dir."',telefono='".$tel."',dni='".$dni."',pwdcli='".$pwd."',email='".$email."' where idcliente='".$_SESSION['idc']."'";
    require_once("conexion/conexion.php");
    mysqli_query($cn,$sql);

    echo "<br>Se actualizó correctamente <br><a href='cliente.php'>Volver</a>";
?>