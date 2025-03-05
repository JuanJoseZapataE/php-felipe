<?php
    include_once("conexion.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container">
    <h1>Registro de pacientes</h1>
    <p>Complete el siguiente formulario para registrar un nuevo paciente:</p>


    <form class="row" action="insert.php" method="POST" >

    <div class="col-6">
        <label for="">Documento</label><br>
            <input type="number" name="documento"><br>
    </div>
    
    <div class="col-6">
        <label for="">Nombre</label><br>
            <input type="text" name="nombre"><br>
    </div>

    <div class="col-6">
        <label for="">Apellido</label><br>
            <input type="text" name="apellido"><br>
    </div>

    <div class="col-6">
        <label for="">Direccion</label><br>
            <input type="text" name="direccion"><br>
    </div>

    <div class="col-6">
        <label for="">Telefono</label><br>
            <input type="number" name="telefono"><br>
    </div>

    <div class="col-6">
        <label for="">Medico</label><br>
            <input type="text" name="medico"><br>
    </div>

    <div class="col-6">
        <label for="">EPS</label><br>
            <input type="text" name="eps">
    </div>
    
    <div class="mt-5">
        <button type="submit" class="btn btn-primary mt-5">Enviar</button>
    </div>
    
    </form>
    
    <div class="">
        
    </div>
    

    
    <form action="consulta_general.php" method="POST" class="mt-5">
        <label for="">Documento</label>
            <input type="number" name="consulta">
        <button class="btn btn-primary mt-t" type="submit"> consultar</button>
    </form>
    

    <form action="consulta_individual.php" method="POST">
        <input type="documento" name="consulta">
        <button class="btn btn-primary mt-t" type="submit"> consultar</button>
    </form>

    <form action="insert2.php" method="POST" class="mt-5">
        <label for="">documento</label>
            <input type="number" name="documento_medico"><br>
        
        <label for="">nombre</label>
            <input type="text" name="nombre_medico"><br>
        
        <label for="">Telefono</label>
            <input type="number" name="telefono_medico"><br>


            <button class="btn btn-primary mt-t" type="submit"> registrar</button>
    </form>





<form action="insert.php" method="POST" class="mb-5">

    <label for="">medico</label>
        <select name="medico">
            <?php 
                $consulta=$conexion->query("SELECT * FROM paciente");
                    while($row=$consulta->fetch_array()){
                        echo '<option value="'.$row['medico'].'"selected>'.$row['nombre_medico'].'</option>';

                    }
                ?>
        </select>
        
    <label for="">EPS</label>
        <select name="eps">
            <?php
                $consulta=$conexion->query("SELECT * FROM eps");
                    while($row=$consulta->fetch_array()){
                        echo '<option value="'.$row['nombre'].'"selected>'.$row['nombre'].'</option>';

                    }
                ?>

        </select>

        <button type="submit" class="btn btn-primary">Enviar</button>
</form>
    

</body>
</html>