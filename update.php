<?php
	require_once'connect.php';
		$id=$_POST['id_user'];
		$fio=$_POST['full_name'];
		$faq=$_POST['faculty'];
		$group=$_POST['groupa'];
		$zach=$_POST['num_report_card'];
		$phone=$_POST['number'];
	mysqli_query($mysql, "UPDATE `student` SET `full_name` = '$fio', `faculty` = '$faq', `groupa` = '$group', `num_report_card` = '$zach', `number` = '$phone' WHERE `student`.`id_user` = '$id'");
	
			 header ('Location: bd.php');
?>