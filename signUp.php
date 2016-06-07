<!--Sign up-->

<?php
	include("_header.php");
	//include("checklogin.php");

?>

	
<body>
	<h1>
		Create Login information
	</h1>
	
	<?=$error?>
	
	<form method="post">
		<fieldset>
			<legend> Personal information:</legend>
			
			User Name:<br>
			<input type="text" pattern = "[a-zA-Z0-9 ]{6,20}" title = "enter letters and or numbers and must be 6 to 20 character long !" name="username" required><br>
			Password:<br>
			<input type="text" pattern = "[a-zA-Z0-9 ]{6,30}" title = "enter letters and or numbers and must be 6 to 30 character long !"  name="password" required><br>

	<br>
	<input type="submit" name = "submit" value="Submit">
	</form>
	
	<?php
		// If the post was submitted and $error is still blank (an error was not detected)
		if (isset($_POST['submit']) and $error == '') {
			// Include the 'addUser' code
			include 'addUser.php';
		}
	?>
	
</body>




