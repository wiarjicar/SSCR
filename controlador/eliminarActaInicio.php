<?php
require "../modelo/ConexionBaseDatos.php";
extract ($_REQUEST);

$objConexion = Conectarse();

$sql="delete from actainicio where idActaInicio = '$_REQUEST[idActaInicio]'";

$resultado = $objConexion->query($sql);

if ($resultado)
	header("location: ../modelo/modificarActaInicio.php?x=3");  
else
	header("location: ../modelo/modificarActaInicio.php?x=4"); 
?>

