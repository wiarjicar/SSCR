<?php  //abrimos php
require "../modelo/ConexionBaseDatos.php";



$objConexion = Conectarse();
?>  

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Empleado</title>
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
                <p><img src="../vista/Imagenes/logo-empleado.png" width="50" align="center" valign="middle" height="35" alt="50"/>Empleados</p>
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
                <form id="form2" name="form2" method="post" action="../controlador/validarAgregarEmpleado.php">
            <table width="700" height="220" cellpadding="0" cellspacing="4">
              <tbody>
                <tr></tr>
              </tbody>
              <tbody>
                <tr>
                  <td width="60"></td>
                  <td width="85">&nbsp;</td>
                  <td width="172" align="right"><em><strong>Apellidos:</strong></em></td>
                  <td width="46"><label for="apellidos"></label><input type="text" name="apellidos" id="apellidos " required /></td>
                  <td width="96" align="right"><em><strong>Nombres:</strong></em></td>
                  <td width="184"><label for="nombres"></label><input type="text" name="nombres" id="nombres" required></td>
                </tr>
                <tr>
                  <td width="60" height="35"><a href="ModificarEmpleado.php" class="link1">
                    <div class="Aceptar"  >
                      <p>Modificar</p>
                    </div>
                  </a></td>
                  <td></td>
                  <td align="right"><em><strong>Email:</strong></em></td>
                  <td ><label for="email"></label><input type="email" name="email" id="email "required /></td>
                  <td align="right"><em><strong>Direccion:</strong></em></td>
                  <td><label for="direccion"></label><input type="text" name="direccion" id="direccion "required></td>
                </tr>
                <tr>
                  <td><a href="../vista/menuPrincipal.php" class="link1">
                    <div class="Aceptar">
                      <p>Salir</p>
                    </div>
                  </a></td>
                  <td>&nbsp;</td>
                  <td align="right"><em><strong>Identificacion:</strong></em></td>
                  <td align="left"><label for="identificacion">
                          <input type="number" name="identificacion" id="identificacion " required/>
                  </label></td>
                  <td align="right"><em><strong>Telefono:</strong></em></td>
                  <td><label for="telefono"></label>
                      <input type="number" name="telefono" id="telefono " required></td>
                </tr>
                <tr>
                  <td> </td>
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