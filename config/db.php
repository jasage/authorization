<?php
$dblocation='localhost';
$dbname='test';
$dbuser='root';
$dbpass='';

$db = mysqli_connect($dblocation,$dbuser,$dbpass,$dbname);
if(!$db){
	echo 'Error : Can not connect to MySQL';
	exit();
}else{
	mysqli_set_charset($db,'utf8');
	$sql="CREATE TABLE IF NOT EXISTS users
		 (
		 id INT(1) AUTO_INCREMENT PRIMARY KEY,
		 email VARCHAR(50) NOT NULL UNIQUE,
		 name VARCHAR(50) NOT NULL,
		 password VARCHAR(50) NOT NULL,
		 phone_number VARCHAR(20) NOT NULL,
		 address TEXT NOT NULL,
		 checksum TEXT NOT NULL,
		 date_registry TEXT NOT NULL,
		 status INT(1)
		 )";
	$result=mysqli_query($db,$sql); 
}

?>