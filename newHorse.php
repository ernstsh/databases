<!DOCTYPE PHP>
<html>
<head>
</head>
<body>
	<div>
		<h3>Add a Horse</h3>
		<form method="post" action="addHorse.php">
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
			<input type="submit" name="submit" value="Submit">
		</form>
	</div>
</body>
</html>