<?php 
	session_start();
	//include("Session.php");
	//connect to database
	ini_set('display_errors', 'On');
	$servername = "mysql.cs.orst.edu";
	$username = "cs340_ernstsh";
	$password = "Fredis14";
	$dbName = "cs340_ernstsh";
	$finalDB = new mysqli($servername, $username, $password, $dbName);
	
	$type = $_REQUEST['Note'];
	if($type == "VetNote"){
	
	}
	else if($type == "FarrierNote"){
		
	}
	else{
		$query = "INSERT INTO trainNote_T(date,tpid,notes) Values(?,?,?)";
		if($statement = $finalDB->prepare($query)){
			$date = $_REQUEST['date'];
			$notes = $_REQUEST['noteaArea'];
			$tpid = $_REQUEST['tpid'];
			
			$statement->bind_param('sss', $date,$tpid,$notes);
			$statement->execute();
			$statement->close();
		}
		else{
			printf("Error: %s\n", $finalDB->error);
		}
	}
	
?>	