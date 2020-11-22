<?php
$unerror = "";
$uname = "";
$paserror ="";
$Pas ="";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(empty($_REQUEST["Uname"]))
	{
		$unerror ="please enter the username";
	}
	
	else
	{
		$uname = $_REQUEST["Uname"]; 
	}
	
		if(empty($_REQUEST["password"]))
	{
		$paserror ="please enter the password";
	}
	
	else
	{
		$Pas = $_REQUEST["password"]; 
	}
}


?>


<!DOCTYPE html>
<html>
<head>
<title>LOgin</title>
</head>
<body>

<?php

Include ('../view/header.php');

?>


<h1>login From</h1>
<form action="../controller/action_login.php" method="POST">
  <label for="Uname">User name:</label><br>
  <input type="text" id="Uname" name="Uname" value=""><br><?php echo $unerror ; ?><br>
  <label for="password">Password:</label><br>
  <input type="text" id="password" name="password" value=""><br><?php echo"      ". $paserror ; ?><br><br><br>
  <input type="submit" value="login">
  <br><br>
</form>



</body>
</html>
