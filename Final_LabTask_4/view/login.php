<!DOCTYPE html>
<html>
<title>Login</title>
<body>

<h1>Login</h1>
<form action="../controller/valilogin.php" method="POST" >
	<label for="username" >Username</label>
	<input type="text" name="username" id="username" Required >
	<br>
	<br>
	<label for="pass" >Password</label>
	<input type="password" name="pass" id="pass" Required >
	<br>
	<br>
	<input type="submit" name="Login"  value="Login">
</form>

</body>
</html>