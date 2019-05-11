<?php
session_start();
extract ($_REQUEST);
require "../modelo/ConexionBaseDatos.php";
$objConexion=Conectarse();



$sql="select * from usuario_admin where usuLogin = '$_REQUEST[login]' and usuPassword = '$_REQUEST[password]'";


$resultado=$objConexion->query($sql);


$existe = $resultado->num_rows;
if ($existe==1) 
{
	$usuario=$resultado->fetch_object();
	
	$_SESSION['user']= $usuario->usuLogin;	
	header("location:../modelo/frmCrearUsuarios.php");	
}
else
{
	header("location: ../index_1.php?x=1");  
}
?>
