<?php
	include('Config.php');
	
	$query = "INSERT INTO login_T(id, username, password) Values(?,?,?)";
	
	if($statement = $db->prepare($query)){
	
		$userId= rand(2000, 5000);
		$username = $_REQUEST["username"];
		$password = $_REQUEST['password'];
	
		$statement->bind_param('iss', $userId, $username, $password);
		$statement->execute();
		$statement->close();
		echo '<meta http-equiv="refresh" content="0; url=landing.php" />';
	}
	else{
		printf("Error: %s\n", $db->error);
	}
?>
