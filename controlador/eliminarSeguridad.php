<?php
require "../modelo/ConexionBaseDatos.php";
extract ($_REQUEST);

$objConexion = Conectarse();

$sql="delete from seguridad where idSeguridad = '$_REQUEST[idSeguridad]'";

$resultado = $objConexion->query($sql);

if ($resultado)
	header("location: ../modelo/modificarSeguridad.php?x=3");  
else
	header("location: ../modelo/modificarSeguridad.php?x=4"); 
?>
