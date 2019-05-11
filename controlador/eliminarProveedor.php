<?php
require "../modelo/ConexionBaseDatos.php";
extract ($_REQUEST);

$objConexion = Conectarse();

$sql="delete from proveedor where idProveedor = '$_REQUEST[idProveedor]'";

$resultado = $objConexion->query($sql);

if ($resultado)
	header("location: ../modelo/modificarProveedor.php?x=3");  
else
	header("location: ../modelo/modificarProveedor.php?x=4"); 
?>
