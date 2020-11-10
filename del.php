<?php
require_once'connect.php';
$fio=$_GET['full_name'];
mysqli_query($mysql, "DELETE FROM `student` WHERE `student`.`full_name`='$fio'");

header ('Location: bd.php');


?>