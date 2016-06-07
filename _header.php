<?php
    session_start();    
?>

<html lang = "en">
<head>
	<meta charset = "utf-8">
	<meta name = "viewport" content = "width = device-width, initial-scale = 1">
	<title> Horse </title>
	<link href = "css/style.css" rel = "stylesheet">
	<link href = "images/logo.ico" rel = "shortcut icon">
</head>

<body>

	<!-- TOPBAR ==================================================================================-->
	<div id = "topbar">
		<a style = "border-bottom: 2px solid rgba(255, 255, 255, .3);" href = "Login.php"><img src = "images/logo.png" width="120" height="120" ></a>	
	</div>
	
	<!-- MAIN NAV ================================================================================-->
	
	<hr>
	<nav>
			<a href = "dashboard.php"> Landing </a>
			<a href = "Logout.php"> Logout </a>
			
			
			<!--
			<li>
				<a href = "ViewProfile.php" id = 'dropDownTop'> Account </a>
				<ul id = 'dropDownMenu'>
					<li><a href = "ViewProfile.php"> Profile </a></li>
					<li><a href = "logout.php"> Logout </a></li>
				</ul>
			</li>
			-->
	</nav>

</body>
	<!-- <hr> -->
	
</html>
