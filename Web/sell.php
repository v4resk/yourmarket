<?php ini_set('display_errors', 'on');?>
<?php  require '../App/check_alert.php' ?>
<?php
require '../App/init.php';
if(!isset($_SESSION['db_user'])){
		echo "<script> location.href='signInOrSignUp.php'; </script>";
		$_SESSION['red_alert'] = create_alert_red("You need to Sign up/Sing in before");
        exit;
 	}else if($_SESSION['db_user']->getWhoAmI() != "sell" ){
 		echo "<script> location.href='index.php'; </script>";
 		$_SESSION['red_alert'] = create_alert_red("You need to be register as a seller ");
        exit;
 	}
	else{
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sell</title>
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
		<h1 style="margin-left: 550px; color: #402019; ">Add an item to sell</h1> 

		<form action="sellConfirmation.php" method="post"  enctype="multipart/form-data">
			<div class="form-group">
				<label for="item_name" style="margin-left: 450px;">Name</label>
				<input type="text" class="form-control is-valid" name="item_name" aria-describedby="nameHelp" placeholder="Enter item's Name" required style="width: 35%; margin-left: 450px; ">
			</div>
			<br>
			<p style="margin-left:525px;">Choose a way to sell your item (You can choose several)</p>
		
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" name="sellBID" id="inlineCheckBoxBID" value="Auctions" style="margin-left: 570px;">
				<label class="form-check-label" for="inlineCheckBoxBID" >Auctions</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" name="sellBO" id="inlineCheckBoxBO" value="Best Offer" style="margin-left: 570px;">
				<label class="form-check-label" for="inlineCheckBoxBO" >Best Offer</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" name="sellBIN" id="inlineCheckBoxBIN" value="Buy It Now" style="margin-left: 570px;">
				<label class="form-check-label" for="inlineCheckBoxBIN" >Buy It Now</label>
			</div>
			<div class="form-group">
				<label for="category" style="margin-left: 450px;">Category</label>
				<input list="dataCategory" name="category" style="margin-left: 450px; width: 35%;">
				<datalist id="dataCategory">
					<option value="Wine">
					<option value="Beer">
					<option value="Liquor">
				</datalist>
			<!--<input type="text" class="form-control is-valid" name="inputCategory" aria-describedby="categoryHelp" placeholder="Enter item's Category" required style="width: 35%; margin-left: 450px; ">-->
			</div>
			<div class="form-group">
				<label for="info" style="margin-left: 450px;">Description</label>
				<textarea rows="3" cols="10"class="form-control is-valid" name="info" aria-describedby="descriptionHelp" placeholder="Enter item's Description" required style="width: 35%; margin-left: 450px; "></textarea>
			</div>
			<div class="form-group">
				<label for="price" style="margin-left: 450px;">Price (£)    (Starting Price for auctions)</label>
				<input type="number" min="0.01" step="0.01" name="price" class="form-control is-valid" aria-describedby="priceHelp" placeholder="Enter item's Price" required style="width: 35%; margin-left: 450px;">
			</div>	
			<div class="form-group">
				<label for="fromTime" style="margin-left: 450px;">Date of publication</label>
				<input type="date"  name="fromTime" class="form-control is-valid" aria-describedby="pubDateHelp" required style="width: 35%; margin-left: 450px;" min="<?php echo date('Y-m-d'); ?>" value="<?php echo date('Y-m-d'); ?>">
			</div>
			<div class="form-group">
				<label for="toTime" style="margin-left: 450px;">Limit Date</label>
				<input type="date"  name="toTime" class="form-control is-valid" aria-describedby="endDateHelp" required style="width: 35%; margin-left: 450px;" min="<?php echo date('Y-m-d'); ?>" value="<?php echo date('Y-m-d'); ?>">
			</div>
			<div class="form-group">
				<label for="pic" style="margin-left: 450px;">Add images to improve your publication (Only .png or .jpg)</label>
				<input type="file" name="pic" id="imgItem" style="width: 35%; margin-left: 450px;" class="form-control"  aria-describedby="imgHelp">
			</div>
			<button type="submit" class="btn" style="margin-left: 450px;" name="subPubItem">Upload your item</button><br><br>
		</form>	
		
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
				<li> <a href = "homePage.php">Home</a></li>
				<li> <a href="mailto:support@yourmarket.com">Contact</li>
				<p> support@yourmarket.com</p>
				<p>+44 7800 987654</p>
			</ul>
			
	</div>
	</div>
	</footer>-->
</body>
</html>
<?php } ?>