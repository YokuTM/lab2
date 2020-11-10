<?php
$mysql = mysqli_connect('127.0.0.1:3306','UserName', '123', 'users');
	
if (!$mysql){ 
die ('Ошибка подключения');
}
?>
