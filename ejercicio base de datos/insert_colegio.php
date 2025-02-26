<?php







$nombre_colegio=$_POST['nombre_colegio'];
$nit=$_POST['nit'];
$direccion_colegio=$_POST['direccion_colegio'];
$correo_colegio=$_POST['correo_colegio'];
$telefono_colegio=$_POST['telefono_colegio'];
$capacidad=$_POST['capacidad'];

$conexion->query("INSERT INTO colegio(nombre_colegio,nit,direccion_colegio,correo_colegio, telefono_colegio, capacidad) values ('$nombre_colegio', '$nit', '$direccion_colegio', '$correo_colegio', '$telefono_colegio', '$capacidad')");


echo "datos de colegio ingresados correctamente";

?>



