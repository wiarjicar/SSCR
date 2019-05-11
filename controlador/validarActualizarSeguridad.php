<?php
require "../modelo/ConexionBaseDatos.php";
extract ($_REQUEST);
$objConexion=Conectarse();

$sql="update seguridad set seCodigo = '$_REQUEST[scodigo]',seNombre = '$_REQUEST[snombre]', seValor = '$_REQUEST[svalor]', seDescripcion = '$_REQUEST[sdescripcion]',

  where idSeguridad= '$_REQUEST[idSeguridad]' ";

$resultado=$objConexion->query($sql);

if ($resultado)
        header("location: ../modelo/modificarSeguridad.php?x=1");  
else
	header("location: ../modelo/modificarSeguridad.php?x=2"); 
?>
