<!DOCTYPE PHP>
<html>
<head>
<?php
session_start();
include("_header.php");
?>
<script src="jquery-1.12.4.min.js"></script>
<script src="toggleNote.js"></script>
</head>
<body>
	<!--<script>
		$(document).ready(function(){
			toggleFields();
			$("#selection").change(function(){
				toggleFields();
			});
		});
		function toggleFields(){
			if($("#selection").val() == "VetNote")
				$("#test").show();
			else
				$("#test").hide();
		}
	</script>-->
	<div>
		<!-- <input type="text" pattern = "[a-zA-Z0-9 ]+" title = "Only enter letters, numbers, or spaces" name="address"><br><br> -->
		<h1>Add a Note</h1>
		<form method="post" action="addNote.php">
			<?php echo '<input type="hidden" name="tpid" value="'.$_REQUEST['tpID'].'">';?>
			<!--<br>
			<label>Name</label>
				<input type="text" pattern = "[a-zA-Z ]+" title = "Only enter letters !" name="name" required> <br>
			<br>-->
			<label>Date</label>
				<input type="date" name="date" required><br>
			<br>
			
			<label>Note Type</label>
					<select id="selection" name="Note">
						<option value = "TrainingNote"> Training Note </option>
						<option value = "VetNote"> Vet </option>
						<option value = "FarrierNote"> Farrier </option>
					</select><br><br>
			
			<div id="vetOP">
				<label>Vet First Name</label>
					<input type="text" name="vfirstName">
				<br>	
				<label>Vet Last Name</label>
					<input type="text" name="vlastName">
				<br>
				<label>Phone</label>
					<input type="text" name="phone">
				<br>
			</div>
			
			<div id="farOP">
				<label>Farrier First Name</label>
					<input type="text" name="ffirstName">
				<br>	
				<label>Farrier Last Name</label>
					<input type="text" name="flastName">
				<br>
				<label>Phone</label>
					<input type="text" name="phone">
				<br>
			</div>
			
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