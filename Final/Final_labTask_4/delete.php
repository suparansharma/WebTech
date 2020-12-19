<?php
include ("config.php");
	if(isset ($_REQUEST['id']) )
	{
		$id= $_REQUEST['id'];
	}
	else
	{
		header('location:Final_labTask_3_index.php');
	}
	$stmt = $conn -> prepare("DELETE from users WHERE id = ?");
	$stmt -> bind_param("i", $id);
	$stmt -> execute();
	echo "Deleted rows"."<br>";
	echo "<a href='Final_labTask_3_index.php' >back</a>";
?>




<!DOCTYPE html>
<html>
<head>
<title>DELETE</title>
</head>
<body>

<h1>User DELETE Information</h1>

<a href="Final_labTask_3_index.php">Back</a>
</body>
</html>