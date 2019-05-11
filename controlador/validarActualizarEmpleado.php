<?php
require "../modelo/ConexionBaseDatos.php";
extract ($_REQUEST);
$objConexion=Conectarse();

$sql="update empleados set  EmpIdentificacion='$_REQUEST[identificacion]',  EmpNombres = '$_REQUEST[nombres]',

EmpApellidos = '$_REQUEST[apellidos]', EmpDireccion = '$_REQUEST[direccion]', EmpTelefono = '$_REQUEST[telefono]',

 EmpEmail = '$_REQUEST[email]' where idEmpleado= '$_REQUEST[idEmpleado]' ";

$resultado=$objConexion->query($sql);

if ($resultado)
        header("location: ../modelo/ModificarEmpleado.php?x=1");  
else
	header("location: ../modelo/ModificarEmpleado.php?x=2"); 
?>
