<?php
session_start();
$servername = "mysql.cs.orst.edu";
$username = "cs340_ernstsh";
$password = "Fredis14";
$dbName = "cs340_ernstsh";
$finalDB = new mysqli($servername, $username, $password, $dbName);

	$vRecID = $_REQUEST['vRecID'];
	$vID = $_REQUEST['vid'];
	$dates = $_REQUEST['dates'];
	// echo $vRecID;
	// echo $vID;
	// echo $dates;
	$query3 ="CALL deleteNote(".$vRecID.",".$dates.",".$vID.");";
	$finalDB->query($query3);
	


 echo '<meta http-equiv="refresh" content="0; url=dashboard.php" />';
?>
