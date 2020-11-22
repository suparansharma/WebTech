<?php
$PropertyAreaerror = "";
$PropertyLocationerror = "";
$PropertyItemserror = "";
$PropertyQuantityerror ="";
$PropertyPriceerror ="";


$PropertyArea=$PropertyLocation=$PropertyItem=$PropertyQuantity=$PropertyPrice="";


if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(empty($_REQUEST["PropertyArea"]))
	{
		$PropertyAreaerror ="please enter the username";
	}
	
	else
	{
		$PropertyArea = $_REQUEST["PropertyArea"]; 
	}
	
	if(empty($_REQUEST["PropertyLocation"]))
	{
		$PropertyLocationerror ="please enter the username";
	}
	
	else
	{
		$PropertyLocation = $_REQUEST["PropertyLocation"]; 
	}
	
	
	if(empty($_REQUEST["PropertyItem"]))
	{
		$PropertyItemerror ="please enter the username";
	}
	
	else
	{
		$PropertyItem = $_REQUEST["PropertyItem"]; 
	}
	
	
	if(empty($_REQUEST["PropertyQuantity"]))
	{
		$PropertyQuantityerror ="please enter the PropertyQuantity";
	}
	
	else
	{
		$PropertyQuantity = $_REQUEST["PropertyQuantity"]; 
	}
	
	if(empty($_REQUEST["PropertyPrice"]))
	{
		$PropertyPriceerror ="please enter the PropertyPrice";
	}
	
	else
	{
		$PropertyPrice = $_REQUEST["PropertyPrice"]; 
	}
	
	
	$fileW = fopen("../data/AddProperty.txt", "w") or die("Unable to open file");


fwrite($fileW, $PropertyAreaerror);
fwrite($fileW, $PropertyLocationerror);
fwrite($fileW, $PropertyItemserror);
fwrite($fileW, $PropertyQuantityerror);
fwrite($fileW, $PropertyPriceerror);


fclose($fileW);	
	
	
}




?>

<?php
$PropertyAreaerror = "";
$PropertyLocationerror = "";
$PropertyItemserror = "";
$PropertyQuantityerror ="";
$PropertyPriceerror ="";


$PropertyArea=$PropertyLocation=$PropertyItem=$PropertyQuantity=$PropertyPrice="";
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

<center>
<h1>Add Property</h1>

<form action="../controller/action_AddProperty.php" method="POST">
  <label for="PropertyArea">Property Area:</label><?php echo $PropertyAreaerror ; ?><br>
  <input type="text" id="PropertyArea" name="PropertyArea" value="" placeholder ="enter your Property Area"><br>
  
  <label for="PropertyLocation">Property Location:</label><?php echo $PropertyLocationerror ; ?><br>
  <input type="text" id="PropertyLocation" name="PropertyLocation" value="" placeholder ="enter your PropertyLocation"><br>
  
  <label for="PropertyItems">Choose Property Items:</label><?php echo $PropertyItemserror ; ?>

<select name="PropertyItems" id="PropertyItems">
  <option value="Flat">Flat</option>
  <option value="Land">Land</option>
  
</select><br>
  
  <label for="PropertyQuantity">Property Quantity:</label><?php echo $PropertyQuantityerror ; ?><br>
  <input type="text" id="PropertyQuantity" name="PropertyQuantity" value="" placeholder ="enter your PropertyQuantity"><br>
  
  <label for="PropertyPrice">Property Price:</label><?php echo $PropertyPriceerror ; ?><br>
  <input type="text" id="PropertyPrice" name="PropertyPrice" value="" placeholder ="enter your PropertyPrice"><br>
  
  
  <input type="submit" value="Submit">
  <input type="reset" value="reset">

  <br><br>
</form>


</center>



</body>
</html>





