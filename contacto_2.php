<?php
session_start();
require_once("conexion/conexion.php");

$nom = $_POST['txtNombres'];
$tel = $_POST['txtTelefono'];
$email = $_POST['txtEmail'];
$com = $_POST['txtComentario'];

$sql = "insert contactos(nombres,telefono,email,comentario,fecha) values('$nom','$tel','$email','$com',CURDATE())";
mysqli_query($cn,$sql);

header("Location: contacto_1.php");
?>