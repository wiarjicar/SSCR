<?php
//Se reciben los datos del formulario
require "../modelo/ConexionBaseDatos.php";
extract ($_REQUEST);

$objConexion=Conectarse();

$sql = "insert into contrato (ConCodigo,ConNombre, ConDescripcion) 
values ('$_REQUEST[codigo]' , '$_REQUEST[contratoD]', '$_REQUEST[Descripcion]')";

$resultado = $objConexion->query($sql);

if ($resultado)
        header("location: ../modelo/modificarcontrato.php?x=5");  
else
	header("location: ../modelo/modificarcontrato.php?x=6"); 
?>