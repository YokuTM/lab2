<?php
require_once'connect.php';
$name=$_GET['name'];
$fio=$_GET['fio'];
mysqli_query($mysql, "DELETE FROM `sub` WHERE `sub`.`id_sub`='$id_sub'");
mysqli_query($mysql, "set @autoid :=0");
mysqli_query($mysql, " update sub set id_sub = @autoid := (@autoid+1)");
header('Location: sub.php');


?>