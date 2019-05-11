<?php
require "../modelo/ConexionBaseDatos.php";
extract ($_REQUEST);

$objConexion = Conectarse();

$sql="delete from tipocontrato where idTipoContrato = '$_REQUEST[idTipoContrato]'";

$resultado = $objConexion->query($sql);

if ($resultado)
	header("location: ../modelo/ModificarTcontrato.php?x=3");  
else
	header("location: ../modelo/ModificarTcontrato.php?x=4"); 
?>
