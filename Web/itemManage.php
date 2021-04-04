
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
						<a class="nav-link dropdown-toggle" href="itemManage.php#" id="navBarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Items</a>
					
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
	<div class="col tex-center">
	
	<br>
	<br>
	<h1 style="text-align: center;">Welcom to the Admin Panel !</h1>
	<br>
	<p style="text-align: center;"><?php echo "E-Mail : " . $_SESSION['db_user']->getEmail() . "<br>";?></p>
	<p style="text-align: center;"><?php echo "Name : " . $_SESSION['db_user']->getName() . "<br>";?></p>	
	<p style="text-align: center;"><?php echo "First Name : " . $_SESSION['db_user']->getFirstName() . "<br>";?></p>	
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
