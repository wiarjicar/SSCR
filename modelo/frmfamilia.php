<?php  //abrimos php
require "../modelo/ConexionBaseDatos.php";

extract ($_REQUEST);
if (!isset($_REQUEST['x']))
	$_REQUEST['x']=0;

$objConexion = Conectarse();
?>  

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Familia</title>
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
                <p><img src="../vista/Imagenes/logo-familia.png" width="50" align="center" valign="middle" height="35" alt="50"/>Residencia Familiar</p>
              </div></td>
              <td width="157" align="center" valign="middle"> <h2><em><strong>Usuario</strong></em><em><strong> Logueado</strong></em><strong></strong></h2>                </td>
              <td width="108" rowspan="2" align="center" valign="middle"><img src="../vista/Imagenes/logo-proveedor.png" width="105" align="center" valign="top" height="128" alt="50"/></td>
            </tr>
            <tr>
              <td height="24" align="center" valign="baseline">&nbsp;</td>
              <td>&nbsp;</td>
              <td> </td>
              <td>&nbsp;</td>
              </tr>
          </table>
                <form id="form2" name="form2" method="post" action="../controlador/validarFamilia.php">
                  <table width="700" height="220" cellpadding="0" cellspacing="4">
                  <tbody>
                    <tr></tr>
                  </tbody>
                  <tbody>
                    <tr></tr>
                  </tbody>
                  <tbody>
                    <tr>
                      <td width="60"><a href="../vista/menuPrincipal.php" class="link1">
                        <div class="Aceptar">
                          <p>Salir</p>
                        </div>
                      </a></td>
                      <td width="85">&nbsp;</td>
                      <td width="172" align="right"><em><strong>Tipo de Servicio:</strong></em></td>
                      <td><label for="servicio"></label>
        <select name="servicio" id="servicio" required style="width:150px">
          <option value="0">Seleccione</option>
          <option value="Aseo">Aseo</option>
          <option value="Seguridad">Seguridad</option>
          <option value="Mantenimiento">Mantenimiento</option>
      </select></td>
                      <td width="96" align="right">&nbsp;</td>
                      <td width="184"><label for="nombres"></label></td>
                    </tr>
                    <tr>
                      <td width="60" height="35"><a href="../vista/menuPrincipal.php" class="link1"></a></td>
                      <td></td>
                      <td align="right"><em><strong>Apartamento:</strong></em></td>
                      <td ><label for="apartamento"></label>
                        <input type="number" name="apartamento" id="apartamento"required /></td>
                      <td align="right"><em><strong>Nombres:</strong></em></td>
                      <td><label for="direccion">
                        <input type="text" name="nombres" id="nombres" required />
                      </label></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td align="right"><em><strong>Identificacion:</strong></em></td>
                      <td align="left"><label for="identificacion">
                        <input type="number" name="identificacion" id="identificacion " required/>
                      </label></td>
                      <td align="right"><em><strong>Email:</strong></em></td>
                      <td><label for="email">
                        <input type="email" name="email" id="email"required />
                      </label></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>&nbsp;</td>
                      <td align="right"><em><strong>Observacion:</strong></em></td>
                      <td align="left"><input type="text" name="observacion" id="observacion"required /></td>
                      <td align="right"><em><strong>Telefono:</strong></em></td>
                      <td><input type="number" name="telefono" id="telefono " required /></td>
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
                      <td width="60" height="38"><a href="../vista/menuPrincipal.php" class="link1"></a></td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td><input type="submit" name="submit" id="submit" class="Aceptar" value="Aceptar" /></td>
                      <td align="right"><input type="reset" name="reset" id="reset" class="Cancelar" value="Cancelar" /></td>
                    </tr>
                  </tbody>
                  <tbody>
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
    <td bgcolor="#999999"><em><strong>Sistema de seguridad Conjunto Residencial 2019---------&gt;
      <?php

        
if ($_REQUEST['x']==1)
	echo 'Se Ha Actualizado Correctamente...  ' ; 
if ($_REQUEST['x']==2)
	echo 'Problemas al actualizar ...';	
if ($_REQUEST['x']==3)
	echo 'Se ha eliminado correctamente...';
if ($_REQUEST['x']==4)
	echo 'Problemas al eliminar ...';
if ($_REQUEST['x']==5)
	echo 'Se ha Agregado  correctamente...';
if ($_REQUEST['x']==6)
	echo 'Problemas por Agregar - por favor verificar...';
    
?>
    </strong></em></td>
  </tr>
</table>
<p>&nbsp;</p>

</body>
</html>
</body>
</html>