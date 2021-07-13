<?php


require_once("conexion/conexion.php");

$sql = "select max(IdCliente) from clientes";
$rs = mysqli_query($cn,$sql);
$fila = mysqli_fetch_row($rs);
if($fila[0] == null){
    $id = "00001";
}else{
    $id = str_pad($fila[0]+1,5,'0',STR_PAD_LEFT);
}

$nom = $_POST['txtNombres'];
$dir = $_POST['txtDireccion'];
$tel = $_POST['txtTelefono'];
$dni = $_POST['txtDNI'];
$pwd = $_POST['txtPwd'];
$mail = $_POST['txtEmail'];

$sql = "insert clientes values('$id','$nom','$dir','$tel','$dni','$pwd','$mail')";

mysqli_query($cn,$sql);
mysqli_close($cn);
header("Location: home.php")
?>