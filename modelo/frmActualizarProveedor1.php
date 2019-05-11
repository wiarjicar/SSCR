<?php
require "../modelo/ConexionBaseDatos.php";



$objConexion = Conectarse();


$sql="select * from proveedor where idProveedor = '$_REQUEST[idProveedor]'";
$resultadoProveedor = $objConexion->query($sql);

$proveedor = $resultadoProveedor->fetch_object();



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
<form id="form1" name="form1" method="post" action="../controlador/validarActualizarProveedor.php">
  <table width="42%" border="0" align="center">
    <tr>
      <td colspan="2" align="center" bgcolor="#0902A3">ACTUALIZAR PROVEEDOR</td>
    </tr>
    <tr>
      <td width="37%" align="right" bgcolor="#EAEAEA">Nit:</td>
      <td width="63%"><label for="nit"></label>
      
      <input name="nit" type="text" id="nit" value="<?php echo $proveedor->proNit ?>" size="40" />
      
      </td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EAEAEA">Empresa:</td>
      <td><label for="pnombre"></label>
      <input name="pnombre" type="text" id="pnombre" value="<?php echo $proveedor->proNombre?>" size="40" /></td>
    </tr>
      <tr>
      <td align="right" bgcolor="#EAEAEA">Direccion:</td>
      <td><label for="apellidos"></label>
      <input name="pdireccion" type="text" id="pdireccion" value="<?php echo $proveedor->proDireccion?>" size="40" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EAEAEA">Telefono:</td>
      <td><label for="ptelefono"></label>
      <input name="ptelefono" type="text" id="ptelefono" style="width:270px" value="<?php echo $proveedor->proTelefono ?>" size="40" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EAEAEA">Email:</td>
      <td><label for="pemail"></label>
      <input name="pemail" type="email" id="pemail" value="<?php echo $proveedor->proEmail?>" size="40" /></td>
    </tr>
      <tr>
      <td align="right" bgcolor="#EAEAEA">Descripcion:</td>
      <td><label for="pdescripcion"></label>
      <input name="pdescripcion" type="pdescripcion" id="correo" value="<?php echo $proveedor->proDescripcion?>" size="40" /></td>
    </tr>
    
    
    <tr>
      <td colspan="2" align="center" bgcolor="#0902A3"><input type="submit" name="button" id="button" value="Enviar" /></td>
    </tr>
  </table>
  
  <input name="idProveedor" type="hidden" value="<?php echo $_REQUEST['idProveedor'] ?>" />
  
  
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