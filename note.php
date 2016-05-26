<!DOCTYPE PHP>
<html>
<head>
<link href = "css/style.css" rel = "stylesheet">
</head>
<body>
	<div>
		<!-- <input type="text" pattern = "[a-zA-Z0-9 ]+" title = "Only enter letters, numbers, or spaces" name="address"><br><br> -->
		<h3>Add a Note</h3>
		<form method="post" action="">
			<h3>Horse Information</h3>
			<label>Name</label>
				<input type="text" pattern = "[a-zA-Z ]+" title = "Only enter letters !" name="name" required>
			<br>
			<label>Date</label>
				<input type="date" name="date" required><br>
			<br>
			<label>Note</label>
			<br>
				<label style="font-size:20"><textarea name="noteaArea" rows ="10" cols ="50"></textarea>
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