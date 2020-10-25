<?php 
	$stdIdErr=$stdNameErr=$stdGenderErr=$stdEmailErr=$stdAddressErr=$cityErr=$stateErr=$countryErr="";
	$stdId=$stdName=$stdGender=$stdEmail=$stdAddress=$addressLine2=$city=$state=$zip=$country="";
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(empty($_REQUEST["stdId"])) {
				  $stdIdErr = "Student Id is required";
			}
		else {
				$stdId= $_REQUEST["stdId"];
			}
		if(empty($_REQUEST["stdName"])) {
				  $stdNameErr = "Student Name is required";
			}
		else {
				$stdName= $_REQUEST["stdName"];
			}
		if(empty($_REQUEST["gender1"])){
				$gender1= "";
			}
			else{
				$gender1= $_REQUEST["gender1"];
			}
		if(empty($_REQUEST["gender2"])){
				$gender2= "";
			}
			else{
				$gender2= $_REQUEST["gender2"];
			}
		if(empty($_REQUEST["gender1"]) && empty($_REQUEST["gender2"]))
		{
			$stdGenderErr = "Please Select One";
		}
		if($gender1 != "" && $gender2 != "" )
		{
			$stdGenderErr = "Please Select One";
		}
		else{
			if($gender1 != ""){
				$stdGender=$gender1;
			}
			else{
				$stdGender=$gender2;
			}
		}
		if(empty($_REQUEST["stdEmail"])) {
				  $stdEmailErr = "Email is required";
			}
		else {
				$stdEmail= $_REQUEST["stdEmail"];
			}
		if(empty($_REQUEST["address"])) {
				  $stdAddressErr = "Address is required";
			}
		else {
				$stdAddress= $_REQUEST["address"];
			}
		$addressLine2=$_REQUEST["addressLine2"];
		if(empty($_REQUEST["city"])) {
				  $cityErr = "City required";
			}
		else {
				$city= $_REQUEST["city"];
			}
		if(empty($_REQUEST["state"])) {
				  $stateErr = "Sate required";
			}
		else {
				$state= $_REQUEST["state"];
			}
		$Zip=$_REQUEST["zip"];
		if(empty($_REQUEST["country"])) {
				  $countryErr = "Country is required";
			}
		else {
				$country= $_REQUEST["country"];
			}
		function display(){

		}
	}
 ?>

<!doctype>
<html>
	<head>
		<title>Form Validation</title>
	</head>
	<body>
		<h1>Student Form</h1>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" >
			Student Id<br/>
			<?php echo $stdIdErr."<br/>"; ?>
			<input type="text" name="stdId" required />
			
			<br/><br/>
			Student Name<br/>
			<?php echo $stdNameErr."<br/>"; ?>
			<input type="text" name="stdName" required />
			
			<br/><br/>
			Gender<br>
			<?php echo $stdGenderErr."<br/>"; ?>
			<input type="checkbox" name="gender1" value="Male" />
			Male<br>
			<input type="checkbox" name="gender2" value="Female" />
			Female<br>
			<br/><br/>
			Student Email</br>
			<?php echo $stdEmailErr."<br/>"; ?>
			<input type="text" name="stdEmail" value="" placeholder="@" required />
			<br/><br/>
			Address</br>
			<?php echo $stdAddressErr."<br/>"; ?>
			
			<textarea name="address" cols="34" rows="1" ></textarea><br/>
			Street Address</br>
			<textarea name="addressLine2" cols="34" rows="1" ></textarea><br/>
			Address Line 2</br>
			<input type="text" name="city" required /><br/>
			
			City<br/>
			<input type="text" name="state" required /><br/>
			<?php echo $stateErr."<br/>"; ?>
			<small>State/Provience/Region</small><br/>
			<input type="text" name="zip" />
			<br/>
			Zip/Postal Code
			<br/>
			<select name="country"  >
				<option name="country" value="" ></option>
				<option name="country" value="Bangladesh" >Bangladesh</option>
				<option name="country" value="India" >India</option>
				<option name="country" value="Pakistan" >Pakistan</option>
			</select><br/>
			<?php echo $countryErr."<br/>"; ?>
			
			<input type="submit" name="" value="Save Form" />
			
		</form>
	</body>
	<?php
		echo "Student Id: ".$stdId."<br>";
		echo "Student Id: ".$stdName."<br>";
		echo "Student Gender: ".$stdGender."<br>";
		echo "Email Address: ".$stdEmail."<br>";
		echo "Street Address: ".$stdAddress."<br>";
		echo "Address line2: ".$addressLine2."<br>";
		echo "City: ".$city."<br>";
		echo "State/Provience/Region: ".$state."<br>";
		echo "Zip/Postal: ".$zip."<br>";
		echo "Country: ".$country."<br>";
	
	?>
</html>