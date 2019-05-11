<?php
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
	header("location:index.php?x=2");
if (!isset($_REQUEST['pg']))
	$pg="pgInicial.php";
   
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> contratos</title>
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
          <table width="700" height="138" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="70" height="75">&nbsp;</td>
              <td width="88">&nbsp;</td>
              <td width="277"><div class="actini">
                <p><img src="../vista/Imagenes/logo-contratos.png" width="50" align="center" valign="middle" height="35" alt="50"/> Actualizar</p>
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
          <form id="form1" name="form1" method="post" action="../controlador/validarContrato.php">
            <table width="638" height="332" cellpadding="0" cellspacing="4">
              <tbody>
                <tr>
                  <td width="16">&nbsp;</td>
                  <td width="124">&nbsp;</td>
                  <td width="17">&nbsp;</td>
                  <td colspan="2" rowspan="5" align="center"><div id="divContenido">
        <?php include $pg; ?>
      </div></td>
                  <td width="14">&nbsp;</td>
                </tr>
                <tr>
                  <td height="35">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td height="36">&nbsp;</td>
                  <td><a href="modificarContrato.php" class="link1">
                    <div class="Aceptar">
                      <p>Modificar</p>
                    </div>
                  </a></td>
                  <td>&nbsp;</td>
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
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td height="133">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td height="38">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td width="205"><input name="submit" type="submit" class="Aceptar" id="submit" value="Aceptar" /></td>
                  <td width="232" align="right"><input name="reset" type="reset" class="Cancelar" id="reset" value="Cancelar" /></td>
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