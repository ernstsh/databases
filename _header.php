<?php
    session_start();
	//this is doe checking for login stuff 
   /*function checkAuth($doRedirect) {
	if (isset($_SESSION["onidid"]) && $_SESSION["onidid"] != "") return $_SESSION["onidid"];

	 $pageURL = 'http';
	 if (isset($_SERVER["HTTP"]) && $_SERVER["HTTP"] == "on") {$pageURL .= "s";}
	 $pageURL .= "://";
	 if ($_SERVER["SERVER_PORT"] != "80") {
	  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["SCRIPT_NAME"];
	 } else {
	  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["SCRIPT_NAME"];
	 }

	$ticket = isset($_REQUEST["ticket"]) ? $_REQUEST["ticket"] : "";

	if ($ticket != "") {
		$url = "https://login.oregonstate.edu/cas/serviceValidate?ticket=".$ticket."&service=".$pageURL;
		$html = file_get_contents($url);
		$pattern = '/\\<cas\\:user\\>([a-zA-Z0-9]+)\\<\\/cas\\:user\\>/';
		preg_match($pattern, $html, $matches);
		if ($matches && count($matches) > 1) {
			$onidid = $matches[1];
			$_SESSION["onidid"] = $onidid;
			return $onidid;
		} 
	} else if ($doRedirect) {
		$url = "https://login.oregonstate.edu/cas/login?service=".$pageURL;
		//echo $url;
		echo "<script>location.replace('" . $url . "');</script>";
	} 
	return "";
}*/

    
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
			<a href = "Login.php"> Login </a>
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
