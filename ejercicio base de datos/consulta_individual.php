<?php
    include_once("conexion.php");

    $correo_formulario=$_POST['correo'];

    $consulta=$conexion->query("SELECT * FROM persona WHERE correo='$correo_formulario'");

    while($row=$consulta->fetch_array()){
        echo 'nombre: '.$row['nombre'].'<br>';
        echo 'correo: '.$row['correo'].'<br>';
        echo 'telefono: '.$row['telefono'].'<br>';
        echo 'edad: '.$row['edad'].'<br>';
        echo 'direccion: '.$row['direccion'].'<br>';
    }



?>