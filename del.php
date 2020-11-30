<?php
require_once'connect.php';
$id_user=$_GET['id_user'];
$full_name=$_GET['full_name'];
$zach=$_GET['num_report_card'];
mysqli_query($mysql, "DELETE FROM `zach` WHERE `zach`.`id_user`='$full_name'");
mysqli_query($mysql, "DELETE FROM `student` WHERE `student`.`full_name`='$full_name'");
mysqli_query($mysql, "set @autoid :=0");
mysqli_query($mysql, " update student set id_user = @autoid := (@autoid+1)");
header('Location: bd.php');
?>
