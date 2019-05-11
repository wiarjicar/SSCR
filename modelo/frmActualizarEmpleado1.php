<?php
require "../modelo/ConexionBaseDatos.php";



$objConexion = Conectarse();


$sql="select * from empleados where idEmpleado = '$_REQUEST[idEmpleado]'";
$resultadoEmpleado = $objConexion->query($sql);

$empleado = $resultadoEmpleado->fetch_object();



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<title>Formulario Actualizar Contrato</title>
</head>

<body>
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
                <p><img src="../vista/Imagenes/logo-contratos.png" width="50" align="center" valign="middle" height="35" alt="50"/>ACTUALIZACIONES</p>
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
          
            <table width="585" height="230" cellpadding="0" cellspacing="4">
              <tbody>
                </tbody>
              <tbody>
                <tr>
                  <td width="49">&nbsp;</td>
                  <td width="1">&nbsp;</td>
                  <td width="332" align="right">&nbsp;</td>
                  <td width="124">&nbsp;</td>
                  <td width="85"></td>
                  <td width="1">&nbsp;</td>
                </tr>
                <tr>
                  <td width="49" height="35">&nbsp;</td>
                  <td></td>
                  <td colspan="4" rowspan="4" align="center" valign="top">
<form id="form1" name="form1" method="post" action="../controlador/validarActualizarEmpleado.php">
  <table width="42%" border="0" align="center">
    <tr>
      <td colspan="2" align="center" bgcolor="#0902A3">ACTUALIZAR EMPLEADO</td>
    </tr>
    <tr>
      <td width="37%" align="right" bgcolor="#EAEAEA">Identificacion</td>
      <td width="63%"><label for="identificacion"></label>
      
      <input name="identificacion" type="text" id="identificacion" value="<?php echo $empleado->EmpIdentificacion ?>" size="40" />
      
      </td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EAEAEA">Nombres</td>
      <td><label for="nombres"></label>
      <input name="nombres" type="text" id="nombres" value="<?php echo $empleado->EmpNombres?>" size="40" /></td>
    </tr>
      <tr>
      <td align="right" bgcolor="#EAEAEA">Apellidos</td>
      <td><label for="apellidos"></label>
      <input name="apellidos" type="text" id="apellidos" value="<?php echo $empleado->EmpApellidos?>" size="40" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EAEAEA">Direccion</td>
      <td><label for="direccion"></label>
      <input name="direccion" type="text" id="direccion" style="width:270px" value="<?php echo $empleado->EmpDireccion ?>" size="40" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EAEAEA">Correo</td>
      <td><label for="email"></label>
      <input name="email" type="email" id="email" value="<?php echo $empleado->EmpEmail?>" size="40" /></td>
    </tr>
      <tr>
      <td align="right" bgcolor="#EAEAEA">Telefono</td>
      <td><label for="telefono"></label>
      <input name="telefono" type="telefono" id="correo" value="<?php echo $empleado->EmpTelefono?>" size="40" /></td>
    </tr>
    
    
    <tr>
      <td colspan="2" align="center" bgcolor="#0902A3"><input type="submit" name="button" id="button" value="Enviar" /></td>
    </tr>
  </table>
  
  <input name="idEmpleado" type="hidden" value="<?php echo $_REQUEST['idEmpleado'] ?>" />
  
  
</form>
                  </td>
                  </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  </tr>
                <tr>
                  <td></td>
                  <td>&nbsp;</td>
                  </tr>
                <tr>
                  <td width="49">&nbsp;</td>
                  <td>&nbsp;</td>
                  </tr>
                <tr>
                 
                  <td width="49" height="48">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td colspan="3">&nbsp;</td>
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
          <p></p>
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