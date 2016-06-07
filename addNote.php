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
		//NEED TO FIGURE OUT HOW TO GET VETRECID
		$vfirstName = $_REQUEST['vfirstName'];
		$vlastName = $_REQUEST['vlastName'];
		$vphone = $_REQUEST['vphone'];
		$query = "SELECT vID FROM vet_T WHERE firstName='$vfirstName' AND lastName='$vlastName' AND phone='$vphone'";
		$exec = $finalDB->query($query);
		$res = $exec->fetch_object();
		$vID = $res->vID;
		$query = "INSERT INTO vetRec_T(vetRecid,date,comment,vID) Values(?,?,?,?)";
		
		if($statement = $finalDB->prepare($query)){
			$date = date("Y-m-d H:i:s");
			$comment = $_REQUEST['noteaArea'];
			$vrecID = $_REQUEST['vrecid'];
			
			$statement->bind_param('ssss', $vrecID, $date, $comment,$vID);
			$statement->execute();
			$statement->close();
		}
		else{
			printf("Error: %s\n", $finalDB->error);
		}
	}
	else if($type == "FarrierNote"){
		//NEED TO FIGURE OUT HOW TO GET FarRECID
		$ffirstName = $_REQUEST['ffirstName'];
		$flastName = $_REQUEST['flastName'];
		$fphone = $_REQUEST['fphone'];
		$query = "SELECT fID FROM farrier_T WHERE firstName='$ffirstName' AND lastName='$flastName' AND phone='$fphone'";
		$exec2 = $finalDB->query($query);
		$res = $exec2->fetch_object();
		$fID = $res->fID;
		$query = "INSERT INTO farrierRec_T(farrierRecid,dates,comments,fID) Values(?,?,?,?)";
	
		if($statement = $finalDB->prepare($query)){
			$date = date("Y-m-d H:i:s");
			$comment = $_REQUEST['noteaArea'];
			$frecID = $_REQUEST['frecid'];
			
			$statement->bind_param('ssss', $frecID,$date,$comment,$fID);
			$statement->execute();
			$statement->close();
		}
		else{
			printf("Error: %s\n", $finalDB->error);
		}
	}
	else{
		$query = "INSERT INTO trainNote_T(date,tpid,notes) Values(?,?,?)";
		if($statement = $finalDB->prepare($query)){
			$date = $_REQUEST['date'];
			$notes = $_REQUEST['noteaArea'];
			$tpid = $_REQUEST['tpid'];
			
			//echo $notes;
			//echo $tpid;
			//echo $date;
			
			$statement->bind_param('sss', $date,$tpid,$notes);
			$statement->execute();
			$statement->close();
		}
		else{
			printf("Error: %s\n", $finalDB->error);
		}
	}
	echo '<meta http-equiv="refresh" content="0; url=dashboard.php" />';
	
?>	