<?php

require('fpdf.php');

class PDF extends FPDF
{
	function Header()
	{
		global $title;

		$this->Image('http://static.freepsdfiles.net/uploads/2017/04/f-letter-logo_1103-624.jpg',10,6,30);
		
		$this->SetFont('Arial','B',15);
		
		$w = $this->GetStringWidth($title)+6;
		
		$this->SetX((210-$w)/2);

		$this->SetDrawColor(221,221,221);
		$this->SetFillColor(250,250,250);
		$this->SetTextColor(220,50,50);
		
		$this->SetLineWidth(0.5);
		
		$this->Cell($w,9,$title,1,1,'C',true);
		
		$this->Ln(10);
	}

	function Signature($imgSignature='',$contractCount)
	{
		$this->Ln(10);
		$this->Cell(0,5,"Signature : ",0,1);
		if ($contractCount == 0) {
			$this->Image($imgSignature,35,150,30);
		} else {
			$this->Image($imgSignature,35,150+($contractCount * 5),30);			
		}
		$this->Cell(0,15,"Date : ".date('d/m/Y H:i:s A',strtotime('-19 hours')),0,1);
	}

	function Footer()
	{				
		$this->SetY(-15);
		
		$this->SetFont('Arial','I',8);
		
		$this->SetTextColor(128);
		
		$this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
	}

	function ChapterTitle($num, $label)
	{

		$this->SetFont('Arial','',12);
		
		$this->SetFillColor(200,220,255);
		
		$this->Cell(0,6,"Part $num : $label",0,1,'L',true);
		
		$this->Ln(4);
	}

	function PrintChapter($num1, $title1, $file1, $num2, $title2, $file2, $num3, $title3, $file3)
	{
		$this->AddPage();

		$this->ChapterTitle($num1,$title1);
		$this->ChapterBody($file1);

		$this->Ln();

		$this->ChapterTitle($num2,$title2);
		$this->ChapterBody($file2);

		$this->Ln();

		$this->ChapterTitle($num3,$title3);
		$this->ChapterBody($file3);
	}

	function FormatChapter($data,$filename){
		$this->AddPage();

		$this->ChapterTitle(1,'Basic Information');
		$this->SetFont('Times','',12);		
		$this->Cell(0,5,"Full Name : ".$data['full_name'],0,1);			
		$this->Cell(0,5,"Date of Birth : ".$data['date_of_birth'],0,1);			
		$this->Cell(0,5,"Email : ".$data['email'],0,1);			
		$this->Cell(0,5,"Phone : ".$data['phone'],0,1);	

		$this->Ln();

		$this->ChapterTitle(2,'Address');
		$this->Cell(0,5,"Address 1 : ".$data['address_1'],0,1);		
		$this->Cell(0,5,"Address 2 : ".$data['address_2'],0,1);		
		$this->Cell(0,5,"Country : ".$data['country'],0,1);
		$this->Cell(0,5,"State : ".$data['state'],0,1);
		$this->Cell(0,5,"City : ".$data['city'],0,1);
		$this->Cell(0,5,"Zip Code : ".$data['zip_code'],0,1);

		$this->Ln();

		$this->ChapterTitle(3,'Other Info');
		$this->Cell(0,5,"Insurance Number : ".$data['insurance_number'],0,1);
		$this->Cell(0,5,"National Producer Number : ".$data['national_producer_number'],0,1);
		
		$this->Ln();
		
		$this->ChapterTitle(4,'Contract Request List');
		if (isset($data['contracts'])) {
			foreach($data['contracts'] as $contract){
				$this->Cell(0,5,$contract,0,1);
			}
			$this->SetFont('','I');		
			$this->Signature($filename,count($data['contracts']));			
		} else {
			$this->SetFont('','I');
			$this->Signature($filename,0);
		}
	}
}

if (isset($_POST['submitForm'])) {
	if ($_POST['submitForm']) {

		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["signature_file"]["name"]);
		move_uploaded_file($_FILES["signature_file"]["tmp_name"], $target_file);		

		$pdf = new PDF();
		$title = 'Request Contracting';
		$pdf->SetTitle($title);
		$pdf->SetAuthor('JM Maguigz');
		$pdf->FormatChapter($_POST,$target_file);
		$pdf->Output();		
	}
}

?>
