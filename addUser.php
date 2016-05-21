<?php
	include('Config.php');
	
	$query = "INSERT INTO login_T(id, username, password,hash) Values(?,?,?,?)";
	
	if($statement = $db->prepare($query)){
	
		$userId= rand(2000, 5000);
		$username = $_REQUEST["username"];
		$password = $_REQUEST['password'];
		$hashed = password_hash($password, PASSWORD_DEFAULT);
		$statement->bind_param('isss', $userId, $username, $password, $hashed);
		$statement->execute();
		$statement->close();
		echo '<meta http-equiv="refresh" content="0; url=landing.php" />';
	}
	else{
		printf("Error: %s\n", $db->error);
	}
?>
