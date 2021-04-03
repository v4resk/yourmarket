<?php ini_set('display_errors', 'on');?>
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


	<div class="col tex-center">
	
	<br>
	<br>
	<h1 style="text-align: center;">Your Personal Information</h1>
	<br>
	<br>
	<p style="text-align: center;"><?php echo "E-Mail : " . $_SESSION['db_user']->getEmail() . "<br>";?></p>
	<p style="text-align: center;"><?php echo "Name : " . $_SESSION['db_user']->getName() . "<br>";?></p>	
	<p style="text-align: center;"><?php echo "First Name : " . $_SESSION['db_user']->getFirstName() . "<br>";?></p>	
	<p style="text-align: center;"><?php echo "Password : " . $_SESSION['db_user']->getPasswd() . "<br>";	?></p>
	<p style="text-align: center;"><?php echo "Favorite Background : " . $_SESSION['db_user']->getFavBackgroundNo() . "<br>";	?></p>
	<p style="text-align: center;"><?php echo "Adress 1 : " . $_SESSION['db_user']->getAddr1() . "<br>";?></p>	
	<p style="text-align: center;"><?php echo "Adress 2 : " . $_SESSION['db_user']->getAddr2() . "<br>";?></p>	
	<p style="text-align: center;"><?php echo "City : " . $_SESSION['db_user']->getCity() . "<br>";?>	</p>
	<p style="text-align: center;"><?php echo "Zip : " . $_SESSION['db_user']->getZip() . "<br>";?>	</p>
	<p style="text-align: center;"><?php echo "Country : " . $_SESSION['db_user']->getCountry() . "<br>";	?></p>
	<p style="text-align: center;"><?php echo "Phone number : " . $_SESSION['db_user']->getPhone() . "<br>";?></p>
	<p style="text-align: center;"><?php echo "Date Of Birth : " . $_SESSION['db_user']->getDateOfBirth() . "<br>";?></p>	
	
	
	<p style="text-align: center;"><a  href="updateUserInfo.php">If you want to update your information, please click here !</a></p>
	</div>
	<form action="index.php" method="POST">
		<p style="text-align: center;"><input style="text-align: center;" type="submit" name="killSession" value="Log out"></p>
	</form>
	

</body>
</html>  