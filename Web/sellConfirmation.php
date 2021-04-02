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
		<a href="index.php"><img src="logo.png" height="150" width="200"></a>
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
		<form action="index.php" method="post">
		<img src="<?php echo $_POST["pic"]?>" width="250" heigth="250" style="margin-left: 42%">
		<p style="text-align: center">Name : <?php echo $_POST["item_name"]?></p>
		<p style="text-align: center">Category : <?php echo $_POST["category"]?></p>
		<p style="text-align: center">Description : <?php echo $_POST["info"]?></p>
		<p style="text-align: center">Price : £<?php echo $_POST["price"]?></p>
		<p style="text-align: center">Date of Publication : <?php echo $_POST["fromTime"]?></p>
		<p style="text-align: center">Limit Date : <?php echo $_POST["toTime"]?></p>
		<?php

			if(isset($_POST["sellBIN"]))
				{
					?><p style="text-align: center;"><?php echo "You chose the sale option Buy It Now";?></p>
					<input type="hidden" name="sellBIN"><?php
				}
			if(isset($_POST["sellBO"]))
				{
					?><p style="text-align: center;"><?php echo "You chose the sale option Best Offer";?></p>
					<input type="hidden" name="sellBO"><?php
				}
			if(isset($_POST["sellBID"]))
				{
					?><p style="text-align: center;"><?php echo "You chose the sale option Auctions";?></p>
					<input type="hidden" name="sellBID"><?php
				}
		?>	
		<br>
		<div class="col text-center">
			<input type="hidden" name="item_name" value="<?php echo $_POST['item_name'] ?>">
			<input type="hidden" name="category" value="<?php echo $_POST['category'] ?>">
			<input type="hidden" name="info" value="<?php echo $_POST['info'] ?>">
			<input type="hidden" name="price" value="<?php echo $_POST['price'] ?>">
			<input type="hidden" name="fromTime" value="<?php echo $_POST['fromTime'] ?>">
			<input type="hidden" name="toTime" value="<?php echo $_POST['toTime'] ?>">

		<button type="submit"  class="btn btn-success" name="subPubItemConf">Upload Item</button>	<br><br>
		<button type="submit"  class="btn btn-danger" name="subPubItemCancel">Return</button><br><br>
		<small >Please read the information carefully before uploading your item</small>
		</div>
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
				<li> <a href = "homePage.html">Home</a></li>
				<li> <a href="mailto:support@yourmarket.com">Contact</li>
				<p> support@yourmarket.com</p>
				<p>+44 7800 987654</p>
			</ul>
			
		</div>
		</div>
	</footer>
</body>
</html>



				
					
					
					
					
					
			