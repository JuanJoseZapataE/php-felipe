<?php
    include_once("conexion.php");

    $documento1 = $_POST['documento_medico'];
    $nombre1 = $_POST['nombre_medico'];
    $telefono1 = $_POST['telefono_medico'];

    $conexion->query("INSERT INTO paciente(documento_medico, nombre_medico, telefono_medico) values ('$documento1','$nombre1', '$telefono1')");


    echo "ingresado correctamente";



?>