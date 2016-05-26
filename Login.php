<?php
	session_start();
	include("Config.php");
	include("_header2.php");
	include("Session.php");
	
	if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $error = "";
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      //$sql = "SELECT id FROM login_T WHERE username = '$myusername' and password = '$mypassword'";
	  $sql = "SELECT * FROM login_T WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
	 //var_dump($result->password); 
	  //echo $sql->password;
	  //echo ($result->hash);
	  
			  $row = mysqli_fetch_array($result);
		if(password_verify($row[1],$row[3])){
			  //echo $row['id'];
			  //echo $row[3];
			  $active = $row['active'];
			  
			 $count = mysqli_num_rows($result);
			  //echo $count;
			 
			  // If result matched $myusername and $mypassword, table row must be 1 row
				
			  if($count == 1) {
				 
				 //session_register("myusername");
				 $_SESSION['login_user'] = $myusername;
				 $_SESSION['id'] = $row[2];
				 echo '<meta http-equiv="refresh" content="0; url=dashboard.php" />';
				 //echo '<meta http-equiv="refresh" content="0; url=landing.php" />';
			  } 
		}
	  
	  			  else {
				$error = "Your Login Name or Password is invalid";
			   }
	  
   }
   
?>
<html>
   
   <head>
      <title>Login Page</title>
   </head>
   
 <div style = " padding: 60px 0px 60px 25px "> 
   
<img src = "images/logo.png" width="120" height="120" > 
<img src = "images/logo.png" width="120" height="120" > 
<img src = "images/logo.png" width="120" height="120" > 
<img src = "images/logo.png" width="120" height="120" >
<img src = "images/logo.png" width="120" height="120" >
<img src = "images/logo.png" width="120" height="120" >
<img src = "images/logo.png" width="120" height="120" >
<img src = "images/logo.png" width="120" height="120" >
<img src = "images/logo.png" width="120" height="120" >
<img src = "images/logo.png" width="120" height="120" >
<img src = "images/logo.png" width="120" height="120" >
<img src = "images/logo.png" width="120" height="120" >
<img src = "images/logo.png" width="120" height="120" >
<img src = "images/logo.png" width="120" height="120" >
<img src = "images/logo.png" width="120" height="120" >   
 </div>
   <hr>
   <br>
   
   <body style = "font-family:Arial, Helvetica, sans-serif; font-size:14px;" bgcolor = "#FFFFFF">
<div class = "container">
	<div style = " padding: 60px 60px 0px 15px " style = "float: left;  margin-left: 60px; width: 60px; height: 60px;">
	   <br>
	   <p style = "font-size: 30px">
	   Filler
	   Filler
	   Filler
	   Filler
	   Filler
	   Filler
	   Hi
	   </P>
			
    </div>
	
      <div style = " padding: 0px 60px 60px 0px; float: right " align = "Right">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label style = "font-weight:bold; width:100px; font-size:14px;" >UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label style = "font-weight:bold; width:100px; font-size:14px;" >Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br/>				  
               </form>
			   <u><a href = "signUp.php">Sign Up</a></u>
			   
               <div style = "font-size:11px; color:#FFFFFF; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>
</div>

   </body>

</html>