<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container mt-5 bg-purple">


<div class="row">
<section class="col-5 container">
    <form action="insert.php" method="POST" class="row">
            <div class="col-6">
                <label>Documento:</label>
                    <input type="number" name="documento" placeholder="ingrese documento">
            </div>
            <div class="col-6">
                <label>Nombre:</label><br>
                    <input type="text" name="nombre">
            </div>
            <div class="col-6">
                <label>Correo:</label> <br>
                    <input type="email" name="email" >
            </div>
            <div class="col-6">
                <label>Telefono:</label>
                    <input type="number" name="telefono">
            </div>

            <div class="col-6">
                <label>Direccion:</label>
                    <input type="text" name="direccion">
            </div>
            <div class="col-6">
                <label for="">Colegio:</label>
                    <input type="text" name="colegio">
            </div>

            <div class="col-6">
                <label>Grupo:</label>
                <select name="grupo" class="form-select bg-secondary text-white col-1">
                    <option value="11A">11A</option>
                    <option value="11B">11B</option>
                    <option value="11C">11C</option>
                </select>
            </div>
            
            <div class="col-6">
            <label for="">Coordinador</label>
                <select name="coordinador" id="" class="form-select bg-secondary text-white col-1">
                    <option value="si">SI</option>
                    <option value="no">No</option>
                </select>
            </div>
            

        <br>
        <br>


            <button type="submit" class="btn btn-primary mt-5">Enviar</button>

        </form>

</section>



    <br>


    <section class="col-5">
    <form action="insert_colegio.php" method="POST" class="row">
        
        <div class="col-6">
            <label for="">Colegio:</label>
                <input type="text" name="nombre_colegio"> 
        </div>

        <div class="col-6">
            <label for="">NIT:</label><br>
                <input type="number" name="nit"> 
        </div>

        <div class="col-6">
            <label for="">Direccion</label>
                <input type="text" name="direccion_colegio"> 
        </div>

        <div class="col-6">
            <label for="">Correo</label> <br>
                <input type="email" name="correo_colegio"> 
        </div>

        <div class="col-6">
            <label for="">Telefono</label>
                <input type="number" name="telefono_colegio"> 
        </div>

        <div class="col-6">
            <label for="">Estudiantes</label>
                <input type="number" name="capacidad"> 
        </div>


        
            
            
            
            
            
    
    
            <button type="submit" class="btn btn-primary mt-5">Enviar</button>
        </form>
    </section>
</div>


    
</html>