<?php

	include '../Reportes/Plantilla.php';
	require "../modelo/ConexionBaseDatos.php";
	$objConexion=Conectarse();
	$sql = "SELECT e.idEmpleado, e.EmpIdentificacion, e.EmpNombres, e.EmpApellidos, e.EmpDireccion, e.EmpEmail, e.EmpTelefono from empleados e ";
	$resultado = $objConexion->query($sql);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->Cell(181,10,'Empleados ',1,1,'C');
	$pdf->SetFillColor(200,200,200,200);
	$pdf->SetFont('Arial','B',9);
        
	$pdf->Cell(6,6,'ID',1,0,'C',1);
	$pdf->Cell(25,6,'Identificacion',1,0,'C',1);
	$pdf->Cell(30,6,'Nombres',1,0,'C',1);
        $pdf->Cell(30,6,'Apellidos',1,0,'C',1);
        $pdf->Cell(30,6,'Direccion',1,0,'C',1);
        $pdf->Cell(40,6,'Email',1,0,'C',1);
        $pdf->Cell(20,6,'Telefono',1,1,'C',1);
        
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
                $pdf->Cell(6,6,$row['idEmpleado'],1,0,'C');
		$pdf->Cell(25,6,utf8_decode($row['EmpIdentificacion']),1,0,'C');		
		$pdf->Cell(30,6,utf8_decode($row['EmpNombres']),1,0,'C');
                $pdf->Cell(30,6,utf8_decode($row['EmpApellidos']),1,0,'C');
                $pdf->Cell(30,6,utf8_decode($row['EmpDireccion']),1,0,'C');
                $pdf->Cell(40,6,utf8_decode($row['EmpEmail']),1,0,'C');
                $pdf->Cell(20,6,utf8_decode($row['EmpTelefono']),1,1,'C');
	}
	$pdf->Output();
?>