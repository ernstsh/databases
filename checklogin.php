<?php
	// This variables is displayed at the top of the profileCreation page
	$error = '';

	// If the profileCreation post has been submitted
	if (isset($_POST['submit'])) {

		// Variables from posted information
		$username = $_POST['username'];
		$password = $_POST['password'];

		// Regular expressions for comparison
		$phoneRegEx = '/^[0-9]{10,11}$/';
		$majorRegEx = '/^[a-zA-Z ]{2,30}$/';
		$ageRegEx = '/^[0-9]{1,3}$/';
		$yearRegEx = '/^[0-9]+$/';
		$UNPRegEx = '/^[a-zA-Z0-9!?() ]{0,300}$/';
		
		// Check each variable and set the error message accordingly

		if (!preg_match($UNPRegEx, $username)) {
			$error = 'Invalid username';
		}
		else if (!preg_match($UNPRegEx, $password)) {
			$error = 'Invalid password';
		}
	}
?>


















