<!DOCTYPE PHP>
<!--Landing page-->
<?php
   session_start();
   include('_header.php');
   include ('Session.php');
?>
<html>
   
   <head>
      <title>Dashboard</title>
   </head>
   
   <body>
      <?php echo $login_session; echo $user_check; echo $row[0]; print_r($_SESSION);?>
	  <br><a href="newHorse.php">Add a Horse</a>
   </body>
   
</html>