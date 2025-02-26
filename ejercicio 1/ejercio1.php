<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lavaautos</h1>

    <?php
    if(empty($_REQUEST)){
    ?>
    <form action="" method="POST">
        <label for="num">Ingrese numero de autos que ingresaron este mes</label>
        <input type="number" name="num">
        <input type="submit" name="submit" value="Enviar">
    </form>
        <?php
    }elseif(isset($_REQUEST['num'])){
        ?>
        <form action="" method="POST">
    <?php
        $numero = $_REQUEST['num'];
        for($i=0; $i<$numero; $i++){
    ?>
        Ingrese el tipo de lavado A,B,C <?php echo $i+1; ?>
        <input type="text" name="tipo[]" value="">
        <br>
        <?php
        }
        ?>
        <input type="submit" name="entrar" value="Enviar">
        </form>
        
        

        <?php
    }elseif(isset($_REQUEST["tipo"])){
        $tipos=$_REQUEST["tipo"];

        foreach($tipos as $tipo1){
            echo "<p>el tipo de lavado elegido fue $tipo1 </p>";
    ?>
        <form action="" method="POST">
            <input type="text" placeholder="ingrese la cantidad de veces que ha sido lavado el auto" name="cantidad[]">
            <br>
    <?php
        }   
        ?>
            <input type="submit" value="Enviar">
        </form>
        <?php
        $tipo_lavado[]=$tipos;
    }else{
        $acum_total=0;
        $acum_a=0;
        $acum_b=0;
        $acum_c=0;

        $a=16000;
        $b=14000;
        $c=12000;

        $cantidades=$_REQUEST['cantidad'];
        
        if($tipo_lavado == "A"){
            $total=$a*$cantidades;
            echo "<p> el valor de las lavadas es de $total ";
        }
    }
    ?>
</body>
</html>