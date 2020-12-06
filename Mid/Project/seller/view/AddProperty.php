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
<title>Add_Property</title>
</head>
<body>


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
<form action="../controller/action_logout.php" method="post">
<input style="color:green" type="submit" value="Log Out" name="">  
  

  <br><br>
</form>


</center>



</body>
</html>