<?php
require_once'connect.php';
header('Content-Type: application/vnd.ms-excel; charset=utf-8');
	header('Content-Type: application/vnd.ms-excel; charset=utf-8');
	header("Content-Disposition: attachment;filename=".date("d-m-Y")."-export.xls");
	header("Content-Transfer-Encoding: binary ");
 
// !! Шапка хтмл
 
echo '
   <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
   <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="author" content="zabey" />
		<title>Demo</title>
	</head>
	<body>
';
 
// !!! Таблица с данными
 
// заголовок таблицы
echo '
  <table border="1">
	<tr>
		<th>Колонка 1</th>
		<th>Вторая колонка</th>
	</tr>
';
while($row = $STH->fetch()){ // формирование тела таблицы. Выберете ваш метод самостоятельно.
	echo '<tr>
		<td>'.$row['col1'].'</td>
		<td>'.$row['col2'].'</td>
	      </tr>';
}
echo '</table>';
echo '</body></html>';
	

?>

