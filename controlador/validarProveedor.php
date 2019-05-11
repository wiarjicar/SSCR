<?php
//Se reciben los datos del formulario
require "../modelo/ConexionBaseDatos.php";
extract ($_REQUEST);

$objConexion=Conectarse();

$sql = "insert into proveedor (proNit,proNombre, proDireccion, proTelefono, proEmail, proDescripcion) 
values ('$_REQUEST[nit]' , '$_REQUEST[pnombre]', '$_REQUEST[pdireccion]', '$_REQUEST[ptelefono]'
,'$_REQUEST[pemail]','$_REQUEST[pdescripcion]')";

$resultado = $objConexion->query($sql);

if ($resultado)
        header("location: ../modelo/modificarProveedor.php?x=5");  
else
	header("location: ../modelo/modificarProveedor.php?x=6"); 
?>