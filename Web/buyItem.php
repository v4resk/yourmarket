
<?php require '../App/init.php'; ?>
<?php require '../App/check_alert.php' ?>
<?php 
	if(!isset($_POST['id_item'])){
		echo "<script> location.href='index.php'; </script>";
		$_SESSION['red_alert'] = create_alert_red("Can't find the item");
        exit;
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cart</title>
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
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="cart.php"><img src="cart.png" width="30" height="30" ></a></li>
					<li><a href="signInOrSignUp.php"><img src="profile_icon.png" width="30" height="30"></a></li>
				</ul>
			</div>
        </nav>
	</div>

<!--NAV-->

	<?php

		$item = new db_item($db,$_POST['id_item']);

	?>
	<div class="navigation" >
		<ul class="nav nav-tabs" style="width: 80%">
			<li class="active"><a data-toggle="tab" href="#infoItem">Info</a></li>
		 	<li><a data-toggle="tab" href="#BuyBestOffer">Buy Best Offer</a></li>
		 	<li><a data-toggle="tab" href="#BuyAuction">Buy Auction</a></li>
		 	<li><a data-toggle="tab" href="#BuyItNow">Buy It Now</a></li>
		</ul>
		<div class="tab-content">
		  <div id="infoItem" class="tab-pane fade in active">
		    <h3>INFO</h3>
		    <img src="uploads/">
		  </div>
		  <div id="BuyBestOffer" class="tab-pane fade">
		  	<h3>Best Offer</h3>
		    <p>Some content in menu 1.</p>
		  </div>
		  <div id="BuyAuction" class="tab-pane fade">
		    <h3>Auction</h3>
		    <p>Some content in menu 2.</p>
		  </div>
		  <div id="BuyItNow" class="tab-pane fade">
		    <h3>It Now</h3>
		    <p>Some content in menu 3.</p>
		  </div>
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