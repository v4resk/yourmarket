<?php require '../App/init.php'; ?>
<?php require '../App/check_alert.php' ?>
<?php ini_set('display_errors', 'on');?>

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
<script type='text/javascript'>

</script>
<body>
	<div class="headr">
		<a href="admin.php"><img src="logo.png" height="150" width="200"></a>
	</div>
<div class="row" id="">
		<nav class="navbar navbar-default" role="navigation">
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-left">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navBarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">User</a>
						<div class="dropdown-menu" aria-labelledby="navBarDropdownMenuLink">
						<a class="dropdown-item" href="adduser.php" style="color:grey; ">Add User</a><br>
							<a class="dropdown-item" href="deleteuser.php" style="color: grey;  ">Delete User</a><br>
							<a class="dropdown-item" href="updateuser.php" style="color:grey; ">Update User</a><br>
						</div>
					</li>
					<li>
						<a class="nav-link dropdown-toggle" href="#" id="navBarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Items</a>
						<div class="dropdown-menu" aria-labelledby="navBarDropdownMenuLink">
							<a class="dropdown-item" href="deleteItemsAdmin.php" style="color:grey; ">Delete items</a><br>
							<a class="dropdown-item" href="updateItemsAdmin.php" style="color:grey; ">Update items</a><br>
						</div>
					
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

$sqlQuery="SELECT * FROM User";
$statement=$db->query($sqlQuery);?>
<form action="" method="post">
	<label for="delete" style="margin-left: 42%;">Choose an user to delete</label>
	<input list="list" name="delete" autocomplete="off" style="margin-left: 42%;">
	<datalist id="list">
	<?php
	while ($result=$statement->fetch()) {
		?>
		<option value="<?php echo $result["email"] ;?>">
		<?php
	}

	?>
	</datalist>
	<input type="submit" name="deleteSubmitUser" value="Delete">
	<div class="alert alert-danger" role="alert" style="width: 32%;margin-top:5px;  margin-left: 37%;">Delete an User 'll automatically delete all related Orders/Items !</div>
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