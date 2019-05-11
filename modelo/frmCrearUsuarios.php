<?php
require "../modelo/ConexionBaseDatos.php";


	
extract ($_REQUEST);
if (!isset($_REQUEST['x']))
	$_REQUEST['x']=0;



$objConexion=Conectarse();

$sql="select u.usuLogin, u.usuTipo, u.idUsuario  from usuarios u";

$resultado = $objConexion->query($sql);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tipos de contratos</title>
<link href="../vista/css/stylesAct-ini.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="442" align="center" valign="top" bgcolor="#0000CC"><table width="800" height="925" border="0" align="center" cellpadding="0" cellspacing="0">
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
                <p><img src="../vista/Imagenes/logo-Tcontrato.png" width="50" align="center" valign="middle" height="35" alt="50"/>Crear o Eliminar Usuarios</p>
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
                <form id="form1" name="form1" method="post" action="../controlador/validarCrearUsuarios.php">
              
              <table width="638" height="586" cellpadding="0" cellspacing="4">
                  <tbody>
                    <tr>
                      <td width="33">&nbsp;</td>
                      <td width="112">&nbsp;</td>
                      <td width="95">&nbsp;</td>
                      <td width="124" align="right">&nbsp;</td>
                      <td width="195">&nbsp;</td>
                      <td width="49">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="35">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td align="right"><em><strong>Usuario:</strong></em></td>
                      <td><label for="codigo"></label>
                        <input name="usuario" type="text" id="usuario" required="required" size="40" style="width:270px" /></td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="36">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td align="right"><em><strong>Rol:</strong></em></td>
                      <td><label for="Tcontrato"></label>
                        <select name="Tipo" id="Tipo" required="required" style="width:270px">
                          
                          <option value="Usuario">Cliente</option>
                          <option value="Seguridad">Seguridad</option>
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
                      <td align="right"><em><strong>Password:</strong></em></td>
                      <td><label for="Descripcion"></label>
                        <input name="contraseña" type="password" id="contraseña" required="required" size="40" style="width:270px" /></td>
                      <td>&nbsp;</td>
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
				  </form> <tr>
                      <td height="38">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td align="right">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="38">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td colspan="3" rowspan="3"><table width="328" height="90" border="1" cellpadding="1" cellspacing="1">
                        <tbody>
                          <tr align="center" bgcolor="#0902A3">
                            <td width="110" height="53" align="center"> Usuario</td>
                            <td width="133" align="center">Tipo de Usuario</td>
                            <td width="67" align="center">Eliminar</td>
                          </tr>
                          <?php
 
  
  while ($usuario = $resultado->fetch_object())
  {
	?>
                          <tr align="center" bgcolor="#FFFFFF">
                            <td height="32"><?php  echo $usuario->usuLogin  ?></td>
                            <td><?php  echo $usuario->usuTipo ?></td>
                            <td align="center"><a href="../controlador/eliminarUsuario.php?idUsuario=<?php echo $usuario->idUsuario?>"><img src="../vista/Imagenes/eliminar1.png" 
        
        width="29" height="24" /></a></td>
                          </tr>
                          <?php
  }
  ?>
                        </tbody>
                      </table></td>
                    </tr>
                    <tr>
                      <td height="38">&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="120">&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="75">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td align="right">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="38">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td align="right">&nbsp;</td>
                    </tr>
                  </tbody>
              </table>
              <p>&nbsp;</p>
          <p>&nbsp;</p>
        </div></td>
        <td height="274">&nbsp;</td>
      </tr>
      
      <tr>
        <td height="597">&nbsp;</td>
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