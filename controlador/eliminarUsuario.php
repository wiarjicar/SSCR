<?php
require "../modelo/ConexionBaseDatos.php";
extract ($_REQUEST);

$objConexion = Conectarse();

$sql="delete from usuarios where idUsuario = '$_REQUEST[idUsuario]'";

$resultado = $objConexion->query($sql);

if ($resultado)
	header("location: ../modelo/frmCrearUsuarios.php?x=3");  
else
	header("location: ../modelo/frmCrearUsuarios.php?x=4"); 
?>