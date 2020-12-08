<?php

include('../data/data.php');
if(isset($_POST['Login'])){
	if(!empty($_POST['username'])){
		
		$username=$_POST['username'];
	}
	
	if(!empty($_POST['pass'])){
		
		$pass=$_POST['pass'];
	}
	
	$query = $db-> prepare("select * from users where username=? and pass=?");
	$query->execute(array($username,$pass));
	$nrows = $query->rowcount();
	if ($nrows>0){
		session_start();
		$_SESSION['name'] = "MBA";
		$_SESSION['username'] =$username;
		header ("location: ../view/index.php");
	}
	else{
		echo "Worng username or password "."<br>"."<a href='../view/login.php' >try again</a>";
	}
}
?>