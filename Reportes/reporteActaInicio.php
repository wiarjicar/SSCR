<?php

	include '../Reportes/Plantilla.php';
	require "../modelo/ConexionBaseDatos.php";
	$objConexion=Conectarse();
	$sql = "SELECT  act.idActaInicio,    act.ActFechaInicio, e.EmpNombres, e.EmpApellidos, c.ConNombre, c.ConDescripcion, tc.TipTcontrato, tc.TipDescripcion 
        from actainicio act, empleados e, contrato c, tipocontrato tc where (act.ActEmpleado = e.EmpIdentificacion ) and 
        (act.ActContrato = c.ConCodigo) and (act.ActTipoC = tc.TipCodigo )";
        
	$resultado = $objConexion->query($sql);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->Cell(185,10,'Acta de Inicio',1,1,'C');
	$pdf->SetFillColor(200,200,200,200);
	$pdf->SetFont('Arial','B',9);
        
        $pdf->Cell(10,6,'ID',1,0,'C',1);
        $pdf->Cell(45,6,'Empleado',1,0,'C',1);
	$pdf->Cell(60,6,'Ocupacion',1,0,'C',1);
	$pdf->Cell(40,6,'Contrato',1,0,'C',1);
	$pdf->Cell(30,6,'Fecha Inicio',1,1,'C',1);
        
        
        
	
	$pdf->SetFont('Arial','',8);
	
	while($row = $resultado->fetch_assoc())
	{
                $pdf->Cell(10,10,$row['idActaInicio'],1,0,'C');	
		$pdf->Cell(45,10,utf8_decode($row['EmpNombres']." ".$row['EmpApellidos']),1,0,'C');
                $pdf->Cell(60,10,utf8_decode($row['ConNombre'].": ".$row['ConDescripcion']),1,0,'C');
                $pdf->Cell(40,10,utf8_decode($row['TipTcontrato'].": ".$row['TipDescripcion']),1,0,'C');
                $pdf->Cell(30,10,utf8_decode($row['ActFechaInicio']),1,1,'C');
                
	}
	$pdf->Output();
?>
