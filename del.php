<?php
require_once'connect.php';
$id_user=$_GET['id_user'];
$zach=$_GET['num_report_card'];
mysqli_query($mysql, "DELETE FROM `zach` WHERE `zach`.`id_user`='$id_user'");
mysqli_query($mysql, "DELETE FROM `student` WHERE `student`.`id_user`='$id_user'");
mysqli_query($mysql, "set @autoid :=0");
mysqli_query($mysql, " update student set id_user = @autoid := (@autoid+1)");
header('Location: bd.php');


?>