<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lavaautos</title>
</head>
<body>
    <h1>Lavaautos</h1>

    <?php
    if(empty($_POST)){
    ?>
    <form action="" method="POST">
        <label>Ingrese número de clientes:</label>
        <input type="number" name="num" min="1" required>
        <input type="submit" value="Enviar">
    </form>
    <?php
    } elseif(isset($_POST['num'])) {
        $num = $_POST['num'];
    ?>
        <form action="" method="POST">
            <input type="hidden" name="num" value="<?php echo $num; ?>">

            <?php
            for($i = 1; $i <= $num; $i++) {
                echo "<label>Nombre Cliente $i:</label>
                      <input type='text' name='nombre$i' required>
                      <label>Tipo de lavado (A, B, C):</label>
                      <input type='text' name='tipo$i' required>
                      <label>Cantidad de lavados:</label>
                      <input type='number' name='cantidad$i' required><br><br>";
            }
            ?>
            <input type="submit" name="calcular" value="Calcular Total">
        </form>
    <?php
    } elseif(isset($_POST["calcular"])) {
        // Precios de los lavados
        $precios = ["A" => 16000, "B" => 14000, "C" => 12000];

        // Variables de acumulación
        $total_A = $total_B = $total_C = $contador_B = 0;
        $clientes = [];

        $num = $_POST['num'];

        // Procesar cada cliente
        for ($i = 1; $i <= $num; $i++) {
            $nombre = $_POST["nombre$i"];
            $tipo = strtoupper($_POST["tipo$i"]); // Convertir a mayúsculas para evitar errores
            $cantidad = $_POST["cantidad$i"];

            // Sumar lavados al mismo cliente si ya existe
            if (isset($clientes[$nombre])) {
                $clientes[$nombre][$tipo] += $cantidad;
            } else {
                $clientes[$nombre] = ["A" => 0, "B" => 0, "C" => 0];
                $clientes[$nombre][$tipo] = $cantidad;
            }

            // Acumular totales por tipo de lavado
            if ($tipo == "A") $total_A += $precios["A"] * $cantidad;
            if ($tipo == "B") { 
                $total_B += $precios["B"] * $cantidad;
                $contador_B += $cantidad;
            }
            if ($tipo == "C") $total_C += $precios["C"] * $cantidad;
        }

        // Aplicar la promoción de lavados gratuitos
        $servicios_gratis = floor($contador_B / 3);
        $descuento = $servicios_gratis * $precios["C"];
        $total_general = $total_A + $total_B + $total_C - $descuento;

        // Mostrar resultados
        echo "<h2>📌 Resumen del Mes</h2>";
        foreach ($clientes as $nombre => $lavados) {
            echo "<p><strong>$nombre:</strong> Lavado A: {$lavados['A']} | Lavado B: {$lavados['B']} | Lavado C: {$lavados['C']}</p>";
        }

        echo "<h3>📢 Promoción:</h3>";
        echo "<p>Lavados B realizados: $contador_B</p>";
        echo "<p>Lavados C gratuitos: $servicios_gratis</p>";
        echo "<p>Valor descontado: $$descuento</p>";

        echo "<h2>💰 Total recaudado: $$total_general</h2>";
    }
    ?>
</body>
</html>
