

<?php
require "../modelo/ConexionBaseDatos.php";
	
	
extract ($_REQUEST);
if (!isset($_REQUEST['x']))
	$_REQUEST['x']=0;

$objConexion=Conectarse();

$sql="select e.idEmpleado, e.EmpIdentificacion, e.EmpNombres, e.EmpApellidos, e.EmpDireccion, e.EmpEmail, e.EmpTelefono from empleados e ";

$resultado = $objConexion->query($sql);

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Proveedor</title>
</head>

<body><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="../vista/css/stylesfamilia.css" rel="stylesheet" type="text/css" />


<body>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="442" align="center" valign="top" bgcolor="#0000CC"><table width="800" height="560" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="31" height="32">&nbsp;</td>
        <td width="738">&nbsp;</td>
        <td width="31">&nbsp;</td>
      </tr>
      <tr>
        <td rowspan="2">&nbsp;</td>
        <td width="60" rowspan="2" align="center" valign="top"><div class="act-ini">
          <table width="700" height="138" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="70" height="75">&nbsp;</td>
              <td width="88">&nbsp;</td>
              <td width="277"><div class="actini">
                <p><img src="../vista/Imagenes/logo-proveedor.png" width="50" align="center" valign="middle" height="35" alt="50"/>Empleados</p>
              </div></td>
              <td width="157" align="center" valign="middle"> <h2><em><strong>Usuario</strong></em><em><strong> Logueado</strong></em><strong></strong></h2>                </td>
              <td width="108" rowspan="2" align="center" valign="middle"><img src="../vista/Imagenes/logo-proveedor.png" width="105" align="center" valign="top" height="128" alt="50"/></td>
            </tr>
            <tr>
              <td height="24" align="center" valign="baseline">&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              </tr>
          </table>
          <form id="form2" name="form2" method="post" action="../controlador/validarActualizarEmpleado.php">
            <table width="585" height="220" cellpadding="0" cellspacing="4">
              <tbody>
                </tbody>
              <tbody>
                <tr>
                  <td width="49">&nbsp;</td>
                  <td width="1">&nbsp;</td>
                  <td width="203" align="left"><a href="../Reportes/reporteEmpleado.php" class="link1" target="_blank" >Generar PDF</a></td>
                  <td width="76">&nbsp;</td>
                  <td></td>
                  <td width="51">&nbsp;</td>
                </tr>
                <tr>
                  <td width="49" height="35"><a href="frmAgregarEmpleado.php" class="link1">
                    <div class="Aceptar"  >
                      <p>Agregar</p>
                    </div>
                  </a></td>
                  <td></td>
                  <td colspan="4" rowspan="4" align="center" valign="top">
                   <table width="554" height="180" border="1" cellpadding="1" cellspacing="1">
                    <tbody>
                      <tr align="center" bgcolor="#0902A3">
                        <td width="174" align="center">Nombres</td>
                        <td width="59" align="center">Direccion</td>
                        <td width="68" align="center">Telefono</td>
                        <td width="127" align="center">Email</td>
                        <td width="45" align="center">Editar</td>
                        <td width="48" align="center">Eliminar</td>
                      </tr>
                          <?php
 
  
  while ($empleado = $resultado->fetch_object())
  {
	?>
                           <tr align="center" bgcolor="#FFFFFF">
                           <td> <?php  echo $empleado->EmpNombres." ".$empleado->EmpApellidos  ?>     </td>
        <td> <?php  echo $empleado->EmpDireccion  ?> </td>
        <td><?php  echo $empleado->EmpTelefono  ?></td>
        <td><?php  echo $empleado->EmpEmail  ?></td>
        
        
        <td align="center"><a href="../modelo/frmActualizarEmpleado1.php?idEmpleado=<?php echo $empleado->idEmpleado?>"><img src="../vista/Imagenes/actualizar.jpg" 
        
        width="22" height="23" /></a></td>
        
        
        <td align="center"><a href="../controlador/eliminarEmpleado.php?idEmpleado=<?php echo $empleado->idEmpleado?>"><img src="../vista/Imagenes/eliminar1.png" 
        
        width="29" height="24" /></a></td>
                        
                      </tr>
   <?php
  }
  ?>
                    </tbody>
                  </table>
                  <?php

        
if ($_REQUEST['x']==1)
	echo 'Se Ha Actualizado Correctamente...  ' ; 
if ($_REQUEST['x']==2)
	echo 'Problemas al actualizar el Empleado...';	
if ($_REQUEST['x']==3)
	echo 'Se ha eliminado el Empleado correctamente...';
if ($_REQUEST['x']==4)
	echo 'Problemas al eliminar el Empleado...';
if ($_REQUEST['x']==5)
	echo 'Se ha Agregado el Empleado correctamente...';
if ($_REQUEST['x']==6)
	echo 'Problemas por Agregar el Empleado por favor verificar...';
    
?>
                  </td>
                  </tr>
                <tr>
                  <td><a href="../vista/menuPrincipal.php" class="link1">
                    <div class="Aceptar">
                      <p>Salir</p>
                    </div>
                  </a></td>
                  <td>&nbsp;</td>
                  </tr>
                <tr>
                  <td> </td>
                  <td>&nbsp;</td>
                  </tr>
                <tr>
                  <td width="49"><a href="menu.html" class="link1"></a></td>
                  <td>&nbsp;</td>
                  </tr>
                <tr>
                  <td width="49" height="38">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td align="right">&nbsp;</td>
                </tr>
              </tbody>
              <tbody>
              </tbody>
            </table>
          </form>
          <table width="638" height="220" cellpadding="0" cellspacing="4">
            <tbody>
            </tbody>
          </table>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
        </div></td>
        <td height="274">&nbsp;</td>
      </tr>
      
      <tr>
        <td height="220">&nbsp;</td>
      </tr>
      <tr>
        <td height="20">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#999999"><em><strong>Sistema de seguridad Conjunto Residencial 2019</strong></em></td>
  </tr>
</table>
<p>&nbsp;</p>

</body>
</html>
</body>
</html>