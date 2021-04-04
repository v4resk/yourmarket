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

<!-- HEADER -->
	<div class="headr">
		<a href="index.php"><img src="logo.png" height="150" width="200"></a>
	</div>
	<div class="row" id="">
		<nav class="navbar navbar-default" role="navigation">
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-left">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navBarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
						<div class="dropdown-menu" aria-labelledby="navBarDropdownMenuLink">
							<a class="dropdown-item" href="wine.php" style="color:grey; ">Wine</a><br>
							<a class="dropdown-item" href="beer.php" style="color: grey;  ">Beer</a><br>
							<a class="dropdown-item" href="liquor.php" style="color:grey; ">Liquor</a><br>
						</div>
					</li>
					<li>
						<a class="nav-link dropdown-toggle" href="#" id="navBarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Buying</a>
						<div class="dropdown-menu" aria-labelledby="navBarDropdownMenuLink">
							<a class="dropdown-item" href="buyItNow.php" style="color:grey; ">Buy it now</a><br>
							<a class="dropdown-item" href="bestOffer.php" style="color: grey; ">Best offer</a><br>
							<a class="dropdown-item" href="auctions.php" style="color:grey; ">Auctions</a><br>
						</div>
					</li>  
					<li><a href="sell.php">Sell</a></li>
					<li><a href="updateUserInfo.php">Update your Information</a></li>
					<li><a href="userItems.php">Manage Items</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="cart.php"><img src="cart.png" width="30" height="30" ></a></li>
					<li><a href="signInOrSignUp.php"><img src="profile_icon.png" width="30" height="30"></a></li>
				</ul>
			</div>
        </nav>
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
	
	
	</div>
	<form action="index.php" method="POST">
		<p style="text-align: center;"><input style="text-align: center;" type="submit" name="killSession" value="Log out"></p>
	</form>

<!--FOOTER-->
	
<footer class="site-footer">
		<div class="container">
		<div class="row">
			
		
			<div class="col-mb-5"> 
				<h4>Contact Adress</h4>
				<address>
					<br>
					HA3 5FB Mondrian Court <br>
					10 Artisan Place <br>
					Harrow <br>(  )
					Wealdstone
				</address>

			</div>
			</div>
			<div class="bottom-footer">
			<div class="col-mb-7">@ Copyright YourMarket 2021</div>

			<ul class="footer-nav">
				<li> <a href = "index.php">Home</a></li>
				<li> <a href="mailto:support@yourmarket.com">Contact</li>
				<p> support@yourmarket.com</p>
				<p>+44 7800 987654</p>
			</ul>
			
	</div>
	</div>
	</footer>
</body>
</html>  