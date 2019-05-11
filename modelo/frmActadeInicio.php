<?php
require "../modelo/ConexionBaseDatos.php";
$objConexion = Conectarse();

$sql="Select  EmpIdentificacion, EmpNombres, EmpApellidos from empleados  ";
$empleados=$objConexion->query($sql);

$sql="Select  ConCodigo, ConNombre from contrato";
$contratos=$objConexion->query($sql);

$sql="select  TipCodigo, TipTcontrato from tipocontrato";
$tipocontratos=$objConexion->query($sql);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link href="../vista/css/stylesAct-ini.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="442" align="center" valign="top" bgcolor="#0000CC"><table width="800" height="522" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="31" height="32">&nbsp;</td>
        <td width="738">&nbsp;</td>
        <td width="31">&nbsp;</td>
      </tr>
      <tr>
        <td rowspan="2">&nbsp;</td>
        <td rowspan="2" align="center" valign="top"><div class="act-ini">
          <table width="700" height="107" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="70" height="75">&nbsp;</td>
              <td width="88">&nbsp;</td>
              <td width="277"><div class="actini">
                <p><img src="../vista/Imagenes/logo-actainicio.png" width="50" align="center" valign="middle" height="35" alt="50"/>Acta de inicio</p>
              </div></td>
              <td width="157" align="center" valign="middle"> <h2><em><strong>Usuario</strong></em><em><strong> Logueado</strong></em><strong></strong></h2>                </td>
              <td width="108" rowspan="2" align="center" valign="middle"><img src="../vista/Imagenes/logo-proveedor.png" width="105" align="center" valign="top" height="128" alt="50"/></td>
            </tr>
            <tr>
              <td height="27" align="center" valign="baseline">&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              </tr>
          </table>
          
          <form id="form1" name="form1" method="post" action="../controlador/ValidarAgregarAI.php">
            <table width="638" height="220" cellpadding="0" cellspacing="4">
              <tbody>
                <tr>
                  <td width="33">&nbsp;</td>
                  <td width="124">&nbsp;</td>
                  <td width="95">&nbsp;</td>
                  <td align="right" width="124"><em><strong>Empleado:</strong></em></td>
                  <td colspan="7"><select name="empleadoss" id="empleadoss" style="width:300px">
        <option value="0">seleccione</option>
            <?php
             while ($empleado=$empleados->fetch_object())
             {
             ?>
         <option value="<?php echo $empleado->EmpIdentificacion;?>">
         <?php echo $empleado->EmpIdentificacion."-".$empleado->EmpNombres." ".$empleado->EmpApellidos;?>
          </option>
          <?php   
          }
          ?>
        </select></td>
                  <td width="49">&nbsp;</td>
                </tr>
                <tr>
                  <td height="35">&nbsp;</td>
                  <td></td>
                  <td>&nbsp;</td>
                  <td align="right"><em><strong>Codigo Contrato:</strong></em></td>
                  <td colspan="7"><select name="contrato" id="contrato" style="width:300px">
                    <option value="0">seleccione</option>
                    <?php
             while ($contrato=$contratos->fetch_object())
             {
             ?>
                    <option value="<?php echo $contrato->ConCodigo;?>"> 
                    <?php echo $contrato->ConCodigo."-".$contrato->ConNombre;?> </option>
                    <?php   
          }
          ?>
                  </select></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td height="36">&nbsp;</td>
                  <td><a href="modificarActaInicio.php" class="link1">
                    <div class="Aceptar">
                      <p>Modificar</p>
                    </div>
                  </a></td>
                  <td>&nbsp;</td>
                  <td align="right"><em><strong>Tipo Contrato:</strong></em></td>
                  <td colspan="7"><select name="tipocontrato" id="tipocontrato" style="width:300px">
                    <option value="0">seleccione</option>
                    <?php
             while ($tipocontrato=$tipocontratos->fetch_object())
             {
             ?>
                    <option value="<?php echo $tipocontrato->TipCodigo;?>"> 
                    <?php echo $tipocontrato->TipCodigo."-".$tipocontrato->TipTcontrato;?> </option>
                    <?php   
          }
          ?>
                  </select></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><a href="../vista/menuPrincipal.php" class="link1">
                    <div class="Aceptar">
                      <p>Salir</p>
                    </div>
                  </a></td>
                  <td>&nbsp;</td>
                  <td align="right"><em><strong>Fecha Inicio:</strong></em></td>
                  <td width="149" ><label for="fecha"></label><input type="date" name="fechainicio" id="fechainicio" /></td>
                  <td width="8">&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td height="38">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><input name="submit" type="submit" class="Aceptar" id="submit" value="Aceptar" /></td>
                  <td align="right"><input name="reset" type="reset" class="Cancelar" id="reset" value="Cancelar" /></td>
                </tr>
              </tbody>
            </table>
          </form>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
        </div></td>
        <td height="274">&nbsp;</td>
      </tr>
      
      <tr>
        <td height="54">&nbsp;</td>
      </tr>
      <tr>
        <td height="22">&nbsp;</td>
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