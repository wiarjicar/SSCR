<?php
//Se reciben los datos del formulario
require "../modelo/ConexionBaseDatos.php";
extract ($_REQUEST);

$objConexion=Conectarse();

$sql = "insert into tipocontrato (TipCodigo,TipTcontrato, TipDescripcion) 
values ('$_REQUEST[codigo]' , '$_REQUEST[Tcontrato]', '$_REQUEST[Descripcion]')";

$resultado = $objConexion->query($sql);

if ($resultado)
        header("location: ../modelo/modificarTcontrato.php?x=5");  
else
	header("location: ../modelo/modificarTcontrato.php?x=6"); 
?>