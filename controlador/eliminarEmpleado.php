<?php
require "../modelo/ConexionBaseDatos.php";
extract ($_REQUEST);

$objConexion = Conectarse();

$sql="delete from empleados where idEmpleado = '$_REQUEST[idEmpleado]'";

$resultado = $objConexion->query($sql);

if ($resultado)
	header("location: ../modelo/ModificarEmpleado.php?x=3");  
else
	header("location: ../modelo/ModificarEmpleado.php?x=4"); 
?>
