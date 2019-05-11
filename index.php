<?php
extract($_REQUEST);
if (!isset($_REQUEST['x']))
	$x=0;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SSRC</title>
<link href="vista/css/stylesAct-ini.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action="controlador/validarInicioSesion.php">    
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
              <td width="68" height="75">&nbsp;</td>
              <td width="86">&nbsp;</td>
              <td width="387" align="center"><div class="actini">
                <p><em><strong>Ingreso al Sistema</strong></em></p>
              </div></td>
              <td width="52" align="center" valign="middle"> <h2>&nbsp;</h2></td>
              <td width="107" rowspan="2" align="center" valign="middle">&nbsp;</td>
            </tr>
            <tr>
              <td height="24" align="center" valign="baseline">&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              </tr>
          </table>
          <form action="" method="GET" >
            <table width="638" height="220" cellpadding="0" cellspacing="4">
              <tbody>
                <tr>
                  <td width="33">&nbsp;</td>
                  <td width="112">&nbsp;</td>
                  <td width="95">&nbsp;</td>
                  <td width="124">&nbsp;</td>
                  <td width="195">&nbsp;</td>
                  <td width="49">&nbsp;</td>
                </tr>
                <tr>
                  <td height="35">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td align="right"><em><strong>Usuario:</strong></em></td>
                  
                  <td align="right"><label for="login"></label><input type="text" name="login" id="login" required  /></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td height="36">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td align="right"><em><strong>Contraseña:</strong></em></td>
                  
                  <td align="right"><label for="password"></label><input type="password" name="password" id="pass" required /></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td align="right">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><input type="submit" class="Aceptar"  value="Iniciar Sesion" /></td>
                  <td align="right"><input type="reset" class="Cancelar"  value="Cancelar" /></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td height="38">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td align="right">&nbsp;</td>
                </tr>
                    <?php

if ($x==1)
	echo "<br><p align='center'>  Usuario no registrado con los datos ingresados, vuelva a intentar";
if ($x==2)
	echo "<br><p align='center'> Deben Iniciar Sesión para poder ingresar a la Aplicación";
if ($x==3)
	echo "<br><p align='center'> El Usuario ha cerrado la Sesión";
?>
                  
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
</form>

</body>
</html>
