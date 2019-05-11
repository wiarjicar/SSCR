<?php
//Se reciben los datos del formulario
require "../modelo/ConexionBaseDatos.php";
extract ($_REQUEST);

$objConexion=Conectarse();

$sql = "insert into usuarios (usuLogin,usuPassword, usuTipo) 
values ('$_REQUEST[usuario]' , '$_REQUEST[contraseña]', '$_REQUEST[Tipo]')";

$resultado = $objConexion->query($sql);

if ($resultado)
        header("location: ../modelo/frmCrearUsuarios.php?x=5");  
else
	header("location: ../modelo/frmCrearUsuarios.php?x=6"); 
?>