<?php
	require_once'connect.php';
	$prod_id=$_GET['id_sub'];
	$prod = mysqli_query($mysql, "SELECT * FROM `sub` WHERE `id_sub`='$prod_id'");
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
	<form action="subupdate.php" method="post">
		<input type="hidden" name="id_sub" value="<?=$prod['id_sub']?>">
		<p>НАЗВАНИЕ</p>
		<input type="text" name="name" value="<?=$prod['name']?>">
		<p>ФИО ПРЕПОДАВАТЕЛЯ</p>
		<input type="text" name="fio" value="<?=$prod['fio']?>"><br><br>
		<button type="sumbit">РЕДАКТИРОВАНИЕ СТУДЕНТА</button>
		</form>
</body>
</html>