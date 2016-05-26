<!DOCTYPE PHP>
<html>
<head>
<link href = "css/style.css" rel = "stylesheet">
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
				<input type="text" name="reg">
			<br>
			<label>Gender</label><br>
				<input type="radio" name="gender" value="Stallion">Stallion<br>
				<input type="radio" name="gender" value="Gelding">Gelding<br>
				<input type="radio" name="gender" value="Mare">Mare
			<br>
			<label>Age</label>
				<input type="text" name="age">
			<br>
			<label>Height</label>
				<input type="text" name="height">
			<br>
			<label>Owner</label>
				<input type="text" name="owner">
			<br>
			<label>Leasee</label>
				<input type="text" name="leasee">
			<br>
			
			<h3>Vet Information</h3>
			<label>First Name</label>
				<input type="text" name="vfirstName"> <br>
			<label>Last Name</label>
				<input type="text" name="vlastName"> <br>
			<label>Phone</label>
				<input type="text" name="vphone"> <br>
			<h3>Vet Office Location</h3>
			<label>Street Address</label>
				<input type="text" name="vstreet"> <br>
			<label>City</label>
				<input type="text" name="vcity"> <br>
			<label>State</label>
				<input type="text" name="vstate"> <br>
			<label>Zip Code</label>
				<input type="text" name="vzip"> <br>
				
			<h3>Farrier Information</h3>
			<label>First Name</label>
				<input type="text" name="ffirstName"> <br>
			<label>Last Name</label>
				<input type="text" name="flastName"> <br>
			<label>Phone</label>
				<input type="text" name="fphone"> <br>
			<h3>Farrier Mailing Address</h3>
			<label>Street Address</label> <br>
				<input type="text" name="fstreet"> <br>
			<label>City</label> 
				<input type="text" name="fcity"> <br>
			<label>State</label>
				<input type="text" name="fstate"> <br>
			<label>Zip Code</label>
				<input type="text" name="fzip"> <br>
				
			<h3>Training Program</h3>
			<label>Number of Days Per Week</label>
				<input type="text" name="dayPW"> <br>
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