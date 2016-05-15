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
			<input type="text" name="username"><br>
			Password:<br>
			<input type="text" name="password"><br>

	<br>
	<input type="submit" name = "submit" value="Submit">
	</form>
	
	<?php
		// If the post was submitted and $error is still blank (an error was not detected)
		if (isset($_POST['submit']) and $error == '') {
			// Include the 'addUser' code
			include 'addUser.php';
			echo '<meta http-equiv="refresh" content="0; url=Login.php" />';
		}
	?>
	
</body>




