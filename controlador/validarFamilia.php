<?php
//Se reciben los datos del formulario
require "../modelo/ConexionBaseDatos.php";
extract ($_REQUEST);

$objConexion=Conectarse();

$sql = "insert into familia (FamIdentificacion,FamNombre, FamEmail, FamTelefono, FamTservicio, FamObservacion, FamApartamento) 
values ('$_REQUEST[identificacion]' , '$_REQUEST[nombres]', '$_REQUEST[email]', '$_REQUEST[telefono]'
,'$_REQUEST[servicio]','$_REQUEST[observacion]','$_REQUEST[apartamento]')";

$resultado = $objConexion->query($sql);

if ($resultado)
        header("location: ../modelo/frmFamilia.php?x=5");  
else
	header("location: ../modelo/frmFamilia.php?x=6"); 
?>