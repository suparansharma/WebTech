<?php 
session_start(); 
include "..//view/dbconn.php";

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = validate($_POST['username']);
	$password = validate($_POST['password']);
    $email = validate($_POST['email']);

	$user_data = 'username='. $username. '&email='. $email;


	if (empty($username)) {
		header("Location: signup.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($password)){
        header("Location: signup.php?error=Password is required&$user_data");
	    exit();
	}
	

	else if(empty($email)){
        header("Location: signup.php?error=Name is required&$user_data");
	    exit();
	}

	

	else{

		// hashing the password
        $password = md5($pass);

	    $sql = "SELECT * FROM final6pro WHERE username='$username' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO final6pro(username, password,email) VALUES('$username', '$password', '$email')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: signup.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}


?>