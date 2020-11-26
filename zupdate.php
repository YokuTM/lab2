<?php
	require_once'connect.php';
		$id=$_POST['id'];
		$date=$_POST['date'];
		$id_user=$_POST['id_user'];
		$id_sub=$_POST['id_sub'];
		$score=$_POST['score'];
	mysqli_query($mysql, "UPDATE `zach` SET `date` = '$date', `id_user` = '$id_user', `id_sub` = '$id_sub', `score` = '$score' WHERE `zach`.`id` = '$id'");
	
			 header('Location: z.php');
?>