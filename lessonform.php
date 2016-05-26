<!DOCTYPE PHP>
<html>
<?php
session_start();
include("_header.php");
?>
<head>
</head>
<body>
	<div>
		<!-- <input type="text" pattern = "[a-zA-Z0-9 ]+" title = "Only enter letters, numbers, or spaces" name="address"><br><br> -->
		<h3>Schedule a Lesson</h3>
		<form method="post" action="">
			<br>
			<label>Date</label>
				<input type="date" name="date" required><br>
			<br>
			
			<label>Time</label>
				<input type="text" name="time" required><br>
			<br>
			
			<label>Your Name</label>
				<input type="text" pattern = "[a-zA-Z ]+" title = "Only enter letters !" name="uName" required><br>
			<br>
			
			<label>Trainer Name</label>
				<input type="text" pattern = "[a-zA-Z ]+" title = "Only enter letters !" name="tName" required><br>
			<br>
			
		
			<label>Horse</label>
				<input type="text" pattern = "[a-zA-Z ]+" title = "Only enter letters !" name="Horse" required><br>
			<br>

			<input type="submit" name="submit" value="Submit">
		</form>
		<?php if (isset($_POST['submit'])) {
	
			//include '';
			echo '<meta http-equiv="refresh" content="0; url=dashboard.php" />';
		}
		?>
	</div>
</body>
</html>