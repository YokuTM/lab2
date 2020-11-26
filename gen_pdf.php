<?php
require_once'connect.php';
require_once 'tfpdf/tfpdf.php';
	$pdf = new tFPDF();
$pdf->AddPage();

$pdf->AddFont('PDFFont','','arial.ttf',true);

$pdf->SetFont('PDFFont','',12);
$pdf->Cell(80);
$txt ='Зачетная ведомость';

$pdf->Cell(41,10,$txt,1,0,'C');
$pdf->Ln(20);

$pdf->SetFont('PDFFont','',6);

// Запрос на выборку сведений о пользователях
$result = mysqli_query($mysql,"SELECT zach.date, zach.score,
student.full_name as full_name,
student.faculty as faculty,
student.groupa as groupa,
student.num_report_card as num_report_card,
sub.name as sub_name,
sub.fio as sub_fio
FROM zach
LEFT JOIN student ON zach.id_user=student.id_user
LEFT JOIN sub ON zach.id_sub=sub.id_sub"
);

$w = array(4,20,30,23);
$h = 10;
$pdf->SetFillColor(200,200,200);
$pdf->Cell($w[0],$h,'П/П','LRTB','0','C',true);
$pdf->Cell($w[2],$h,'ФИО СТУДЕНТА','LRTB','0','C',true);
$pdf->Cell($w[1],$h,'ФАКУЛЬТЕТ','LRTB','0','C',true);
$pdf->Cell($w[1],$h,'ГРУППА','LRTB','0','C',true);
$pdf->Cell($w[3],$h,'НОМЕР ЗАЧЕТКИ','LRTB','0','C',true);
$pdf->Cell($w[3],$h,'ДАЧА СДАЧИ ЗАЧЕТА','LRTB','0','C',true);
$pdf->Cell($w[2],$h,'НАЗВАНИЕ ПРЕДМЕТА','LRTB','0','C',true);
$pdf->Cell($w[1],$h,'ОЦЕНКА','LRTB','0','C',true);
$pdf->Cell($w[2],$h,'ФИО ПРЕПОДАВАТЕЛЯ','LRTB','0','C',true);

$pdf->Ln();

if ($result){
$counter = 1;
// Для каждой строки из запроса
while ($row = $result->fetch_array()){
$full_name = $row['full_name'];
$faculty = $row['faculty'];
$groupa = $row['groupa'];

$num_report_card = $row['num_report_card'];
$date = $row['date'];

$sub_name = $row['sub_name'];
$score = $row['score'];
$sub_fio = $row['sub_fio'];

//
$pdf->Cell($w[0],$h,$counter,'LRTB','0','C');

$pdf->Cell($w[2],$h,$full_name,'RTB','0','C');
$pdf->Cell($w[1],$h,$faculty,'RTB','0','C');

$pdf->Cell($w[1],$h,$groupa,'RTB','0','C');
$pdf->Cell($w[3],$h,$num_report_card,'RTB','0','C');
$pdf->Cell($w[3],$h,$date,'RTB','0','C');
$pdf->Cell($w[2],$h,$sub_name,'RTB','0','C');
$pdf->Cell($w[1],$h,$score,'RTB','0','C');
$pdf->Cell($w[2],$h,$sub_fio,'RTB','0','C');
$pdf->Ln();


$counter++;
}
}
$file_data = $pdf->Output("S");
fopen("Vedom.pdf","w+");
file_put_contents("Vedom.pda",$file_date);
header("Location:Vedom.pdf")
?>
