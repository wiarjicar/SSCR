<?php

	include '../Reportes/Plantilla.php';
	require "../modelo/ConexionBaseDatos.php";
	$objConexion=Conectarse();
	$sql = "SELECT  s.idSeguridad, s.seCodigo, s.seNombre, s.seValor, s.seDescripcion from seguridad s";
	$resultado = $objConexion->query($sql);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->Cell(185,10,'Intendencia ',1,1,'C');
	$pdf->SetFillColor(200,200,200,200);
	$pdf->SetFont('Arial','B',9);
        
        $pdf->Cell(20,6,'ID',1,0,'C',1);
	$pdf->Cell(40,6,'Nombre',1,0,'C',1);
	$pdf->Cell(60,6,'Valor',1,0,'C',1);
	$pdf->Cell(65,6,'Descripcion',1,1,'C',1);
        
        
        
	
	$pdf->SetFont('Arial','',8);
	
	while($row = $resultado->fetch_assoc())
	{
                $pdf->Cell(20,10,$row['idSeguridad'],1,0,'C');	
		$pdf->Cell(40,10,utf8_decode($row['seNombre']),1,0,'C');
                $pdf->Cell(60,10,utf8_decode($row['seValor']." $"),1,0,'C');
                $pdf->Cell(65,10,utf8_decode($row['seDescripcion']),1,1,'C');
                
	}
	$pdf->Output();
?>
