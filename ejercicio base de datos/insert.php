<?php
include_once("conexion.php");




$documento=$_POST['documento'];
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$colegio=$_POST['colegio'];
$grupo=$_POST['grupo'];
$coordinador=$_POST['coordinador'];



$conexion->query("INSERT INTO profesor(documento,nombre,correo,telefono,direccion,colegio,grupo,coordinador) values ('$documento','$nombre', '$email', '$telefono', '$direccion', '$colegio', '$grupo', '$coordinador')");



echo "ingresado correctamente";



?>