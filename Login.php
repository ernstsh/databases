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
<div id = "megadiv" style = "top:0px; bottom: 0px; left: 0px; right: 0px; padding: 0px 25px 0px 25px; max-width: 99%; max-height: 99%;">   
			 <div > 
					<center><img src = "images/logov3_1.png" style = "max-width: 80%; max-height: 70%" ></center> <!-- width="1500" height="600"-->
	 
			 </div>
			   <hr style = "margin: 0px">
			   <br>
			   
			   <body style = "font-family:Arial, Helvetica, sans-serif; font-size:14px;" bgcolor = "#FFFFFF" >
			<div class = "container">
				<div style = " padding: 60px 60px 0px 15px " style = "float: left;  margin-left: 60px; width: 60px; height: 60px; ">
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
				
				   <p style = "font-size: 30px; max-width: 50%; max-height: 50%; border: 1px solid #FFFFFF; word-wrap: break-word;">
			The unanimous Declaration of the thirteen united States of America,
			He has refused his Assent to Laws, the most wholesome and necessary for the public good.
			He has forbidden his Governors to pass Laws of immediate and pressing importance, unless suspended in their operation till his Assent should be obtained; and when so suspended, he has utterly neglected to attend to them.

				   </P>
			</div>

</body>


</div>





</html>