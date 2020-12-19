<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webtechlab";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn -> connect_error) {
	die("Error in db connection: " . $conn -> connect_error);
}

?>