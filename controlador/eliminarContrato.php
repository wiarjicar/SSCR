<?php
require "../modelo/ConexionBaseDatos.php";
extract ($_REQUEST);

$objConexion = Conectarse();

$sql="delete from contrato where idContrato = '$_REQUEST[idContrato]'";

$resultado = $objConexion->query($sql);

if ($resultado)
	header("location: ../modelo/modificarContrato.php?x=3");  
else
	header("location: ../modelo/modificarContrato.php?x=4"); 
?>

