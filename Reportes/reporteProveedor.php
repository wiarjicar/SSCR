<?php

	include '../Reportes/Plantilla.php';
	require "../modelo/ConexionBaseDatos.php";
	$objConexion=Conectarse();
	$sql = "SELECT  p.proNit, p.proNombre, p.proDescripcion, p.proDireccion, p.proEmail, p.proTelefono from proveedor p ";
	$resultado = $objConexion->query($sql);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->Cell(185,10,'Proveedores ',1,1,'C');
	$pdf->SetFillColor(200,200,200,200);
	$pdf->SetFont('Arial','B',9);
        
        $pdf->Cell(15,6,'Nit',1,0,'C',1);
	$pdf->Cell(25,6,'Empresa',1,0,'C',1);
	$pdf->Cell(35,6,'Direccion',1,0,'C',1);
	$pdf->Cell(40,6,'Email',1,0,'C',1);
        $pdf->Cell(20,6,'Telefono',1,0,'C',1);
        $pdf->Cell(50,6,'Descripcion',1,1,'C',1);
        
        
	
	$pdf->SetFont('Arial','',8);
	
	while($row = $resultado->fetch_assoc())
	{
                $pdf->Cell(15,10,utf8_decode($row['proNit']),1,0,'C');	
		$pdf->Cell(25,10,utf8_decode($row['proNombre']),1,0,'C');
                $pdf->Cell(35,10,utf8_decode($row['proDireccion']),1,0,'C');
                $pdf->Cell(40,10,utf8_decode($row['proEmail']),1,0,'C');
                $pdf->Cell(20,10,utf8_decode($row['proTelefono']),1,0,'C');
                $pdf->Cell(50,10,utf8_decode($row['proDescripcion']),1,1,'C');
	}
	$pdf->Output();
?>
