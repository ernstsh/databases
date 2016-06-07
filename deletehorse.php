<?php
session_start();
$servername = "mysql.cs.orst.edu";
$username = "cs340_ernstsh";
$password = "Fredis14";
$dbName = "cs340_ernstsh";
$finalDB = new mysqli($servername, $username, $password, $dbName);

	$hid = $_REQUEST['hid'];
	$vRecID = $_REQUEST['vRecID'];
	$fRecID = $_REQUEST['fRecID'];
	$tpID = $_REQUEST['tpID'];

	 //echo $vRecID;
	 //echo $hid;
	 //echo $fRecID;
	 //echo $tpID;
	 
	$query3 ="CALL deleteHorse('$hid','$vRecID','$fRecID','$tpID');";
	//$query3 ="CALL deleteHorse('$hid');";
	$finalDB->query($query3);
	


 echo '<meta http-equiv="refresh" content="0; url=dashboard.php" />';
?>
