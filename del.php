<?php
require_once'connect.php';
$fio=$_GET['full_name'];
mysqli_query($mysql, "DELETE FROM `student` WHERE `student`.`num_report_card`='$zach'");
mysqli_query($mysql, "set @autoid :=0");
mysqli_query($mysql, " update student set id_user = @autoid := (@autoid+1)");
header('Location: bd.php');
?>
