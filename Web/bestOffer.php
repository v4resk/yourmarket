<?php require '../App/init.php'; ?>
<?php require '../App/check_alert.php' ?>
<?php 
	$whereClause = "sellBO = \"1\"";
	$itemManager = new db_item_manage($db);
	$tabItem = $itemManager->getItemTabFromWhere($whereClause);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Best Offer</title>
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
	<div class="navigation" >
		<div class="card_gr">
			<?php 
					for($i=0;$i<sizeof($tabItem);$i++){		
				 ?>
				<div class="card" style="width: 18rem; border: 1px solid black; box-shadow: 1px; margin-bottom: 10px; margin-left: 10px;">
			  		<img src="uploads/<?php echo $tabItem[$i]->getPic();?>" class="card-img-top" alt="<?php echo $tabItem[$i]->getPic();?>" width="178" height="200">
			  		<div class="card-body">
				    	<h5 class="card-title"><STRONG><?php echo $tabItem[$i]->getName(); ?></STRONG></h5>
				    	<p class="card-text"><?php echo $tabItem[$i]->getInfo(); ?></p>
				  	</div>
			  		<ul class="list-group list-group-flush">
				    <li class="list-group-item">Sell methode: <?php echo $tabItem[$i]->getSellMeth(); ?> </li>
				    <li class="list-group-item">Category: <?php echo $tabItem[$i]->getCategory(); ?></li>
				    <li class="list-group-item">Price: <?php echo $tabItem[$i]->getPrice(); ?></li>
			  		</ul>
				  	<div class="card-body">
				  		<form method="post" action="buyItem.php">
				  		<input type="hidden" name="id_item" value="<?php echo $tabItem[$i]->getIdItem(); ?>">
				    	<p><center><button type="submit" class="btn btn-success">Purchase</button></center></p>
				    	</form>
				  </div>
				
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