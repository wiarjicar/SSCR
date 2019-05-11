<?php
require "../modelo/ConexionBaseDatos.php";
extract ($_REQUEST);

$objConexion = Conectarse();

$sql="delete from familia where idFamilia = '$_REQUEST[idFamilia]'";

$resultado = $objConexion->query($sql);

if ($resultado)
	header("location: ../modelo/listaServicioAtender.php?x=3");  
else
	header("location: ../modelo/listaServicioAtender.php?x=4"); 
?>
