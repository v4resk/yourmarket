<?php ini_set('display_errors', 'on');?>
<?php require '../App/init.php'; ?>
<?php  if(isset($_SESSION['db_user'])) {
	if($_SESSION['db_user']->getWhoAmI()=="Admin"){
		echo "<script> location.href='admin.php'; </script>";
       	exit;
    }

  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home Page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="template.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>
<body>
	<?php  require '../App/check_alert.php' ?>
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
	<div class="navigation" >
		
		<p style="text-align: center;" ><a href="index.php"><img src="welcome.jpg" height="500" width="1250"></a></p>
		<h1 style="text-align: center;">Welcome to YourMarket</h1> 
		<h2 style="text-align: center; font-style:italic;">Yourmarket is the most used site for alcohol sellers. And all this support warms our hearts, we thank you for everything</h2>
		<div class="getstarted">
		<p>
				<h3><strong> Get started </strong></h3>
		</p>
		<br>
	</div>
		<div class="nav1">
			<h4>We are a platform for the sale of alcohol, mainly wine, beer and liquor with thousands of products available where people can bid on products from all over the world. 3 different ways of buying are available:</h4>
		<br>
            <h4> 1) Auctions where you can bid on competitors' offers.</h4>
            <h4>2) Buy it know where you can buy directly the product you are interested in at a fixed price.</h4>
            <h4>3) Best offer where you can negotiate directly with the seller. You can negotiate up to 5 times to conclude the final price of an article</h4> 

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