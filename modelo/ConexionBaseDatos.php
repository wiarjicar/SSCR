<?php
function Conectarse()
{
	$Conexion=new MySQLi("localhost","root","","sscr_adsi");
	
	if ($Conexion->connect_errno) 
		echo "Problemas en la Conexion ". $Conexion->connect_error;
	else
		return $Conexion;
}

?>

