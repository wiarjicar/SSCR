<?php
require "../modelo/ConexionBaseDatos.php";
extract ($_REQUEST);
$objConexion=Conectarse();

$sql="update proveedor set  proNit='$_REQUEST[nit]',  proNombre = '$_REQUEST[pnombre]',

proDireccion = '$_REQUEST[pdireccion]', proTelefono = '$_REQUEST[ptelefono]', proEmail = '$_REQUEST[pemail]',

 proDescripcion = '$_REQUEST[pdescripcion]' where idProveedor= '$_REQUEST[idProveedor]' ";

$resultado=$objConexion->query($sql);

if ($resultado)
        header("location: ../modelo/modificarProveedor.php?x=1");  
else
	header("location: ../modelo/modificarProveedor.php?x=2"); 
?>