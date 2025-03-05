<?php
    include_once("conexion.php");

    $correo=$_POST['consulta'];

    $consulta=$conexion->query("SELECT * from medico where documento='$correo' ");


    while($row=$consulta->fetch_array()){
        
        echo 'documento: '.$row['documento'].'<br>';
        echo 'nombre: '.$row['nombre'].'<br>';
        echo 'apellido: '.$row['apellido'].'<br>';
        echo 'direccion: '.$row['direccion'].'<br>';
        echo 'telefono: '.$row['telefono'].'<br>';
        echo 'medico: '.$row['medico'].'<br>';
        echo 'eps: '.$row['Eps'].'<br>';
        
    }


?>