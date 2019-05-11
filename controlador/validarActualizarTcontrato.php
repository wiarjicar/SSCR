<?php
require "../modelo/ConexionBaseDatos.php";
extract ($_REQUEST);
$objConexion=Conectarse();

$sql="update tipocontrato set TipCodigo='$_REQUEST[codigo]', TipTcontrato='$_REQUEST[contrato]',  TipDescripcion = '$_REQUEST[descripcion]'
     where idTipoContrato= '$_REQUEST[idTipoContrato]' ";

$resultado=$objConexion->query($sql);

if ($resultado)
        header("location: ../modelo/ModificarTcontrato.php?x=1");  
else
	header("location: ../modelo/ModificarTcontrato.php?x=2"); 
?>
