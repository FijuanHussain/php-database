<?php 
	session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Welcome Page</title>
</head>
<body>

	<h1>Welcome, <?php
	     if(isset($_SESSION['username'])){
	     	echo $_SESSION['username'];
	     }
	     else {
	     	header("Location:Logout.php");
	     }

	 ?>
	 	
	 </h1>

	<p><a href="userlist.php">Click here</a> to get all user data</p>

	<p>Click here to <a href="Logout.php">Logout</a></p>

</body>
</html>