<?php 
	session_start();
	//include("Session.php");
	//connect to database
	//ini_set('display_errors', 'On');
	$servername = "mysql.cs.orst.edu";
	$username = "cs340_ernstsh";
	$password = "Fredis14";
	$dbName = "cs340_ernstsh";
	$finalDB = new mysqli($servername, $username, $password, $dbName);
	
	
	
?>	