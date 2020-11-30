<?php
require_once'connect.php';
$id_sub=$_GET['id_sub'];
$name=$_GET['name'];
mysqli_query($mysql, "DELETE FROM `zach` WHERE `zach`.`id_sub`='$name'");
mysqli_query($mysql, "DELETE FROM `sub` WHERE `sub`.`name`='$name'");
mysqli_query($mysql, "set @autoid :=0");
mysqli_query($mysql, " update sub set id_sub = @autoid := (@autoid+1)");
header('Location: sub.php');


?>