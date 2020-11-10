<?php
	require_once 'connect.php';
		$id=$_POST['id_user'];
		$fio=$_POST['full_name'];
		$faq=$_POST['faculty'];
		$group=$_POST['groupa'];
		$zach=$_POST['num_report_card'];
		$phone=$_POST['number'];
		mysqli_query($mysql, "INSERT INTO `student` (`id_user`,`full_name`, `faculty`, `groupa`, `num_report_card`, `number`) VALUES ('$id','$fio', '$faq', '$group', '$zach', '$phone')");
		 header ('Location: bd.php');
		?>