<?php
	require_once'connect.php';
	$prod_id=$_GET['id_user'];
	$prod = mysqli_query($mysql, "SELECT * FROM `student` WHERE `id_user`='$prod_id'");
	$prod = mysqli_fetch_assoc($prod);

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTD-8">
	<title>ОБНОВЛЕНИЕ БАЗЫ</title>
</head>
<body>
	<h3>ОБНОВЛЕНИЕ БАЗЫ</h3>
	<form action="update.php" method="post">
		<input type="hidden" name="id_user" value="<?=$prod['id_user']?>">
		<p>ФИО</p>
		<input type="text" name="full_name" value="<?=$prod['full_name']?>">
		<p>ФАКУЛЬТЕТ</p>
		<input type="text" name="faculty" value="<?=$prod['faculty']?>">
		<p>ГРУППА</p>
		<input type="text" name="groupa" value="<?=$prod['groupa']?>">
		<p>НОМЕР ЗАЧЕТКИ</p>
		<input type="number" name="num_report_card" value="<?=$prod['num_report_card']?>">
		<p>НОМЕР ТЕЛЕФОНА</p>
		<input type="number" name="number" value="<?=$prod['number']?>"><br><br>
		<button type="sumbit">РЕДАКТИРОВАНИЕ СТУДЕНТА</button>
		</form>
</body>
</html>