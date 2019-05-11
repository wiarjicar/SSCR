<?php

	include '../Reportes/Plantilla.php';
	require "../modelo/ConexionBaseDatos.php";
	$objConexion=Conectarse();
	$sql = "SELECT  f.idFamilia, f.FamNombre, f.FamIdentificacion, f.FamEmail, f.FamTelefono, f.FamTservicio,f.FamApartamento, f.FamObservacion from familia f";
        
	$resultado = $objConexion->query($sql);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->Cell(190,10,'Servicios Solicitados',1,1,'C');
	$pdf->SetFillColor(200,200,200,200);
	$pdf->SetFont('Arial','B',9);
        
        $pdf->Cell(10,6,'ID',1,0,'C',1);
        $pdf->Cell(70,6,'Datos',1,0,'C',1);
	$pdf->Cell(80,6,'Observacion',1,0,'C',1);
	$pdf->Cell(30,6,'Tipo de Servicio',1,1,'C',1);
	
        
        
        
	
	$pdf->SetFont('Arial','',8);
	
	while($row = $resultado->fetch_assoc())
	{
                $pdf->Cell(10,10,$row['idFamilia'],1,0,'C');	
		$pdf->Cell(70,10,utf8_decode($row['FamIdentificacion']." - ".$row['FamNombre']." Apartamento: ".$row['FamApartamento']),1,0,'C');
                $pdf->Cell(80,10,utf8_decode($row['FamObservacion']." - ".$row['FamEmail']." TEL: ".$row['FamTelefono']),1,0,'C');
                $pdf->Cell(30,10,utf8_decode($row['FamTservicio']),1,1,'C');
               
                
	}
	$pdf->Output();
?>

