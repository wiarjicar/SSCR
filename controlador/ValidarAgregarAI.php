<?php

require "../modelo/ConexionBaseDatos.php";
extract ($_REQUEST);

$objConexion=Conectarse();

$sql = "insert into actainicio (ActEmpleado, ActContrato, ActTipoC, ActFechaInicio) 
values ('$_REQUEST[empleadoss]' , '$_REQUEST[contrato]', '$_REQUEST[tipocontrato]', '$_REQUEST[fechainicio]')";



$resultado = $objConexion->query($sql);

if ($resultado)
	    header("location: ../modelo/modificarActaInicio.php?x=5");  
else
	    header("location: ../modelo/modificarActaInicio.php?x=6"); 
?>