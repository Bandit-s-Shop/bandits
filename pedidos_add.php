<?php
session_start();
require_once("conexion/conexion.php");

if($_SESSION['idc']==null){
    header("Location: login.html");
}else{
    $sql = "select max(IdPedido) from pedidos";
    $rs = mysqli_query($cn,$sql);
    $fila = mysqli_fetch_row($rs);
    if($fila[0] == null){
        $id = "00001";
    }else{
        $id = str_pad($fila[0]+1,5,'0',STR_PAD_LEFT);
    }

    $_SESSION['idpedido'] = $id;

    $sql = "insert pedidos values('".$id."',CURDATE(),'".$_SESSION['idc']."')";
    mysqli_query($cn,$sql);

    $sql = "insert into detallepedidos(idproducto,cantidad,precio) select idproducto,cantidad,precio from carrito where idcliente='".$_SESSION['idc']."'";
    mysqli_query($cn,$sql);

    $sql = "update detallepedidos set idpedido='".$id."' where idpedido=' '";
    mysqli_query($cn,$sql);

    $sql = "delete from carrito where idcliente='".$_SESSION['idc']."'";
    mysqli_query($cn,$sql);

    header("Location: pedidos.php");
}
?>