<!DOCTYPE html>
<html>
<head>

<title></title>
<link rel="Stylesheet" href="">

</head>
<body>
<div class="myDivElement">
<ul>
<li><a class="active" href="">Here You Can</a></li><br>

<li><a href="profile.php">Profile</a></li><br>
<li><a href="login.php">DeleteSelfInformation</a></li><br>
<li><a href="login.php">CancelBooking</a></li><br>
<li><a href="login.php">SearchBooking</a></li><br>
<li><a href="login.php">SearchUser</a></li><br>
<li><a href="AddProperty.php">AddProperty</a></li><br>
<li><a href="ViewProperty.php">ViewProperty</a></li><br>
<li><a href="ViewClientInformation.php">ViewClient Information</a></li><br>
<li><a href="ViewBookingList.php">ViewBooking List</a></li><br>
<li><a href="SearchProperty.php">SearchProperty</a></li>
</ul>

<form action="../controller/action_logout.php" method="post">
<input style="color:green" type="submit" value="Log Out" name="">
</form>
<style>

.myDivElement{
text-align:center;
}
.myDivElement ul li{
display:inline;

 }
</style>

</body>
</html>