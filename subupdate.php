<?php
	require_once'connect.php';
		$id_sub=$_POST['id_sub'];
		$name=$_POST['name'];
		$fio=$_POST['fio'];
	mysqli_query($mysql, "UPDATE `sub` SET `name` = '$name', `fio` = '$fio' WHERE `sub`.`id_sub` = '$id_sub'");
	
			 header('Location: sub.php');
?>