<?php



$PropertyLocationerror = "";
$PropertyItemserror = "";



$PropertyLocation=$PropertyItem="";



if($_SERVER["REQUEST_METHOD"] == "POST")
{
	
	
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
	
	
	
	
	
	
	
}




?>


<?php

$PropertyLocationerror = "";
$PropertyItemserror = "";



$PropertyLocation=$PropertyItem="";
?>


<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<center>
<?php

Include ('../view/header.php');

?>

<h1>Search Property</h1>

<form action="../controller/action_SearchProperty.php" method="POST">

  <label for="PropertyLocation">Property Location:</label><?php echo $PropertyLocationerror ; ?>
  <input type="text" id="PropertyLocation" name="PropertyLocation" value="" placeholder ="enter your PropertyLocation"><br>
  
  <label for="PropertyItems">Choose Property Items:</label><?php echo $PropertyItemserror ; ?>

<select name="PropertyItems" id="PropertyItems">
  <option value="Flat">Flat</option>
  <option value="Land">Land</option>
  
</select><br>
<input type="submit" value="search">
  <input type="reset" value="reset">
  <br><br>

<table>
  <tr>
       <th>Location</th>
    <th>Property Items</th>
    <th>Contact</th>
  </tr>
  <tr>
    <td> </td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td><td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</center>
</body>
</html>