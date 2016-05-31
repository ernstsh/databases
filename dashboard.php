<!DOCTYPE PHP>
<!--Landing page-->
<?php
   session_start();
   include('_header.php');
   include ('Session.php');
?>
<html>
   
   <head>
      <title>Dashboard</title>
   </head>
   
   <body>
      <?php //echo $login_session; echo $user_check; echo $row[0]; print_r($_SESSION);?>
	  <br><a href="newHorse.php"><button>Add a Horse</button></a>
	  
	  <div>
		<table style="border: 1px solid white">
			<tr>
				<th colspan="7">Horse Information</th>
			</tr>
			<tr>
				<td>Horse Name</td>
				<td>Breed</td>
				<td>Registration</td>
				<td>Gender</td>
				<td>Age</td>
				<td>Height</td>
				<td>Owner</td>
			</tr>	
			<?php include('displayHorse.php');?>
		</table>
	  </div>
	  
   </body>
   
</html>