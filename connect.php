<?php
$servername= "localhost";
$username="root";
$password="";
try{
	$mysql = new POD("mysql:host=$servername,dbname=users",$username,$password);
	echo "Вход";

}
	cath (PDOException $e){
		echo "НЕТ".$e->getMessage();
}
?>
