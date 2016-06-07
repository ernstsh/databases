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
		<h1>Add a Horse</h1>
		<form method="post" action="addHorse.php">
			<h3>Horse Information</h3>
			<label>Name</label>
				<input type="text" name="name" required>
			<br>
			<label>Breed</label>
				<input type="text" name="breed" required>
			<br>
			<label>Registration</label>
				<input type="text" pattern = "[a-zA-Z0-9 ]{3,15}" title = "enter numbers & letters !" name="reg" required>
			<br>
			<label>Gender</label><br>
				<input type="radio" name="gender" value="Stallion">Stallion<br>
				<input type="radio" name="gender" value="Gelding">Gelding<br>
				<input type="radio" name="gender" value="Mare">Mare
			<br>
			<label>Age</label>
				<input type="text" pattern = "[0-9 ]{1,2}" title = "enter numbers !" name="age" required>
			<br>
			<label>Height</label>
				<input type="text" pattern = "[0-9. ]+" title = "enter numbers in this format #.#!" name="height" required>
			<br>
			<label>Owner</label>
				<input type="text" pattern = "[a-zA-Z ]{1,30}" title = "enter letters between 1 to 30!" name="owner" required>
			<br>
			<label>Leasee</label>
				<input type="text" pattern = "[a-zA-Z ]{4,30}" title = "enter in 'none' for now!"name="leasee" required>
			<br>
			
			<h3>Vet Information</h3>
			<label>First Name</label>
				<input type="text" pattern = "[a-zA-Z ]{1,20}" title = "enter letters 1 to 20!" name="vfirstName" required> <br>
			<label>Last Name</label>
				<input type="text" pattern = "[a-zA-Z ]{1,20}" title = "enter letters 1 to 20!" name="vlastName" required> <br>
			<label>Phone</label>
				<input type="text" pattern = "[0-9- ]{12,13}" title = "enter numbers in this format ###-###-#### !" name="vphone" required> <br>
			<h3>Vet Office Location</h3>
			<label>Street Address</label>
				<input type="text" pattern = "[a-zA-Z0-9 ]{6,30}" title = "enter letters 6 to 20!" name="vstreet" required> <br>
			<label>City</label>
				<input type="text" pattern = "[a-zA-Z ]{3,30}" title = "enter letters 3 to 30!" name="vcity" required> <br>
			<label>State</label>
				<input type="text" pattern = "[a-zA-Z]{2}" title = "enter 2 letters !" name="vstate" required> <br>
			<label>Zip Code</label>
				<input type="text" pattern = "[0-9]{5}" title = "enter 5 numbers" name="vzip" required> <br>
				
			<h3>Farrier Information</h3>
			<label>First Name</label>
				<input type="text" pattern = "[a-zA-Z ]{1,20}" title = "enter letters 1 to 20!" name="ffirstName" required> <br>
			<label>Last Name</label>
				<input type="text" pattern = "[a-zA-Z ]{1,20}" title = "enter letters 1 to 20!" name="flastName" required> <br>
			<label>Phone</label>
				<input type="text" pattern = "[0-9- ]{12,13}" title = "enter numbers in this format ###-###-#### !" name="fphone" required> <br>
			<h3>Farrier Mailing Address</h3>
			<label>Street Address</label> <br>
				<input type="text" pattern = "[a-zA-Z0-9 ]{6,30}" title = "enter letters 6 to 20!" name="fstreet" required> <br>
			<label>City</label> 
				<input type="text" pattern = "[a-zA-Z ]{3,30}" title = "enter letters 3 to 30!" name="fcity" required> <br>
			<label>State</label>
				<input type="text" pattern = "[a-zA-Z]{2}" title = "enter 2 letters !" name="fstate" required> <br>
			<label>Zip Code</label>
				<input type="text" pattern = "[0-9]{5}" title = "enter 5 numbers" name="fzip" required> <br>
				
			<h3>Training Program</h3>
			<label>Number of Days Per Week</label>
				<input type="text" pattern = "[0-9]{1,7}" title = "enter a number 1 to 7" name="dayPW" required> <br>
			<label>Disciplines (Check all that apply)</label> <br>
				<input type="checkbox" name="English" value="1">English
				<input type="checkbox" name="Western" value="1">Western
				<input type="checkbox" name="Dressage" value="1">Dressage
				<input type="checkbox" name="Hunter" value="1">Hunter <br>
				<input type="checkbox" name="Jumping" value="1">Jumping
				<input type="checkbox" name="CrossCountry" value="1">Cross Country
				<input type="checkbox" name="Barrels" value="1">Barrels 
				<input type="checkbox" name="Reining" value="1">Reining <br>
				<input type="checkbox" name="Cutting" value="1">Cutting
				<input type="checkbox" name="Driving" value="1">Driving
				<input type="checkbox" name="Roping" value="1">Roping
				<input type="checkbox" name="SaddleSeat" value="1">Saddle Seat <br>
				<input type="checkbox" name="Showmanship" value="1">Showmanship
				<input type="checkbox" name="Halter" value="1">Halter
				<input type="checkbox" name="Endurance" value="1">Endurance
				<input type="checkbox" name="Trail" value="1">Trail <br>
			<input type="submit" name="submit" value="Submit">
		</form>
	</div>
</body>
</html>