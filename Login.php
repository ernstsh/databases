<?php
	session_start();
	include("Config.php");
	include("_header.php");
	
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
				 echo '<meta http-equiv="refresh" content="0; url=landing.php" />';
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
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "text" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
			   
               <div style = "font-size:11px; color:#FFFFFF; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>