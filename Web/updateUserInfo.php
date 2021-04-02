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

	<form action="myAccount.php" method="post">

		<div class="form-group">
			<label for="email" style="margin-left: 450px;">Email</label>
			<input type="text" class="form-control is-valid" name="email" aria-describedby="nameHelp" placeholder="<?php echo $_SESSION['db_user']->getEmail()?>" value="<?php echo $_SESSION['db_user']->getEmail()?>"required style="width: 35%; margin-left: 450px; ">
		</div>


	<?php 



	echo "E-Mail : " . $_SESSION[db_user]->getEmail() . "<br>";
	echo "Name : " . $_SESSION[db_user]->getName() . "<br>";	
	echo "First Name : " . $_SESSION[db_user]->getFirstName() . "<br>";	
	echo "Password : " . $_SESSION[db_user]->getPasswd() . "<br>";	
	echo "Favorite Background : " . $_SESSION[db_user]->getFavBackgroundNo() . "<br>";	
	echo "Adress 1 : " . $_SESSION[db_user]->getAddr1() . "<br>";	
	echo "Adress 2 : " . $_SESSION[db_user]->getAddr2() . "<br>";	
	echo "City : " . $_SESSION[db_user]->getCity() . "<br>";	 
	echo "Zip : " . $_SESSION[db_user]->getZip() . "<br>";	 
	echo "Country : " . $_SESSION[db_user]->getCountry() . "<br>";	
	echo "Phone number : " . $_SESSION[db_user]->getPhone() . "<br>";		

	?>

	<a href="updateUserInfo.php">If you want to update your information, please click here !</a>

	</form>
</body>
</html> 