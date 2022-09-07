<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$datbase = "animatch";
	//mysqli_connect($host,$user,$password);
	//mysqli_select_db($datbase);
	$link = mysqli_connect($host,$user,$password,$datbase);
	mysqli_query($link, "SET NAMES utf8");
?>