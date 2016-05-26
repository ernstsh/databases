<?php 
	session_start();
	//connect to database
	ini_set('display_errors', 'On');
	$servername = "mysql.cs.orst.edu";
	$username = "cs340_ernstsh";
	$password = "Fredis14";
	$dbName = "cs340_ernstsh";
	$finalDB = new mysqli($servername, $username, $password, $dbName);
	$tid = $_SESSION['id'];
	$query = "SELECT * FROM horse_T WHERE tid=$tid";
	
	if($res = $finalDB->query($query)){
		//echo '<table>';
		while($obj= $res->fetch_object()){
			echo '<tr>';
			echo '<td>'.htmlspecialchars($obj->name).'</td>';
			echo '<td>'.htmlspecialchars($obj->breed).'</td>';
			echo '<td>'.htmlspecialchars($obj->reg).'</td>';
			echo '<td>'.htmlspecialchars($obj->gender).'</td>';
			echo '<td>'.htmlspecialchars($obj->age).'</td>';
			echo '<td>'.htmlspecialchars($obj->height).'</td>';
			echo '<td>'.htmlspecialchars($obj->owner).'</td>';
			echo '<td> <form method="post" action="note.php"><input type="hidden" name="tID" value="'.htmlspecialchars($obj->trainProgID).'"><input type="submit" value="Add Training Note"></form></td>';
			echo '<td><button>View Vet Record</button></td>';
			echo '<td><button>View Farrier Record</button></td>';
			echo '</tr>';
		}
		$res->close();
	}
	else{
			echo "<p>Sorry no result match your search.</p>";
	}
	//echo '</table>';
	
?>	