<?php
	require_once 'connect.php';
		$fio=$_POST['full_name'];
		$faq=$_POST['faculty'];
		$group=$_POST['groupa'];
		$zach=$_POST['num_report_card'];
		$phone=$_POST['number'];
		mysqli_query($mysql, "INSERT INTO `student` (`full_name`, `faculty`, `groupa`, `num_report_card`, `number`) VALUES ('$fio', '$faq', '$group', '$zach', '$phone')");
        mysqli_query($mysql, "set @autoid :=0");
       mysqli_query($mysql, " update student set id_user = @autoid := (@autoid+1)");
		 header('Location: bd.php');

		?>