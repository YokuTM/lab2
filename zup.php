<?php
	require_once'connect.php';
	$prod_id=$_GET['id'];
	$prod = mysqli_query($mysql, "SELECT * FROM `zach` WHERE `id`='$prod_id'");
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
	<form action="zupdate.php" method="post">
		<input type="hidden" name="id" value="<?=$prod['id']?>">
		<p>ДАТА СДАЧИ</p>
		<input type="text" name="date" value="<?=$prod['date']?>">
		<p>ID СТУДЕНТА</p>
		<input type="text" name="id_user" value="<?=$prod['id_user']?>">
		<p>ID ПРЕДМЕТА</p>
		<input type="text" name="id_sub" value="<?=$prod['id_sub']?>">
		<p>ОЦЕНКА</p>
		<input type="number" name="score" value="<?=$prod['score']?>"><br><br>
		<button type="sumbit">РЕДАКТИРОВАНИЕ</button>
		</form>
</body>
</html>