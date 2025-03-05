<?php
    include_once("conexion.php"); //primer paso traer la conexion


    //segundo paso, realizar la consulta con select
    $consulta=$conexion->query("SELECT * from persona");

    //tercer paso, traer un ciclo y convertir la consultaen un arreglo
    while($row=$consulta->fetch_array()){
        
        echo 'nombre: '.$row['nombre'].'<br>';
        echo 'correo: '.$row['correo'].'<br>';
        echo 'telefono: '.$row['telefono'].'<br>';
        echo 'edad: '.$row['edad'].'<br>';
        echo 'direccion: '.$row['direccion'].'<br>';
    }


?>