<?php
require "../modelo/ConexionBaseDatos.php";
extract ($_REQUEST);
$objConexion=Conectarse();

$sql="update contrato set  ConNombre='$_REQUEST[contratoD]',  ConDescripcion = '$_REQUEST[Descripcion]'
     where idContrato= '$_REQUEST[idContrato]' ";

$resultado=$objConexion->query($sql);

if ($resultado)
        header("location: ../modelo/modificarcontrato.php?x=1");  
else
	header("location: ../modelo/modificarcontrato.php?x=2"); 
?>