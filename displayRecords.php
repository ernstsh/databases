<?php 
	session_start();
  include('_header.php');
	//connect to database
	//ini_set('display_errors', 'On');
	$servername = "mysql.cs.orst.edu";
	$username = "cs340_ernstsh";
	$password = "Fredis14";
	$dbName = "cs340_ernstsh";
	$finalDB = new mysqli($servername, $username, $password, $dbName);
	
	if($_REQUEST['indic'] == "vet"){
		$vRecID = $_REQUEST['vRecID'];
		$query = "SELECT vetRec_T.date,vetRec_T.comment,vet_T.firstName,vet_T.lastName,vetRec_T.vID FROM vetRec_T,vet_T WHERE vetRec_T.vetRecid='$vRecID' AND vetRec_T.vID=vet_T.vID";
		
		if($exec = $finalDB->query($query)){
			//$res = $exec->fetch_object();
			$query2 = "SELECT name FROM horse_T WHERE horse_T.vetRecID='$vRecID'";
			$exec2 = $finalDB->query($query2);
			$res2 = $exec2->fetch_object();
			echo "<table border ='1'>";
			echo '<th colspan="3"> Vet Records for '.htmlspecialchars($res2->name).'</th>';
			echo "<tr><th> Date <th> Comment <th> Vet </tr>";
			echo '<tr>';
			echo '</tr>';
			echo '<tr>';
			echo '</td>';
			while($res = $exec->fetch_object()){
			//while($res){	
				echo '<tr>';
				echo '<td>'.htmlspecialchars($res->date).'</td>';
				echo '<td>'.htmlspecialchars($res->comment).'</td>';
				echo '<td>'.htmlspecialchars($res->firstName).' '.htmlspecialchars($res->lastName).'</td>';
				echo '<td> <form method="post" action="temp.php"><input type="hidden" name="vRecID" value="'.htmlspecialchars($vRecID).'"><input type="hidden" name="dates" value="'.htmlspecialchars($res->date).'"><input type="hidden" name="vid" value="'.htmlspecialchars($res->vID).'"><input type="submit" value="Delete Note"></form></td>';
				
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
		$query = "SELECT farrierRec_T.dates,farrierRec_T.comments,farrier_T.firstName,farrier_T.lastName,farrier_T.fID FROM farrierRec_T,farrier_T WHERE farrierRec_T.farrierRecid='$fRecID' AND farrierRec_T.fID=farrier_T.fID";
		
		if($exec = $finalDB->query($query)){
			$query2 = "SELECT name FROM horse_T WHERE horse_T.farRecID='$fRecID'";
			$exec2 = $finalDB->query($query2);
			$res2 = $exec2->fetch_object();
			echo "<table border ='1'>";
			echo '<th colspan="3"> Farrier Records for '.htmlspecialchars($res2->name).'</th>';
			echo "<tr><th> Date <th> Comment <th> First Name <th> Last Name </tr>";
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
		else if($_REQUEST['indic']=="note"){
		$tpID = $_REQUEST['tpID'];
		//echo $tpID;
		$query = "SELECT trainNote_T.date,trainNote_T.notes FROM trainNote_T WHERE trainNote_T.tpid='$tpID'";
		if($exec = $finalDB->query($query)){
			$query2 = "SELECT name FROM horse_T, trainingProgram_T WHERE horse_T.hid=trainingProgram_T.hid AND trainingProgram_T.tpid='$tpID'";
			$exec2 = $finalDB->query($query2);
			$res2 = $exec2->fetch_object();
			echo "<table border ='1'>";
			echo '<th colspan="3"> Note Records for '.htmlspecialchars($res2->name).'</th>';
			echo "<tr><th> Date <th> Comment </tr>";
			while($res = $exec->fetch_object()){
				echo '<tr>';
				echo '<td>'.htmlspecialchars($res->date).'</td>';
				echo '<td>'.htmlspecialchars($res->notes).'</td>';
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