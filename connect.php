<?php
$mysql = mysqli_connect('localhost','root', '', 'users');
	
if (!$mysql){ 
die ('Ошибка подключения');
}
?>