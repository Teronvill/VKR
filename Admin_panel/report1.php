


<?php

$selectR = ($_POST['selectR']);
$po_date = ($_POST['po_date']);
$s_date = ($_POST['s_date']);

$host = '127.0.0.1';  // Хост, у нас все локально
$user = 'root';    // Имя созданного вами пользователя
$pass = ''; // Установленный вами пароль пользователю
$db_name = 'tpyug';   // Имя базы данных

$mysqli = new mysqli($host, $user, $pass, $db_name);
require('fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->AddFont('Roboto-Black','','robotoblack.php');
$pdf->AddFont('Roboto-Regular','','RobotoRegular.php');

// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}
//сохранение данных
$result=$mysqli->query("UPDATE rep SET otchet='$selectR', s_date='$s_date', po_date='$po_date' WHERE id='1'");


//выборка сохраненных данных
$selectD=mysqli_query($mysqli, "SELECT  `otchet`, `s_date`, `po_date` FROM `rep` WHERE id='1'");

while($row=$selectD->fetch_array(MYSQLI_ASSOC)) {
    $otchet=$row['otchet'];
    $sd=$row['s_date'];
    $pd=$row['po_date'];
    
}

$ot=date_parse($sd);
$po=date_parse($pd);

//выборка от и до
if ($otchet=='Zakazy')    {
$sql =mysqli_query($mysqli, "SELECT  `orders`.`id`,`orders`.`Date`,`orders`.`status`, `clients`.`name` FROM `orders`,`clients` WHERE `Date`>'$sd' and `Date` <'$pd' and `clients`.`id`=`orders`.`id_client` GROUP BY `orders`.`id`");
//Отчёт по заказам
$pdf->SetFont('Roboto-Black','',14);
$pdf->Image('images/logo1.png',10,6,30);
$date=date('d-m-Y');
$pdf->Cell(52);
$pdf->Cell(90,10, iconv('UTF-8', 'windows-1251', 'Отчёт по заказам предприятия'),1,0,'C');
$pdf->SetFont('Roboto-Black','',11);
$pdf->Cell(20,10, iconv('UTF-8', 'windows-1251', '            От '.$date),0,1,'C');
$pdf->Cell(65);
$pdf->Cell(65,10, iconv('UTF-8', 'windows-1251', 'За период с '.$ot['day'].'-'.$ot['month'].'-'.$ot['year'].' По '.$po['day'].'-'.$po['month'].'-'.$po['year']),0,0,'C');
$pdf->Ln(20);
$pdf->Cell(48,12,iconv('UTF-8', 'windows-1251', 'ID заказа'),1);
$pdf->Cell(48,12,iconv('UTF-8', 'windows-1251', 'Дата заказа'),1);
$pdf->Cell(48,12,iconv('UTF-8', 'windows-1251', 'Статус'),1);
$pdf->Cell(48,12,iconv('UTF-8', 'windows-1251', 'Клиент'),1);
$pdf->SetFont('Roboto-Regular','',10);

foreach($sql as $row) {	
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(48,12,iconv('UTF-8', 'windows-1251', $column),1);    
}
}
else if ($otchet=='Prodagy') {
    $sql =mysqli_query($mysqli, "SELECT `nomenclature`.`nomenclature`  , SUM(`cart`.`number`), SUM(`nomenclature`.`price`)*SUM(`cart`.`number`) FROM `cart`, `nomenclature` WHERE `nomenclature`.`id_nomenclature`=`cart`.`id_nomenclature` GROUP BY `nomenclature`");
    //Отчёт по продажам
    $pdf->SetFont('Roboto-Black','',14);
$pdf->Image('images/logo1.png',10,6,30);
$date=date('d-m-Y');
$pdf->Cell(48);
$pdf->Cell(90,10, iconv('UTF-8', 'windows-1251', 'Отчёт по продажам номенклатуры'),1,0,'C');
$pdf->SetFont('Roboto-Black','',11);
$pdf->Cell(20,10, iconv('UTF-8', 'windows-1251', '            От '.$date),0,1,'C');
$pdf->Cell(60);
$pdf->Cell(65,10, iconv('UTF-8', 'windows-1251', 'За период с '.$ot['day'].'-'.$ot['month'].'-'.$ot['year'].' По '.$po['day'].'-'.$po['month'].'-'.$po['year']),0,0,'C');
$pdf->Ln(20);
$pdf->Cell(60,12,iconv('UTF-8', 'windows-1251', 'Наименование номенклатуры'),1);
$pdf->Cell(60,12,iconv('UTF-8', 'windows-1251', 'Всего продано'),1);
$pdf->Cell(60,12,iconv('UTF-8', 'windows-1251', 'Сумма руб.'),1);

$pdf->SetFont('Roboto-Regular','',10);
    foreach($sql as $row) {	
        $pdf->Ln();
        foreach($row as $column)
            $pdf->Cell(60,12,iconv('UTF-8', 'windows-1251', $column),1);    
    }
}

else {
    $sql =mysqli_query($mysqli, "SELECT  ");
}

$pdf->Output();

?>
