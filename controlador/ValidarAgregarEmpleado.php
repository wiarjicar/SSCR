<?php
//Se reciben los datos del formulario
require "../modelo/ConexionBaseDatos.php";
extract ($_REQUEST);

$objConexion=Conectarse();

$sql = "insert into empleados (EmpIdentificacion,EmpNombres, EmpApellidos, EmpDireccion, EmpTelefono, EmpEmail) 
values ('$_REQUEST[identificacion]' , '$_REQUEST[nombres]', '$_REQUEST[apellidos]', '$_REQUEST[direccion]'
,'$_REQUEST[telefono]','$_REQUEST[email]')";

$resultado = $objConexion->query($sql);

if ($resultado)
        header("location: ../modelo/ModificarEmpleado.php?x=5");  
else
	header("location: ../modelo/ModificarEmpleado.php?x=6"); 
?>