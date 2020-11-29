<?php
	ob_start();
	session_start();
	if($_SESSION['name']!='MBA'){
		header("location: ../view/login.php");
	}
	else{
	$username= $_SESSION['username'];
	
	}
	include('../data/data.php');
?>
<!DOCTYPE html>
<html>
<title>Home</title>
<body>

<h1>Mobile Banking App</h1>


</body>
</html>