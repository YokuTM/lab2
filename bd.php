<?php
	require_once'connect.php';

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTD-8">
	<title>Студенты</title>
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
			<th>ФИО</th>
			<th>ФАКУЛЬТЕТ</th>
			<th>ГРУППА</th>
			<th>НОМЕР ЗАЧЕТКИ</th>
			<th>НОМЕР ТЕЛЕФОНА</th>
		</tr>
		<?php
			$stud=mysqli_query($mysql, "SELECT * FROM `student`");
			$stud = mysqli_fetch_all($stud);
			foreach ($stud as $stu){
				?>
				<tr>
					<td><?= $stu[0]?></td>
					<td><?= $stu[1]?></td>
					<td><?= $stu[2]?></td>
					<td><?= $stu[3]?></td> 
					<td><?= $stu[4]?></td>
					<td><?= $stu[5]?></td>
					<td><a href="up.php?full_name=<?= $stu[1]?>">ОБНОВИТЬ</a></td>
					<td><a style="color: red" href="del.php?full_name=<?= $stu[1]?>">УДАЛИТЬ</a></td>
		</tr>
		<?php
			}
	
		?>
		
		</table>
		<h3>ДОБАВЛЕНИЕ НОВОГО СТУДЕНТА</h3>
		<form action="ven.php" method="post">
		<p>ФИО</p>
		<input type="text" name="full_name">
		<p>ФАКУЛЬТЕТ</p>
		<input type="text" name="faculty">
		<p>ГРУППА</p>
		<input type="text" name="groupa">
		<p>НОМЕР ЗАЧЕТКИ</p>
		<input type="number" name="num_report_card">
		<p>НОМЕР ТЕЛЕФОНА</p>
		<input type="number" name="number"><br><br>
		<button type="sumbit">ДОБАВЛЕНИЕ НОВОГО СТУДЕНТА</button>
		</form>
</body>
</html>
