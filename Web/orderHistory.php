<?php require '../App/init.php'; ?>
<?php require '../App/check_alert.php' ?>
<?php 
	$whereClause = "email = \"".$_SESSION['db_user']->getEmail() ."\" ";
	$orderManager = new db_order_manage($db);
	$tabOrder = $orderManager->getOrderTabFromWhere($whereClause);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Purchase History</title>
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
					<li><a href="orderHistory.php">Order History</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="cart.php"><img src="cart.png" width="30" height="30" ></a></li>
					<li><a href="signInOrSignUp.php"><img src="profile_icon.png" width="30" height="30"></a></li>
				</ul>
			</div>
        </nav>
	</div>	

<!--NAV-->
	<div class="navigation" >
			
		<div class="card_gr">
			<?php 
					for($i=0;$i<sizeof($tabOrder);$i++){		
				 ?>
				<div class="card" style="width: 18rem; border: 1px solid black; box-shadow: 1px; margin-bottom: 10px; margin-left: 10px;">
			  		<ul class="list-group list-group-flush">
				    <li class="list-group-item">Id Order : <?php echo $tabOrder[$i]->getIdOrder(); ?> </li>
				    <li class="list-group-item">Id Item : <?php echo $tabOrder[$i]->getIdItem(); ?></li>
				    <li class="list-group-item">Email : <?php echo $tabOrder[$i]->getEmail(); ?></li>
				    <li class="list-group-item">Order Date : <?php echo $tabOrder[$i]->getDate_m(); ?></li>
				    <li class="list-group-item">Status : <?php echo $tabOrder[$i]->getStatus(); ?></li>
				    <li class="list-group-item">Price : <?php echo $tabOrder[$i]->getPrice(); ?></li>
				    <li class="list-group-item">Max Price : <?php echo $tabOrder[$i]->getMaxPrice(); ?></li>
			  		</ul>

				
				</div>
			<?php }
							?>
		</div>
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