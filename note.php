<!DOCTYPE PHP>
<html>
<head>
<?php
session_start();
include("_header.php");
//$tid = $_REQUEST['tID'];
//echo '<input type="hidden" name="tpid" value="'.$_REQUEST['tpID'].'">';

?>
</head>
<body>

	<div>
		<!-- <input type="text" pattern = "[a-zA-Z0-9 ]+" title = "Only enter letters, numbers, or spaces" name="address"><br><br> -->
		<h1>Add a Note</h1>
		<form method="post" action="addNote.php">
			<?php echo '<input type="hidden" name="tpid" value="'.$_REQUEST['tpID'].'">';?>
			<br>
			<label>Name</label>
				<input type="text" pattern = "[a-zA-Z ]+" title = "Only enter letters !" name="name" required> <br>
			<br>
			<label>Date</label>
				<input type="date" name="date" required><br>
			<br>
			
			<label>Note Type</label>
					<select name="Note">
						<option value = "VetNote"> Vet </option>
						<option value = "FarrierNote"> Farrier </option>
						<option value = "Note"> Regular </option>
					</select><br><br>
			
			<label>Note</label>
			<br>
				<label style="font-size:20"><textarea name="noteaArea" rows ="10" cols ="50"></textarea>
			<br>

			<input type="submit" name="submit" value="Submit">
		</form>
		<?php //if (isset($_POST['submit'])) {
	
			//include '';
			//echo '<meta http-equiv="refresh" content="0; url=dashboard.php" />';
		//}
		?>
	</div>
</body>
</html>