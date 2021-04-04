
<?php require '../App/init.php'; ?>
<?php  require '../App/check_alert.php' ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
		<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="template.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
	<div class="headr">
		<a href="admin.php"><img src="logo.png" height="150" width="200"></a>
	</div>
<div class="row" id="">
		<nav class="navbar navbar-default" role="navigation">
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-left">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navBarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">user</a>
						<div class="dropdown-menu" aria-labelledby="navBarDropdownMenuLink">
						<a class="dropdown-item" href="adduser.php" style="color:grey; ">Add User</a><br>
							<a class="dropdown-item" href="deleteuser.php" style="color: grey;  ">Delete User</a><br>
							<a class="dropdown-item" href="updateuser.php" style="color:grey; ">Update User</a><br>
						</div>
					</li>
					<li>
						<a class="nav-link dropdown-toggle" href="#" id="navBarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Items</a>
					
					</li>
					<li><a href="order.php">Order</a></li>
					<li><a href="billinfo.php">Bill info</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="cart.html"><img src="cart.png" width="30" height="30" ></a></li>
					<li><a href="signInOrSignUp.php"><img src="profile_icon.png" width="30" height="30"></a></li>
				</ul>
			</div>
        </nav>
	</div>

<!--NAV-->
	
	<?php

	
	?>


	<div class="navigation" >
		<?php 
		$sqlQuery="SELECT * FROM User";
		$statement=$db->query($sqlQuery);?>
		<form action="" method="post">
			<label for="update_user" style="margin-left: 42%;">Choose an user to update</label>
			<input list="list" name="update_user" autocomplete="off" style="margin-left: 42%;">
			<datalist id="list">
			<?php
			while ($result=$statement->fetch()) {
				?>
				<option value="<?php echo $result["email"] ;?>">
				<?php
			}

			?>
			</datalist>
			<input type="submit" name="updateSubmit" value="Select">

			<?php  
				if(isset($_POST["updateSubmit"])){


			?>
			<div class="form-group">
				<label for="email" style="margin-left: 450px;">Email</label>
				<input type="email" class="form-control is-valid" name="email" aria-describedby="emailHelp" placeholder=" <?php echo $_SESSION['admin_user_to_update']->getEmail() ?>" value="<?php echo $_SESSION['admin_user_to_update']->getEmail()?>" style="width: 35%; margin-left: 450px; ">
			</div>

			<div class="form-group">
				<label for="name" style="margin-left: 450px;">Name</label>
				<input type="text" class="form-control is-valid" name="name" aria-describedby="nameHelp" placeholder="<?php echo $_SESSION['admin_user_to_update']->getName()?>" value="<?php echo $_SESSION['admin_user_to_update']->getName()?>"style="width: 35%; margin-left: 450px; ">
			</div>
			<div class="form-group">
				<label for="firstName" style="margin-left: 450px;">First Name</label>
				<input type="text" class="form-control is-valid" name="firstName" aria-describedby="firstNameHelp" placeholder="<?php echo $_SESSION['admin_user_to_update']->getFirstName()?>" value="<?php echo $_SESSION['admin_user_to_update']->getFirstName()?>" style="width: 35%; margin-left: 450px; ">
			</div>
			<div class="form-group">
				<label for="password" style="margin-left: 450px;">Password</label>
				<input type="password" class="form-control is-valid" name="password" aria-describedby="passwordHelp" placeholder="<?php echo $_SESSION['admin_user_to_update']->getPasswd()?>" value="<?php echo $_SESSION['admin_user_to_update']->getPasswd()?>" style="width: 35%; margin-left: 450px; ">
			</div>
			<div class="form-group">
				<label for="WhoAmI" style="margin-left: 450px;">User status (WhoAmI)</label>
				<input type="texte" class="form-control is-valid" name="WhoAmI" aria-describedby="favBackGroundHelp" placeholder="<?php echo $_SESSION['admin_user_to_update']->getWhoAmI()?>" value="<?php echo $_SESSION['admin_user_to_update']->getWhoAmI()?>" style="width: 35%; margin-left: 450px; ">
			</div>
			<div class="form-group">
				<label for="addr1" style="margin-left: 450px;">Address 1</label>
				<input type="text" class="form-control is-valid" name="addr1" aria-describedby="addr1Help" placeholder="<?php echo $_SESSION['admin_user_to_update']->getAddr1()?>" value="<?php echo $_SESSION['admin_user_to_update']->getAddr1()?>" style="width: 35%; margin-left: 450px; ">
			</div>
			<div class="form-group">

				<label for="addr2" style="margin-left: 450px;">Address 2</label>
				<input type="text" class="form-control is-valid" name="addr2" aria-describedby="addr2Help" placeholder="<?php echo $_SESSION['admin_user_to_update']->getAddr2()?>" value="<?php echo $_SESSION['admin_user_to_update']->getAddr2()?>" style="width: 35%; margin-left: 450px; ">
			</div>
			<div class="form-group">
				<label for="city" style="margin-left: 450px;">City</label>
				<input type="text" class="form-control is-valid" name="city" aria-describedby="cityHelp" placeholder="<?php echo $_SESSION['admin_user_to_update']->getCity()?>" value="<?php echo $_SESSION['admin_user_to_update']->getCity()?>" style="width: 35%; margin-left: 450px; ">
			</div>
			<div class="form-group">
				<label for="zip" style="margin-left: 450px;">Zip</label>
				<input type="text" class="form-control is-valid" name="zip" aria-describedby="zipHelp" placeholder="<?php echo $_SESSION['admin_user_to_update']->getZip()?>" value="<?php echo $_SESSION['admin_user_to_update']->getZip()?>" style="width: 35%; margin-left: 450px; ">
			</div>
			<div class="form-group">
				<label for="country" style="margin-left: 450px;">Country</label>
				<input type="text" class="form-control is-valid" name="country" aria-describedby="countryHelp" placeholder="<?php echo $_SESSION['admin_user_to_update']->getCountry()?>" value="<?php echo $_SESSION['admin_user_to_update']->getCountry()?>" style="width: 35%; margin-left: 450px; ">
			</div>
			<div class="form-group">
				<label for="phone" style="margin-left: 450px;">Phone</label>
				<input type="number" class="form-control is-valid" name="phone" aria-describedby="phoneHelp" placeholder="<?php echo $_SESSION['admin_user_to_update']->getPhone()?>" value="<?php echo $_SESSION['admin_user_to_update']->getPhone()?>" style="width: 35%; margin-left: 450px; ">
			</div>
			<div class="form-group">
			<label for="dateOfBirth" style="margin-left: 450px;">Date of Birth</label><br>
			<p style="text-align: center;"><?php echo $_SESSION['db_user']->getDateOfBirth()?><br></p>
			<p style="text-align: center;">If you would like to change, change it in the calendar below</p><br>
				<input type="date" class="form-control is-valid" name="dateOfBirth" aria-describedby="dateOfBirthHelp" placeholder="<?php echo $_SESSION['admin_user_to_update']->getDateOfBirth()?>" max="2003-04-01" style="width: 35%; margin-left: 450px; " >
			</div>
			<button type="submit" class="btn" style="margin-left: 450px;" name="subUpdate">Submit</button><br><br>
		<?php } ?>
	</form>
</div>

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
					Harrow <br>
					Wealdstone
				</address>

			</div>
			</div>
			<div class="bottom-footer">
			<div class="col-mb-7">@ Copyright YourMarket 2021</div>

			<ul class="footer-nav">
				<li> <a href = "admin.php">Home</a></li>
				<li> <a href="mailto:support@yourmarket.com">Contact</li>
				<p> support@yourmarket.com</p>
				<p>+44 7800 987654</p>
			</ul>			
	</div>
	</div>
	</footer>
</body>
</html>