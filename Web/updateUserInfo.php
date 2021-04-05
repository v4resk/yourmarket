<?php require '../App/init.php'; ?>
<?php  require '../App/check_alert.php' ?>
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
					<li>
						<a class="nav-link dropdown-toggle" href="#" id="navBarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Update your Informations</a>
						<div class="dropdown-menu" aria-labelledby="navBarDropdownMenuLink">
							<a class="dropdown-item" href="updateUserInfo.php" style="color:grey; ">Update Personal Information</a><br>
							<a class="dropdown-item" href="billingInfo.php" style="color: grey; ">Update Billing Information</a><br>
						</div>
					</li>
					<li><a href="userItems.php">Manage Items</a></li>
					<li><a href="purchaseHistory.php">Purchase History</a></li>
					<li><a href="sellHistory.php">Sell History</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="cart.php"><img src="cart.png" width="30" height="30" ></a></li>
					<li><a href="signInOrSignUp.php"><img src="profile_icon.png" width="30" height="30"></a></li>
				</ul>
			</div>
        </nav>
	</div>	

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
		<input type="hidden" name="forDbUser">
		<button type="submit" class="btn" style="margin-left: 450px;" name="subUpdate">Submit</button><br><br>
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
