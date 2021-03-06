
<?php require '../App/init.php'; ?>
<?php require '../App/check_alert.php' ?>
<?php require '../App/currentBidPrice.php' ?>
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
		$BuyBestOffer = "#BuyBestOffer";
		$BuyAuction = "#BuyAuction";
		$BuyItNow = "#BuyItNow";
		$null = "#";

	?>
	<div class="navigation" >



		<ul class="nav nav-tabs" style="width: 80%; ">
		 	<li><a data-toggle="tab" href="<?php if($item->getSellBO()){echo $BuyBestOffer;}else{echo $null;} ?>">Buy Best Offer</a></li>
		 	<li><a data-toggle="tab" href="<?php if($item->getSellBID()){echo $BuyAuction;}else{echo $null;} ?>">Buy Auction</a></li>
		 	<li><a data-toggle="tab" href="<?php if($item->getSellBIN()){echo $BuyItNow;}else{echo $null;} ?>">Buy It Now</a></li>
		</ul>
		<div class="tab-content" >
		  <div id="BuyBestOffer" class="tab-pane fade">
		  	<h3>Best Offer</h3>
		    <p>Some content in menu 1.</p>
		  </div>
		  <div id="BuyAuction" class="tab-pane fade">
		  	<br>
			    <div class="sellContent">
			    <img src="uploads/<?php echo $item->getPic(); ?>" width="240" height="280" >
			    	<div class="sellChild">
			    		<h1><?php echo $item->getName();?></h1>
			    		<h3>Price:<?php echo " ".$item->getPrice()."??"; ?></h3>
			    		<h5><cite>Sell by:</cite> <?php echo $item->getSellMeth(); ?></h5>
			    		<h5><cite>Description:</cite> <?php echo $item->getInfo(); ?></h5>
			    		<h5><cite>Category:</cite> <?php echo $item->getCategory(); ?></h5>
			    		<h5><cite>Seller:</cite> <?php echo $item->getSellerId(); ?></h5>
			    		<h5><cite>Started:</cite> <?php echo $item->getFromTime(); ?></h5>
			    		<h5><cite>End:</cite> <?php echo $item->getToTime(); ?></h5><br><br>		
			    	</div>
				</div>
				<form action="payment.php" method="post">
					<div class="form-group">
						<label for="actualPrice" style="margin-left: 20px;">Actual Price (??)</label>
						<input type="number" class="form-control "  readonly name="actualPrice" aria-describedby="actualPriceHelp" placeholder="<?php echo currentBidPrice($db,$_POST["id_item"]) ?>" value="<?php echo currentBidPrice($db,$_POST["id_item"]) ?>" style="width: 35%; margin-left: 20px;" >
					</div>
					<div class="form-group">
						<label for="bidPrice" style="margin-left: 20px;">Your bid Price (??)</label>
						<input type="number" class="form-control " required name="bidPrice" aria-describedby="actualPriceHelp" value="<?php echo currentBidPrice($db,$_POST["id_item"]) ?>" min="<?php echo currentBidPrice($db,$_POST["id_item"]) ?>" style="width: 35%; margin-left: 20px;" >
					</div>
		    	<p style="margin-left: 20px;"><button type="submit" class="btn btn-success">Purchase</button></p>
		    	<input type="hidden" name="id_item_bid" value="<?php echo $_POST["id_item"];?>"></p>
		    	</form>

		    	<form action="payment.php" method="post">
					<div class="form-group">
						<p style="margin-left: 20px; ">--------------------------------------------------------------------------------------------------------------</p>
						<label for="bidPrice" style="margin-left: 20px;">Place a Max bid Price (??)</label>
						<input type="number" class="form-control " name="maxBidPrice" aria-describedby="actualPriceHelp"  style="width: 35%; margin-left: 20px;" >
					</div>
		    	<p style="margin-left: 20px;"><button type="submit" class="btn btn-success">Purchase</button></p>
		    	<input type="hidden" name="id_item_max_bid" value="<?php echo $_POST["id_item"];?>"></p>
		    	<input type="hidden" name="actualPrice" value="<?php echo currentBidPrice($db,$_POST["id_item"]) ?>">

				</form>

		  </div>
		  <div id="BuyItNow" class="tab-pane fade">
		      <div class="sellContent">
			    <img src="uploads/<?php echo $item->getPic(); ?>" width="240" height="280" >
			    	<div class="sellChild">
			    		<h1><?php echo $item->getName();?></h1>
			    		<h3>Price:<?php echo " ".$item->getPrice()."??"; ?></h3>
			    		<h5><cite>Sell by:</cite> <?php echo $item->getSellMeth(); ?></h5>
			    		<h5><cite>Description:</cite> <?php echo $item->getInfo(); ?></h5>
			    		<h5><cite>Category:</cite> <?php echo $item->getCategory(); ?></h5>
			    		<h5><cite>Seller:</cite> <?php echo $item->getSellerId(); ?></h5>
			    		<h5><cite>Started:</cite> <?php echo $item->getFromTime(); ?></h5>
			    		<h5><cite>End:</cite> <?php echo $item->getToTime(); ?></h5><br><br>		
			    	</div>
			    </div>
				<form action="payment.php" method="post">
					
					<p style="margin-left: 20px;"><button type="submit" class="btn btn-success">Purchase</button>
					<input type="hidden" name="id_item_purchase" value="<?php echo $_POST["id_item"];?>"></p>
				</form>
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