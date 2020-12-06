<?php
$SellerFirstNameerror = "";
$SellerLastNameerror = "";
$SellerPhoneNumbererror = "";
$SellerEmailAddresserror ="";
$SellerGendererror ="";
$SellerPassworderror="";

$SellerFirstName=$SellerLastName=$SellerPhoneNumber=$SellerEmailAddress=$SellerGender=$SellerPassword="";


if($_SERVER["REQUEST_METHOD"] == "POST")
{
	
	if(empty($_REQUEST["SellerFirstName"]))
	{
		$SellerFirstNameerror ="please enter the FirstName";
	}
	
	else
	{
		$SellerFirstName = $_REQUEST["SellerFirstName"]; 
	}
	
	if(empty($_REQUEST["SellerLastName"]))
	{
		$SellerLastNameerror ="please enter the LastName";
	}
	
	else
	{
		$SellerLastName = $_REQUEST["SellerLastName"]; 
	}
	
	
	if(empty($_REQUEST["SellerPhoneNumber"]))
	{
		$SellerPhoneNumbererror ="please enter the PhoneNumber";
	}
	
	else
	{
		$SellerPhoneNumber = $_REQUEST["SellerPhoneNumber"]; 
	}
	
	
	if(empty($_REQUEST["SellerEmailAddress"]))
	{
		$SellerEmailAddresserror ="please enter the EmailAddress";
	}
	
	else
	{
		$SellerEmailAddress = $_REQUEST["SellerEmailAddress"]; 
	}
	
	if(empty($_REQUEST["SellerGender"]))
	{
		$SellerGendererror ="please enter the Gender";
	}
	
	else
	{
		$SellerGender = $_REQUEST["SellerGender"]; 
	}
	
	
	if(empty($_REQUEST["SellerPassword"]))
	{
		$SellerPassworderror ="please enter the Password";
	}
	
	else
	{
		$SellerPassword = $_REQUEST["SellerPassword"]; 
	}
	
$fileW = fopen("../data/sp.txt", "w") or die("Unable to open file");


fwrite($fileW, $SellerFirstName);
fwrite($fileW, $SellerLastName);
fwrite($fileW, $SellerPhoneNumber);
fwrite($fileW, $SellerEmailAddress);
fwrite($fileW, $SellerGender);
fwrite($fileW, $SellerPassword);


fclose($fileW);	
	
}




?>

<!DOCTYPE html>
<html>
<head>
<title>Seller_reg_from</title>
</head>
<body>

<?php

Include ('../view/header.php');

?>

<h1>Seller Registration Form</h1>
<form action="../controller/action_signup.php" method="POST">
  <label for="SellerFirstName">First name:</label><?php echo $SellerFirstNameerror ; ?><br>
  <input type="text" id="SellerFirstName" name="SellerFirstName" value="" placeholder ="enter your FirstName"><br>
  
  <label for="SellerLastName">last name:</label><?php echo $SellerLastNameerror ; ?><br>
  <input type="text" id="SellerLastName" name="SellerLastName" value="" placeholder ="enter your LastName"><br>
  
  <label for="SellerPhoneNumber">Phone Number:</label><?php echo $SellerPhoneNumbererror ; ?><br>
  <input type="text" id="SellerPhoneNumber" name="SellerPhoneNumber" value="" placeholder ="enter your PhoneNumber"><br>
  
  <label for="SellerEmailAddress">Email Address:</label><?php echo $SellerEmailAddresserror ; ?><br>
  <input type="text" id="SellerEmailAddress" name="SellerEmailAddress" value="" placeholder ="enter your EmailAddress"><br>
  
   <label for="SellerGender">Gender:</label><?php echo $SellerGendererror ; ?><br>
  <input type="text" id="SellerGender" name="SellerGender" value="" placeholder ="enter your Gender"><br>
  
  <label for="SellerPassword">Password:</label><?php echo $SellerPassworderror ; ?><br>
  <input type="text" id="SellerPassword" name="SellerPassword" value="" placeholder ="enter your password"><br><br>
  <input type="submit" value="Submit">
  <input type="reset" value="reset">

  <br><br>
</form>






</body>
</html>





