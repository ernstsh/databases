<?php 
	//connect to database
	ini_set('display_errors', 'On');
	$servername = "mysql.cs.orst.edu";
	$username = "cs340_ernstsh";
	$password = "Fredis14";
	$dbName = "cs340_ernstsh";
	$finalDB = new mysqli($servername, $username, $password, $dbName);
	
	$query = "INSERT INTO horse_T(hid,name,breed,reg,gender,age,height,owner) Values(?,?,?,?,?,?,?,?)";
	
	if($statement = $finalDB->prepare($query)){
		$hid = uniqid();
		$name = $_REQUEST['name'];
		$breed = $_REQUEST['breed'];
		$reg = $_REQUEST['reg'];
		$gender = $_REQUEST['gender'];
		$age = $_REQUEST['age'];
		$height = $_REQUEST['height'];
		$owner = $_REQUEST['owner'];
		
		$statement->bind_param('sssssdds', $hid, $name, $breed, $reg, $gender, $age, $height, $owner);
		$statement->execute();
		$statement->close();
		
		header("Location: landing.php");
	}
	else{
		printf("Error: %s\n", $finalDB->error);
	}
?>	