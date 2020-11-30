<?php
	require_once 'connect.php';
		$id=$_POST['id'];
		$date=$_POST['date'];
		$id_user=$_POST['id_user'];
		$id_sub=$_POST['id_sub'];
		$score=$_POST['score'];
		$date = date('d.m.Y', strtotime($date));
		mysqli_query($mysql, "INSERT INTO `zach` (`date`, `id_user`, `id_sub`, `score`) VALUES ('$date', '$id_user', '$id_sub', '$score')");
        mysqli_query($mysql, "set @autoid :=0");
       mysqli_query($mysql, " update zach set id = @autoid := (@autoid+1)");
		 header('Location: z.php');

		?>