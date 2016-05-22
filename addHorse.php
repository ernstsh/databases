<?php 
	//connect to database
	ini_set('display_errors', 'On');
	$servername = "mysql.cs.orst.edu";
	$username = "cs340_ernstsh";
	$password = "Fredis14";
	$dbName = "cs340_ernstsh";
	$finalDB = new mysqli($servername, $username, $password, $dbName);
	
	session_start();
	
	$hid = uniqid();
	$tid = $_SESSION['id']; //issue here
	echo $_SESSION
	$vrecID = "vrec_".uniqid();
	$frecID = "frec_".uniqid();
	$tpID = "tpid_".uniqid();
	
	$vID = "v_".uniqid();
	$vfirstName = $_REQUEST['vfirstName'];
	$vlastName = $_REQUEST['vlastName'];
	$vphone = $_REQUEST['vphone'];
	
	$fID = "f_".uniqid();
	$ffirstName = $_REQUEST['ffirstName'];
	$flastName = $_REQUEST['flastName'];
	$fphone = $_REQUEST['fphone'];
	
	//check vet is not already in DB
	$query = "SELECT vID FROM vet_T WHERE firstName=$vfirstName AND lastName=$vlastName AND phone=$vphone";
	$exec = $finalDB->query($query);
	if($obj=$exec->fetch_object()){ //issue here
		$vID = $obj->vID;
	}
	$exec->close();
	//check farrier is not already in DB
	$query = "SELECT fID FROM far_T WHERE firstName=$ffirstName AND lastName=$flastName AND phone=$fphone";
	$exec = $finalDB->query($query);
	if($obj=$exec->fetch_object()){
		$vID = $obj->fID;
	}
	$exec->close();
	
	//add horse
	$query = "INSERT INTO horse_T(tid,hid,name,breed,reg,gender,age,height,owner,leesee,vetRecID,farRecID,trainProgID) Values(?,?,?,?,?,?,?,?,?,?,?,?,?)";
	
	if($statement = $finalDB->prepare($query)){
		
		$name = $_REQUEST['name'];
		$breed = $_REQUEST['breed'];
		$reg = $_REQUEST['reg'];
		$gender = $_REQUEST['gender'];
		$age = $_REQUEST['age'];
		$height = $_REQUEST['height'];
		$owner = $_REQUEST['owner'];
		$leesee = $_REQUEST['leasee'];
		
		
		$statement->bind_param('ssssssddsssss', $tid,$hid, $name, $breed, $reg, $gender, $age, $height, $owner, $leesee, $vrecID, $frecID, $tpID);
		$statement->execute();
		$statement->close();
		
		header("Location: landing.php");
	}
	else{
		printf("Error: %s\n", $finalDB->error);
	}
	//Insert vet
	$query = "INSERT INTO vet_T(vID,firstName,lastName,street,city,state,zip,phone) Values(?,?,?,?,?,?,?,?)";
	
	if($statement = $finalDB->prepare($query)){
		$vstreet = $_REQUEST['vstreet'];
		$vcity = $_REQUEST['vcity'];
		$vstate = $_REQUEST['vstate'];
		$vzip = $_REQUEST['vzip'];
		
		$statement->bind_param('ssssssds', $vID,$vfirstName,$vlastName,$vstreet,$vcity,$vstate,$vzip,$vphone);
		$statement->execute();
		$statement->close();
	}
	else{
		printf("Error: %s\n", $finalDB->error);
	}
	//Insert farrier
	$query = "INSERT INTO farrier_T(fID,firstName,lastName,street,city,state,zip,phone) Values(?,?,?,?,?,?,?,?)";
	
	if($statement = $finalDB->prepare($query)){
		$fstreet = $_REQUEST['fstreet'];
		$fcity = $_REQUEST['fcity'];
		$fstate = $_REQUEST['fstate'];
		$fzip = $_REQUEST['fzip'];
		
		$statement->bind_param('ssssssds', $fID,$ffirstName,$flastName,$fstreet,$fcity,$fstate,$fzip,$fphone);
		$statement->execute();
		$statement->close();
	}
	else{
		printf("Error: %s\n", $finalDB->error);
	}
	
	$query = "INSERT INTO trainingProgram_T(daysPW,hid,tpid) Values(?,?,?)";
	
	if($statement = $finalDB->prepare($query)){
		$daysPW = $_REQUEST['dayPW'];
		$statement->bind_param('sss', $daysPW,$hid,$tpid);
		$statement->execute();
		$statement->close();
	}
	else{
		printf("Error: %s\n", $finalDB->error);
	}
	
	//Insert disciplines
	$query = "INSERT INTO discipline_T(tlcid,English,Western,Dressage,Hunter,Jumping,CrossCountry,Barrels,Cutting,Reining,Driving,Roping,SaddleSeat,Showmanship,Halter,Endurance,Trail) Values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
	if($statement = $finalDB->prepare($query)){
		$tlcid = $tpID;
		$English = $_REQUEST['English'];
		$Western = $_REQUEST['Western'];
		$Dressage = $_REQUEST['Dressage'];
		$Hunter = $_REQUEST['Hunter'];
		$Jumping = $_REQUEST['Jumping'];
		$CrossCountry = $_REQUEST['CrossCountry'];
		$Barrels = $_REQUEST['Barrels'];
		$Cutting = $_REQUEST['Cutting'];
		$Reining = $_REQUEST['Reining'];
		$Driving = $_REQUEST['Driving'];
		$Roping = $_REQUEST['Roping'];
		$SaddleSeat = $_REQUEST['SaddleSeat'];
		$Showmanship = $_REQUEST['Showmanship'];
		$Halter = $_REQUEST['Halter'];
		$Endurance = $_REQUEST['Endurance'];
		$Trail = $_REQUEST['Trail'];
		
		$statement->bind_param('ssssssssssssssss', $tlcid,$English,$Western,$Dressage,$Hunter,$Jumping,$CrossCountry,$Barrels,$Cutting,$Reining,$Driving,$Roping,$SaddleSeat,$Showmanship,$Halter,$Endurance,$Trail);
		$statement->execute();
		$statement->close();
	}
	else{
		printf("Error: %s\n", $finalDB->error);
	}

	//create initial vet record
	$query = "INSERT INTO vetRec_T(vetRecid,date,comment,vID) Values(?,?,?,?)";
	
	if($statement = $finalDB->prepare($query)){
		$date = getdate();
		$comment = "This is the first vet entry";
		
		$statement->bind_param('ssss', $vrecID,$date,$comment,$vID);
		$statement->execute();
		$statement->close();
	}
	else{
		printf("Error: %s\n", $finalDB->error);
	}
	
	//create initial farrier record
	$query = "INSERT INTO farrierRec_T(farrierRecid,date,comment,fID) Values(?,?,?,?)";
	
	if($statement = $finalDB->prepare($query)){
		$date = getdate();
		$comment = "This is the first farrier entry";
		
		$statement->bind_param('ssss', $frecID,$date,$comment,$fID);
		$statement->execute();
		$statement->close();
	}
	else{
		printf("Error: %s\n", $finalDB->error);
	}
	
?>	