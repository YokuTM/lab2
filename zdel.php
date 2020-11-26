<?php
require_once'connect.php';
$id=$_GET['id'];
mysqli_query($mysql, "DELETE FROM `zach` WHERE `zach`.`id`='$id'");
mysqli_query($mysql, "set @autoid :=0");
mysqli_query($mysql, " update zach set id = @autoid := (@autoid+1)");
header('Location: z.php');


?>