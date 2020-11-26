<?php
require_once'connect.php';
$id_sub=$_GET['id_sub'];
mysqli_query($mysql, "DELETE FROM `zach` WHERE `zach`.`id_sub`='$id_sub'");
mysqli_query($mysql, "DELETE FROM `sub` WHERE `sub`.`id_sub`='$id_sub'");
mysqli_query($mysql, "set @autoid :=0");
mysqli_query($mysql, " update sub set id_sub = @autoid := (@autoid+1)");
header('Location: sub.php');


?>