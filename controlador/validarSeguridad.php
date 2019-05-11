<?php

require "../modelo/ConexionBaseDatos.php";
extract ($_REQUEST);

$objConexion=Conectarse();

$sql = "insert into seguridad (seCodigo, seNombre, seValor, seDescripcion) 
values ('$_REQUEST[codigo]' , '$_REQUEST[nombre]', '$_REQUEST[valor]', '$_REQUEST[descripcion]')";



$resultado = $objConexion->query($sql);

if ($resultado)
	    header("location: ../modelo/modificarSeguridad.php?x=5");  
else
	    header("location: ../modelo/modificarSeguridad.php?x=6"); 
?>