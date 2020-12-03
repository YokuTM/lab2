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
			<th><a style="color: yellow" href=" index2.php">ВЕРНУТЬСЯ В МЕНЮ</a></th>
		</tr>
		<?php
			$stud=mysqli_query($mysql, "SELECT * FROM `zach`");
			$stuс=mysqli_query($mysql, "SELECT * FROM `student`");
			$stub=mysqli_query($mysql, "SELECT * FROM `student`");
			$stud = mysqli_fetch_all($stud);
			foreach ($stud as $stu){
			$date = date('d.m.Y', strtotime($stu[1]));
				?>
				<tr>
					<td><?= $stu[0]?></td>
					<td><?= $date?></td>
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
		<br><br><button style="color: red; height:40px;width:90px" onclick="window.location.href ='gen_pdf.php';">PDF</button><br><br>
			<button style="color: green; height:40px;width:90px" onclick="window.location.href ='gen_xls.php';">Excel</button><br><br>
		<h3>ДОБАВЛЕНИЕ НОВОГО ПУНКТА</h3>
			<form action="zven.php" method="post">
			<p>ДАТА СДАЧИ</p>
			<input type="date" name="date">
			<?php
			$result = mysqli_query($mysql, "SELECT id_user, full_name FROM student");
			echo "<br><br>ФИО СТУДЕНТА:<br><br><select name='id_user'>";
			if ($result){
				while ($row = $result->fetch_array()){
				$id_user = $row['full_name'];
				$full_name = $row['full_name'];

				echo "<option value='$id_user'>$full_name</option>";
				}
				}
				echo "</select>";
			$result = mysqli_query($mysql, "SELECT id_sub, name FROM sub");
			echo "<br><br>НАЗВАНИЕ ПРЕДМЕТА:<br><br> <select name='id_sub'>";
			if ($result){
				while ($row = $result->fetch_array()){
				$id_sub = $row['name'];
				$name = $row['name'];

				echo "<option value='$id_sub'>$name</option>";
				}
				}
				echo "</select>";
			?>
			<p>ОЦЕНКА</p>
			<input type="text" name="score"><br><br>
			<button type="sumbit">ДОБАВЛЕНИЕ</button>
			</form>
			
</body>
</html>
