<?php

    $conexion= new mysqli("localhost", "root", "", "senaadso");

    $nombre=$_POST['nombre'];
    $documento=$_POST['documento'];
    $email=$_POST['email'];
    $telefono=$_POST['telefono'];
    $edad=$_POST['edad'];
    $direccion=$_POST['direccion'];
    $genero=$_POST['genero'];

    $conexion->query("INSERT INTO persona(nombre,documento,correo,telefono,edad,direccion,genero) values ('$nombre','$documento', '$email', '$telefono', '$edad','$direccion', '$genero')");

    echo "La persona fue ingresada exitosamente"


?>