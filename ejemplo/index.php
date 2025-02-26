<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tienda de Naranjas</h1>
    <?php
    if(empty($_REQUEST)){
    ?>
    <form action="" method="POST">
        <label for="num">¿Cuantos Clientes?</label>
        <input type="text" name="num"/>
        <input type="submit" name="submit" value="Enviar"/>
    </form>
    <?php
    } elseif(isset($_REQUEST['num'])){
    ?>
    <form action="" method="POST">
    <?php
        $numero = $_REQUEST['num'];
        for($i=0; $i<$numero; $i++){
        ?>
        Ingrese la Cantidad de kilos del cliente <?php echo $i; ?>
        <input type="number" name="cantidad[]" value=""/>
        <br>
        <?php

        }
    ?>
        <input type="submit" value="Enviar"/>
    </form>
    <?php
    } else {
        $acum=0;
        $precio=10000;
        $cantidades=$_REQUEST['cantidad'];

        foreach($cantidades as $cantidad){
            echo "<p>Cantidad: $cantidad</p>";

            if($cantidad>10){
                $total=$precio*$cantidad;
                $acum=$acum+$total;
                $descuento= $total*0.1;
                $total_final=$total-$descuento;
                echo "tiene descuento";
                echo "<br/>";
                echo "El descuento es del 10% <br/>";
                echo "el total a pagar es de ", $total_final;
                echo "<br/>";
            }else{
                $total=$precio*$cantidad;
                $acum=$acum+$total;
                echo "no tiene descuento";
                echo "<br/> el precio a pagar es de ", $total;
            }
        }
        echo "<br/> El total de vendido es de ", $acum;
    }
        ?>
</body>
</html>