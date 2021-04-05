
<?php require '../App/init.php'; ?>
<?php  require '../App/check_alert.php' ?>


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
<body>
<!--HEADER-->
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

<!--NAVIGATION-->

<div class="navigation">
	<?php 

	$sqlQuery="SELECT * FROM Item";
	$statement=$db->query($sqlQuery);?>
	<form action="" method="post">
		<label for="updateItemAdmin" style="margin-left: 42%;">Choose an item to update</label>
		<input list="list" name="updateItemAdmin" autocomplete="off" style="margin-left: 42%;">
		<datalist id="list">
		<?php
		while ($result=$statement->fetch()) {
			?>
			<option value="<?php echo $result["id_item"];?>">
			<?php
		}

		?>
		</datalist>



		<input type="submit" name="updateSubmitItems" value="Select">

			<?php  
				if(isset($_POST["updateSubmitItems"])){


			?>
			<div class="form-group">
				<label for="id_item" style="margin-left: 450px;">Id Item</label>
				<input type="number" class="form-control is-valid" name="id_item" aria-describedby="iditemHelp" placeholder=" <?php echo $_SESSION['admin_item_to_update']->getIdItem() ?>" value="<?php echo $_SESSION['admin_item_to_update']->getIdItem()?>" style="width: 35%; margin-left: 450px; ">
			</div>

			<div class="form-group">
				<label for="name" style="margin-left: 450px;">Name</label>
				<input type="text" class="form-control is-valid" name="name" aria-describedby="nameHelp" placeholder="<?php echo $_SESSION['admin_item_to_update']->getName()?>" value="<?php echo $_SESSION['admin_item_to_update']->getName()?>"style="width: 35%; margin-left: 450px; ">
			</div>
			<p><center>The actual sell method is : <?php echo  $_SESSION['admin_item_to_update']->getSellMeth()?></center></p>
			<p ><center>Choose a way to sell your item if you want to change (You can choose several)</center></p>
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
				<input type="text" class="form-control is-valid" name="category" aria-describedby="categoryHelp" placeholder="<?php echo $_SESSION['admin_item_to_update']->getCategory()?>" value="<?php echo $_SESSION['admin_item_to_update']->getCategory()?>" style="width: 35%; margin-left: 450px; ">
			</div>
			<div class="form-group">
				<label for="info" style="margin-left: 450px;">Info</label>
				<input type="text" class="form-control is-valid" name="info" aria-describedby="infoHelp" placeholder="<?php echo $_SESSION['admin_item_to_update']->getInfo()?>" value="<?php echo $_SESSION['admin_item_to_update']->getInfo()?>" style="width: 35%; margin-left: 450px; ">
			</div>
			<div class="form-group">
				<label for="deliveryPrice" style="margin-left: 450px;">Delivery Price (£)</label>
				<input type="number" class="form-control is-valid" name="deliveryPrice" aria-describedby="deliveryPriceHelp" placeholder="<?php echo $_SESSION['admin_item_to_update']->getDeliveryPrice()?>" value="<?php echo $_SESSION['admin_item_to_update']->getDeliveryPrice()?>" style="width: 35%; margin-left: 450px; ">
			</div>
			<div class="form-group">
				<label for="price" style="margin-left: 450px;">Price (£)</label>
				<input type="number" class="form-control is-valid" name="price" aria-describedby="priceHelp" placeholder="<?php echo $_SESSION['admin_item_to_update']->getPrice()?>" value="<?php echo $_SESSION['admin_item_to_update']->getPrice()?>" style="width: 35%; margin-left: 450px; ">
			</div>
			<div class="form-group">
				<label for="fromTime" style="margin-left: 450px;">Publication Date</label>
				<p style="text-align: center;">Publication date :<?php echo $_SESSION['admin_item_to_update']->getFromTime()?><br></p>
				<p style="text-align: center;">Please enter the date even if you don't want to change</p><br>
				<input type="date" class="form-control is-valid" name="fromTime" aria-describedby="fromTimeHelp" placeholder="<?php echo $_SESSION['admin_item_to_update']->getFromTime()?>" value="<?php echo $_SESSION['admin_item_to_update']->getFromTime()?>" style="width: 35%; margin-left: 450px; ">
			</div>
			<div class="form-group">
				<label for="toTime" style="margin-left: 450px;">End Date</label>
				<p style="text-align: center;">Actual End Date :<?php echo $_SESSION['admin_item_to_update']->getToTime()?><br></p>
				<p style="text-align: center;">Please enter the date even if you don't want to change</p><br>
				<input type="date" class="form-control is-valid" name="toTime" aria-describedby="toTimeHelp" placeholder="<?php echo $_SESSION['admin_item_to_update']->getToTime()?>" value="<?php echo $_SESSION['admin_item_to_update']->getToTime()?>" style="width: 35%; margin-left: 450px; ">
			</div>
			<div class="form-group">
				<label for="sellerId" style="margin-left: 450px;">Seller Id</label>
				<input type="text" class="form-control is-valid" name="sellerId" aria-describedby="sellerHelp" placeholder="<?php echo $_SESSION['admin_item_to_update']->getSellerId()?>" value="<?php echo $_SESSION['admin_item_to_update']->getSellerId()?>" style="width: 35%; margin-left: 450px; ">
			</div>	
			<div class="form-group">
				<label for="customerId" style="margin-left: 450px;">Customer Id</label>
				<input type="text" class="form-control is-valid" name="customerId" aria-describedby="customerHelp" placeholder="<?php echo $_SESSION['admin_item_to_update']->getCustomerId()?>" value="<?php echo $_SESSION['admin_item_to_update']->getCustomerId()?>" style="width: 35%; margin-left: 450px; ">
			</div>
			<div class="form-group">
				<label for="pic" style="margin-left: 450px;">Seller Id</label>
				<input type="text" class="form-control is-valid" name="pic" aria-describedby="picHelp" placeholder="<?php echo $_SESSION['admin_item_to_update']->getPic()?>" value="<?php echo $_SESSION['admin_item_to_update']->getPic()?>" style="width: 35%; margin-left: 450px; ">
			</div>					
			
		<button type="submit" class="btn" style="margin-left: 450px;" name="updateItem">Submit</button><br><br><?php
		}
		?>

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
