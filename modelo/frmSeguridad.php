<?php  
require "../modelo/ConexionBaseDatos.php";



$objConexion = Conectarse();
?>  

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Seguridad</title>
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
                <p><img src="../vista/Imagenes/logo-implementos.png" width="50" align="center" valign="middle" height="35" alt="50"/>Implementos de Seguridad</p>
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
                <form id="form2" name="form2" method="post" action="../controlador/validarSeguridad.php">
            <table width="700" height="220" cellpadding="0" cellspacing="4">
              <tbody>
                <tr></tr>
              </tbody>
              <tbody>
                <tr>
                  <td width="60"></td>
                  <td width="85">&nbsp;</td>
                  <td width="172" align="right">&nbsp;</td>
                  <td width="46"><label for="nit"></label></td>
                  <td width="96" align="right">&nbsp;</td>
                  <td width="184"><label for="pnombre"></label></td>
                </tr>
                <tr>
                  <td width="60" height="35"><a href="modificarSeguridad.php" class="link1">
                    <div class="Aceptar"  >
                      <p>Lista</p>
                    </div>
                  </a></td>
                  <td></td>
                  <td align="right"><em><strong>Codigo:</strong></em></td>
                  <td ><label for="codigo"></label><input type="number" name="codigo" id="codigo"required /></td>
                  <td align="right"><em><strong>Nombre:</strong></em></td>
                  <td><input type="text" name="nombre" id="nombre" required /></td>
                </tr>
                <tr>
                  <td><a href="../vista/menuPrincipal.php" class="link1">
                    <div class="Aceptar">
                      <p>Salir</p>
                    </div>
                  </a></td>
                  <td>&nbsp;</td>
                  <td align="right"><em><strong>Descripcion:</strong></em></td>
                  <td align="left"><label for="descripcion">
                          <input type="text" name="descripcion" id="descripcion" required/>
                  </label></td>
                  <td align="right"><em><strong>Valor:</strong></em></td>
                  <td><label for="valor">
                    <input type="number_format" name="valor" id="valor" required>
                  </label></td>
                </tr>
                <tr>
                  <td></td>
                  <td>&nbsp;</td>
                  <td align="right">&nbsp;</td>
                  <td align="left"></td>
                  <td align="right">&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                    <td width="60"><a href="../vista/menuPrincipal.php" class="link1"></a></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td width="60" height="38">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><input type="submit" name="submit" id="submit" class="Aceptar" value="Aceptar" /></td>
                  <td align="right"><input type="reset" name="reset" id="reset" class="Cancelar" value="Cancelar" /></td>
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