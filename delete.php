<?php
 mysqli_connect("localhost","root","") or die ("Невозможно
подключиться к серверу");
 mysqli_select_db("users") or die("Нет такой таблицы!");
 $zapros="DELETE FROM user WHERE id_user=" . $_GET['id_user'];
 mysqli_query($zapros);
 header("Location: index.php");
 exit;
?>
