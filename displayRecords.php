<?php 
	session_start();
	//connect to database
	ini_set('display_errors', 'On');
	$servername = "mysql.cs.orst.edu";
	$username = "cs340_ernstsh";
	$password = "Fredis14";
	$dbName = "cs340_ernstsh";
	$finalDB = new mysqli($servername, $username, $password, $dbName);
	
	if($_REQUEST['indic'] == "vet"){
		$vRecID = $_REQUEST['vRecID'];
		$query = "SELECT vetRec_T.date,vetRec_T.comment,vet_T.firstName,vet_T.lastName FROM vetRec_T,vet_T WHERE vetRec_T.vetRecid='$vRecID' AND vetRec_T.vID=vet_T.vID";
		
		if($exec = $finalDB->query($query)){
			echo '<table>';
			while($res = $exec->fetch_object()){
				echo '<tr>';
				echo '<td>'.htmlspecialchars($res->date).'</td>';
				echo '<td>'.htmlspecialchars($res->comment).'</td>';
				echo '<td>'.htmlspecialchars($res->firstName).'</td>';
				echo '<td>'.htmlspecialchars($res->lastName).'</td>';
				echo '<tr>';
			}
			//$res->close();
		}
		else{
			echo "<p>Sorry no result match your search.</p>";
		}
		echo '</table>';
		
	}
	else if($_REQUEST['indic']=="far"){
		$fRecID = $_REQUEST['fRecID'];
		$query = "SELECT farrierRec_T.dates,farrierRec_T.comments,farrier_T.firstName,farrier_T.lastName FROM farrierRec_T,farrier_T WHERE farrierRec_T.farrierRecid='$fRecID' AND farrierRec_T.fID=farrier_T.fID";
		
		if($exec = $finalDB->query($query)){
			echo '<table>';
			while($res = $exec->fetch_object()){
				echo '<tr>';
				echo '<td>'.htmlspecialchars($res->dates).'</td>';
				echo '<td>'.htmlspecialchars($res->comments).'</td>';
				echo '<td>'.htmlspecialchars($res->firstName).'</td>';
				echo '<td>'.htmlspecialchars($res->lastName).'</td>';
				echo '<tr>';
			}
			//$res->close();
		}
		else{
			echo "<p>Sorry no result match your search.</p>";
		}
		echo '</table>';
	}
	
?>	