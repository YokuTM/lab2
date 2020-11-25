<?php
	require_once 'connect.php';
		$id_sub=$_POST['id_sub'];
		$name=$_POST['name'];
		$fio=$_POST['fio'];
		mysqli_query($mysql, "INSERT INTO `sub` (`id_sub`, `name`, `fio`) VALUES ('$id_sub', '$name', '$fio')");
        mysqli_query($mysql, "set @autoid :=0");
       mysqli_query($mysql, " update sub set id_sub = @autoid := (@autoid+1)");
		 header('Location: sub.php');

		?>