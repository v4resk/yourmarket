
<?php require '../App/init.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>My account</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="template.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
	<div class="headr">
		<a href="index.php"><img src="logo.png" height="150" width="200"></a>
	</div>
  

	<?php

	if(isset($_POST["email"]))
	{
		$_SESSION['db_user']->setEmail($_POST["email"]);
	}
	if (isset($_POST["name"])) {
		$_SESSION['db_user']->setName($_POST["name"]);		
	}
	if(isset($_POST["firstName"])){
		$_SESSION['db_user']->setFirstName($_POST["firstName"]);	
	}
	if(isset($_POST["dateOfBirth"])){
		$_SESSION['db_user']->setDateOfBirth($_POST["dateOfBirth"]);		
	}
	if(isset($_POST["password"])){
		$_SESSION['db_user']->setPasswd($_POST["password"]);	
	}
	if(isset($_POST["favBackGround"])){
		$_SESSION['db_user']->setFavBackgroundNo($_POST["favBackGround"]);		
	}
	if(isset($_POST["addr1"])){
		$_SESSION['db_user']->setAddr1($_POST["addr1"]);		
	}
	if (isset($_POST["addr2"])) {
		$_SESSION['db_user']->setAddr2($_POST["addr2"]);		
	}
	if(isset($_POST["city"])){
		$_SESSION['db_user']->setCity($_POST["city"]);		
	}
	if(isset($_POST["zip"])){
		$_SESSION['db_user']->setZip($_POST["zip"]);		
	}
	if(isset($_POST["country"])){
		$_SESSION['db_user']->setCountry($_POST["country"]);
	}
	if(isset($_POST["phone"])){
		$_SESSION['db_user']->setPhone($_POST["phone"]);
	}
	if ($_POST["dateOfBirth"]) {
		$_SESSION['db_user']->setDateOfBirth($_POST["dateOfBirth"]);	
	}

	?>

	<form action="" method="post">

		<div class="form-group">
			<label for="email" style="margin-left: 450px;">E Mail</label>
			<input type="email" class="form-control is-valid" name="email" aria-describedby="emailHelp" placeholder="<?php echo $_SESSION['db_user']->getEmail()?>" value="<?php echo $_SESSION['db_user']->getEmail()?>"style="width: 35%; margin-left: 450px; ">
		</div>
		<div class="form-group">
			<label for="name" style="margin-left: 450px;">Name</label>
			<input type="text" class="form-control is-valid" name="name" aria-describedby="nameHelp" placeholder="<?php echo $_SESSION['db_user']->getName()?>" value="<?php echo $_SESSION['db_user']->getName()?>"style="width: 35%; margin-left: 450px; ">
		</div>
		<div class="form-group">
			<label for="firstName" style="margin-left: 450px;">First Name</label>
			<input type="text" class="form-control is-valid" name="firstName" aria-describedby="firstNameHelp" placeholder="<?php echo $_SESSION['db_user']->getFirstName()?>" value="<?php echo $_SESSION['db_user']->getFirstName()?>" style="width: 35%; margin-left: 450px; ">
		</div>
		<div class="form-group">
			<label for="password" style="margin-left: 450px;">Password</label>
			<input type="password" class="form-control is-valid" name="password" aria-describedby="passwordHelp" placeholder="<?php echo $_SESSION['db_user']->getPasswd()?>" value="<?php echo $_SESSION['db_user']->getPasswd()?>" style="width: 35%; margin-left: 450px; ">
		</div>
		<div class="form-group">
			<label for="favBackGround" style="margin-left: 450px;">Favorite Background</label>
			<input type="number" class="form-control is-valid" name="favBackGround" aria-describedby="favBackGroundHelp" placeholder="<?php echo $_SESSION['db_user']->getFavBackgroundNo()?>" value="<?php echo $_SESSION['db_user']->getFavBackgroundNo()?>" style="width: 35%; margin-left: 450px; ">
		</div>
		<div class="form-group">
			<label for="addr1" style="margin-left: 450px;">Address 1</label>
			<input type="text" class="form-control is-valid" name="addr1" aria-describedby="addr1Help" placeholder="<?php echo $_SESSION['db_user']->getAddr1()?>" value="<?php echo $_SESSION['db_user']->getAddr1()?>" style="width: 35%; margin-left: 450px; ">
		</div>
		<div class="form-group">
			<label for="addr2" style="margin-left: 450px;">Address 2</label>
			<input type="text" class="form-control is-valid" name="addr2" aria-describedby="addr2Help" placeholder="<?php echo $_SESSION['db_user']->getAddr2()?>" value="<?php echo $_SESSION['db_user']->getAddr2()?>" style="width: 35%; margin-left: 450px; ">
		</div>
		<div class="form-group">
			<label for="city" style="margin-left: 450px;">City</label>
			<input type="text" class="form-control is-valid" name="city" aria-describedby="cityHelp" placeholder="<?php echo $_SESSION['db_user']->getCity()?>" value="<?php echo $_SESSION['db_user']->getCity()?>" style="width: 35%; margin-left: 450px; ">
		</div>
		<div class="form-group">
			<label for="zip" style="margin-left: 450px;">Zip</label>
			<input type="text" class="form-control is-valid" name="zip" aria-describedby="zipHelp" placeholder="<?php echo $_SESSION['db_user']->getZip()?>" value="<?php echo $_SESSION['db_user']->getZip()?>" style="width: 35%; margin-left: 450px; ">
		</div>
		<div class="form-group">
			<label for="country" style="margin-left: 450px;">Country</label>
			<input type="text" class="form-control is-valid" name="country" aria-describedby="countryHelp" placeholder="<?php echo $_SESSION['db_user']->getCountry()?>" value="<?php echo $_SESSION['db_user']->getCountry()?>" style="width: 35%; margin-left: 450px; ">
		</div>
		<div class="form-group">
			<label for="phone" style="margin-left: 450px;">Phone</label>
			<input type="number" class="form-control is-valid" name="phone" aria-describedby="phoneHelp" placeholder="<?php echo $_SESSION['db_user']->getPhone()?>" value="<?php echo $_SESSION['db_user']->getPhone()?>" style="width: 35%; margin-left: 450px; ">
		</div>
		<div class="form-group">
		<label for="dateOfBirth" style="margin-left: 450px;">Date of Birth</label><br>
		<p style="text-align: center;"><?php echo $_SESSION['db_user']->getDateOfBirth()?><br></p>
		<p style="text-align: center;">If you would like to change, change it in the calendar below</p><br>
			<input type="date" class="form-control is-valid" name="dateOfBirth" aria-describedby="dateOfBirthHelp" placeholder="<?php echo $_SESSION['db_user']->getDateOfBirth()?>" max="2003-04-01" style="width: 35%; margin-left: 450px; " >
		</div>
		<button type="submit" class="btn" style="margin-left: 450px;" name="subSignUp">Submit</button><br><br>
	</form>
		


</body>
</html>   