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
	
	$hid = uniqid();
	$tid = $_SESSION['id']; //issue here
	$vrecID = uniqid("vrec_");
	$frecID = uniqid("frec_");
	$tpID = uniqid("tpid_");
	
	$vID = uniqid("v_");
	$vfirstName = $_REQUEST['vfirstName'];
	$vlastName = $_REQUEST['vlastName'];
	$vphone = $_REQUEST['vphone'];
	
	$fID = uniqid("f_");
	$ffirstName = $_REQUEST['ffirstName'];
	$flastName = $_REQUEST['flastName'];
	$fphone = $_REQUEST['fphone'];
	
	//check vet is not already in DB
	$query = "SELECT vID FROM vet_T WHERE firstName='$vfirstName' AND lastName='$vlastName' AND phone='$vphone'";
	$exec = $finalDB->query($query);
	echo htmlspecialchars($exec);
	//if($obj=$exec->fetch_object()){ //issue here
	if($exec){
		$vID = $exec;
	}
	//$exec->close();
	//check farrier is not already in DB
	$query = "SELECT fID FROM far_T WHERE firstName='$ffirstName' AND lastName='$flastName' AND phone='$fphone'";
	$exec = $finalDB->query($query);
	//if($obj=$exec->fetch_object()){
	if($exec){
		$fID = $exec;
	}
	//$exec->close();
	
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
		
		//header("Location: landing.php");
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
		$statement->bind_param('dss', $daysPW,$hid,$tpID);
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
		$English = 0;
		$Western = 0;
		$Dressage = 0;
		$Hunter = 0;
		$Jumping = 0;
		$Barrels = 0;
		$CrossCountry = 0;
		$Cutting = 0;
		$Reining = 0;
		$Driving = 0;
		$Roping = 0;
		$SaddleSeat = 0;
		$Showmanship = 0;
		$Halter = 0;
		$Endurance = 0;
		$Trail = 0;
		if($_REQUEST['English']){
			$English = $_REQUEST['English'];
		}
		if($_REQUEST['Western']){
			$Western = $_REQUEST['Western'];
		}
		if($_REQUEST['Dressage']){
			$Dressage = $_REQUEST['Dressage'];
		}
		if($_REQUEST['Hunter']){
			$Hunter = $_REQUEST['Hunter'];
		}
		if($_REQUEST['Jumping']){
			$Jumping = $_REQUEST['Jumping'];
		}
		if($_REQUEST['CrossCountry']){
			$CrossCountry = $_REQUEST['CrossCountry'];
		}
		if($_REQUEST['Barrels']){
			$Barrels = $_REQUEST['Barrels'];
		}
		if($_REQUEST['Cutting']){
			$Cutting = $_REQUEST['Cutting'];
		}
		if($_REQUEST['Reining']){
			$Reining = $_REQUEST['Reining'];
		}
		if($_REQUEST['Driving']){
			$Driving = $_REQUEST['Driving'];
		}
		if($_REQUEST['Roping']){
			$Roping = $_REQUEST['Roping'];
		}	
		if($_REQUEST['SaddleSeat']){
			$SaddleSeat = $_REQUEST['SaddleSeat'];
		}
		if($_REQUEST['Showmanship']){
			$Showmanship = $_REQUEST['Showmanship'];
		}
		if($_REQUEST['Halter']){
			$Halter = $_REQUEST['Halter'];
		}
		if($_REQUEST['Endurance']){
			$Endurance = $_REQUEST['Endurance'];
		}
		if($_REQUEST['Trail']){
			$Trail = $_REQUEST['Trail'];
		}
		$statement->bind_param('siiiiiiiiiiiiiiii', $tlcid,$English,$Western,$Dressage,$Hunter,$Jumping,$CrossCountry,$Barrels,$Cutting,$Reining,$Driving,$Roping,$SaddleSeat,$Showmanship,$Halter,$Endurance,$Trail);
		$statement->execute();
		$statement->close();
	}
	else{
		printf("Error: %s\n", $finalDB->error);
	}

	//create initial vet record
	$query = "INSERT INTO vetRec_T(vetRecid,comment,vID) Values(?,?,?)";
	
	if($statement = $finalDB->prepare($query)){

		$comment = "This is the first vet entry";
		
		$statement->bind_param('sss', $vrecID,$comment,$vID);
		$statement->execute();
		$statement->close();
	}
	else{
		printf("Error: %s\n", $finalDB->error);
	}
	
	//create initial farrier record PROBLEM
	$query = "INSERT INTO farrierRec_T(farrierRecid,comment,fID) Values(?,?,?)";
	
	if($statement = $finalDB->prepare($query)){

		$comment = "This is the first farrier entry";
		
		$statement->bind_param('sss', $frecID,$comment,$fID);
		$statement->execute();
		$statement->close();
	}
	else{
		printf("Error: %s\n", $finalDB->error);
	}
	header("Location: dashboard.php");
?>	