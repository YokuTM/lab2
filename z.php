<?php
	require_once'connect.php';

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTD-8">
	<title>Зачетная ведомость</title>
</head>
<style>
		th,td {
			padding:10px;
			}
		th {
			background:#666666; 
			color:#fff;
			}
		td {
			background:#b5b5b5;
			}
</style>
<body>
	<table>
		<tr>
			<th>ID</th>
			<th>ДАТА СДАЧИ</th>
			<th>ID СТУДЕНТА</th>
			<th>ID ПРЕДМЕТА</th>
			<th>ОЦЕНКА</th>
			<th><a href=" index2.php">Вернуться в меню</a></th>
		</tr>
		<?php
			$stud=mysqli_query($mysql, "SELECT * FROM `zach`");
			$stud = mysqli_fetch_all($stud);
			foreach ($stud as $stu){
				?>
				<tr>
					<td><?= $stu[0]?></td>
					<td><?= $stu[1]?></td>
					<td><?= $stu[2]?></td>
					<td><?= $stu[3]?></td>
					<td><?= $stu[4]?></td>
					<td><a href=" zup.php?id=<?= $stu[0]?>">ОБНОВИТЬ</a></td>
					<td><a style="color: red" href=" zdel.php?id=<?= $stu[0]?>">УДАЛИТЬ</a></td>
		</tr>
		<?php
			}
	
		?>
		
		</table>
		<h3>ДОБАВЛЕНИЕ НОВОГО ПУНКТА</h3>
		<form action="zven.php" method="post">
		<p>ДАТА СДАЧИ</p>
		<input type="text" name="date">
		<p>ID СТУДЕНТА</p>
		<input type="text" name="id_user">
		<p>ID ПРЕДМЕТА</p>
		<input type="text" name="id_sub">
		<p>ОЦЕНКА</p>
		<input type="text" name="score"><br><br>
		<button type="sumbit">ДОБАВЛЕНИЕ НОВОГО ПРЕДМЕТА</button>
		</form>
		<br><br><button style="color: red" onclick="window.location.href ='gen_pdf.php';">PDF</button>
		<button style="color: green" onclick="window.location.href ='gen_xls.php';">Excel</button>
</body>
</html>