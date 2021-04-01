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
		<h1 style="margin-left: 550px; color: #402019; ">Add an item to sell</h1> 

		<form action="sellConfirmation.php" method="post">
			<div class="form-group">
				<label for="inputIdItem"style="margin-left: 450px;">Item's ID</label>
				<input type="text" class="form-control is-valid"  name="inputIdItem" aria-describedby="idHelp" placeholder="Enter item's ID " required style="width: 35%; margin-left: 450px;" >
			</div>
			<div class="form-group">
				<label for="inputNameItem" style="margin-left: 450px;">Name</label>
				<input type="text" class="form-control is-valid" name="inputNameItem" aria-describedby="nameHelp" placeholder="Enter item's Name" required style="width: 35%; margin-left: 450px; ">
			</div>
			<br>
			<p style="margin-left:525px;">Choose a way to sell your item (You can choose several)</p>
		
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" name="checkBoxBID" id="inlineCheckBoxBID" value="option1" style="margin-left: 570px;">
				<label class="form-check-label" for="inlineCheckBoxBID" >Auctions</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" name="checkBoxBO" id="inlineCheckBoxBO" value="option2" style="margin-left: 570px;">
				<label class="form-check-label" for="inlineCheckBoxBO" >Best Offer</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" name="checkBoxBIN" id="inlineCheckBoxBIN" value="option3" style="margin-left: 570px;">
				<label class="form-check-label" for="inlineCheckBoxBIN" >Buy It Now</label>
			</div>
			<div class="form-group">
				<label for="inputCategory" style="margin-left: 450px;">Category</label>
				<select class="custom-select" size="4" style="margin-left: 450px; width: 35%;"> 
					<option value="1">Wine</option>
					<option value="2">Beer</option>
					<option value="3">Liquor</option>
				</select>
			<!--<input type="text" class="form-control is-valid" name="inputCategory" aria-describedby="categoryHelp" placeholder="Enter item's Category" required style="width: 35%; margin-left: 450px; ">-->
			</div>
			<div class="form-group">
				<label for="inputDescription" style="margin-left: 450px;">Description</label>
				<textarea rows="3" cols="10"class="form-control is-valid" name="inputDescription" aria-describedby="descriptionHelp" placeholder="Enter item's Description" required style="width: 35%; margin-left: 450px; "></textarea>
			</div>
			<div class="form-group">
				<label for="inputPrice" style="margin-left: 450px;">Price (£)    (Starting Price for auctions)</label>
				<input type="number" min="0.01" step="0.01" name="inputPrice" class="form-control is-valid" aria-describedby="priceHelp" placeholder="Enter item's Price" required style="width: 35%; margin-left: 450px;">
			</div>	
			<div class="form-group">
				<label for="inputStartTime" style="margin-left: 450px;">Date of publication</label>
				<input type="date"  name="inputStartTime" class="form-control is-valid" aria-describedby="pubDateHelp" required style="width: 35%; margin-left: 450px;" min="<?php echo date('Y-m-d'); ?>" value="<?php echo date('Y-m-d'); ?>">
			</div>
			<div class="form-group">
				<label for="inputEndTime" style="margin-left: 450px;">Limit Date</label>
				<input type="date"  name="inputEndTime" class="form-control is-valid" aria-describedby="endDateHelp" required style="width: 35%; margin-left: 450px;" min="<?php echo date('Y-m-d'); ?>" value="<?php echo date('Y-m-d'); ?>">
			</div>
			<div class="form-group">
				<label for="inputImg" style="margin-left: 450px;">Add images to improve your publication (Only .png or .jpg)</label>
				<input type="file" name="inputImg" id="imgItem" style="width: 35%; margin-left: 450px;" class="form-control"  aria-describedby="imgHelp">
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