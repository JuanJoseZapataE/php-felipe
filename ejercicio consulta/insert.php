<?php
    include_once("conexion.php");

    $documento = $_POST['documento'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $medico = $_POST['medico'];
    $eps = $_POST['eps'];

    $conexion->query("INSERT INTO medico(documento,nombre,apellido,direccion,telefono,medico,eps) values ('$documento','$nombre', '$apellido', '$direccion', '$telefono', '$medico', '$eps')");


    echo "ingresado correctamente";




?>

