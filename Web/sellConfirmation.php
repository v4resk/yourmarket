<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sell Confirmation</title>
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
		<a href="homePage.html"><img src="logo.png" height="150" width="200"></a>
	</div>
	<div class="row" id="">
		<nav class="navbar navbar-default" role="navigation">
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-left">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navBarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
						<div class="dropdown-menu" aria-labelledby="navBarDropdownMenuLink">
							<a class="dropdown-item" href="wine.html" style="color:grey; ">Wine</a><br>
							<a class="dropdown-item" href="beer.html" style="color: grey;  ">Beer</a><br>
							<a class="dropdown-item" href="liquor.html" style="color:grey; ">Liquor</a><br>
						</div>
					</li>
					<li>
						<a class="nav-link dropdown-toggle" href="#" id="navBarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Buying</a>
						<div class="dropdown-menu" aria-labelledby="navBarDropdownMenuLink">
							<a class="dropdown-item" href="buyItNow.html" style="color:grey; ">Buy it now</a><br>
							<a class="dropdown-item" href="bestOffer.html" style="color: grey; ">Best offer</a><br>
							<a class="dropdown-item" href="auctions.html" style="color:grey; ">Auctions</a><br>
						</div>
					</li>
					<li><a href="sell.php">Sell</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="cart.html"><img src="cart.png" width="30" height="30" ></a></li>
					<li><a href="signInOrSignUp.php"><img src="profile_icon.png" width="30" height="30"></a></li>
				</ul>
			</div>
        </nav>
	</div>

<!--NAV-->
	<div class="navigation" >
		<h1 style="margin-left: 550px; color: #402019; ">Upload Confirmation</h1> 

		<br>
		<br>
		<br>

		<img src="<?php echo $_POST["inputImg"]?>" width="250" heigth="250" style="text-align: center;">
		<?php
			foreach ($_POST as $element) {

				?><p>echo $element . "<br>";<?php
			}
		?>
		</p>
	</div>

<!--FOOTER
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
				<li> <a href = "homePage.html">Home</a></li>
				<li> <a href="mailto:support@yourmarket.com">Contact</li>
				<p> support@yourmarket.com</p>
				<p>+44 7800 987654</p>
			</ul>
			
	</div>
	</div>
	</footer>-->
</body>
</html>



				
					
					
					
					
					
			