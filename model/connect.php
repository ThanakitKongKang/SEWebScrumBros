<?php

//connect local
$connect = new mysqli("localhost", "root", "", "19S2_g7");

//connect server
//$connect = new mysqli("10.199.66.227","19S2_g7","mhnx6BnY","19s2_g7");

if ($connect->connect_errno) {
	printf("Connect failed: %s\n", $connect->connect_error);
	exit();
}
$connect->query("SET NAMES utf8");

try {
	//connect local
	$pdo = new
		PDO("mysql:host=localhost;dbname=19s2_g7;charset=utf8", "root", "");

	//connect server
	//$pdo = new PDO("mysql:host=10.199.66.227;dbname=19s2_g7;charset=utf8","19S2_g7","mhnx6BnY");
} catch (PDOException $e) {
	echo "error : " . $e->getMessage();
}

 