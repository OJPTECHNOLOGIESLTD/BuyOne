php require('https://dannvtu.com.ng/mobile/assets/fpdf/fpdf.php'); $pdf=new FPDF(); $pdf->AddPage(); $pdf->SetFont('Arial','B',16); $pdf->Cell(40,10,'Hello World! '); $pdf->Output(); ?>