<?php ini_set('display_errors', 'on');?>
<?php  require '../App/check_alert.php' ?>
<?php require '../App/init.php'; ?>
<?php 
	$whereClause = "seller_id=" ."\"". $_SESSION['db_user']->getEmail()."\"";
	$itemManager = new db_item_manage($db);
	$tabItem = $itemManager->getItemTabFromWhere($whereClause);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Billing Info</title>
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

	<div class="navigation">
		
		<form id=paiement action="myAccount.php" method="post">
 
		  <fieldset>
		  	
		    <h1><center>Banking Information </center></h1>
		   <div class="box">
		        <fieldset>

				<?php
				if(!isset($_SESSION["db_user"])){
					  echo "<script> location.href='index.php'; </script>";
					  $_SESSION['red_alert'] = create_alert_red("Need to be log in");
					  exit;
					}
				else if($_SESSION["db_user"]->getIdBillInfo() == null ){

						echo "<script> location.href='payment.php'; </script>";
						exit;
					}
				else if($_SESSION["db_user"]->getIdBillInfo() !== null )
				{
					$db_billInfo = new db_billInfo($db,$_SESSION["db_user"]->getIdBillInfo());
					echo $db_billInfo->getExpirationDate();
					?>

					<form action="myAccount.php" method="post">
					 <h2><center>Your bank account details</center></h2><br><br>
					 <small><center>If you want to update your billing Information you have to delete the wrong information. If you don't want to delete your information, please press return button</center></small><br><br>

					 	<div class="form-group">
							<label for="typeOfPayment" style="margin-left: 450px;">Payment Method</label>
							<input type="text" class="form-control is-valid" name="typeOfPayment" aria-describedby="typeOfPaymentHelp" placeholder=" <?php echo  $db_billInfo->getTypeOfPayment(); ?>" value="<?php echo  $db_billInfo->getTypeOfPayment();?>" style="width: 35%; margin-left: 450px; ">
						</div>
					 	<div class="form-group">
							<label for="cardNumber" style="margin-left: 450px;">Card Number</label>
							<input type="text" class="form-control is-valid" name="cardNumber" aria-describedby="cardNumberHelp" placeholder=" <?php echo  $db_billInfo->getCardNumber(); ?>" value="<?php echo  $db_billInfo->getCardNumber();?>" style="width: 35%; margin-left: 450px; ">
						</div>
					 	<div class="form-group">
							<label for="expirationDate" style="margin-left: 450px;">Expiration Date</label>
							<input type="text" class="form-control is-valid" name="expirationDate" aria-describedby="expirationDateHelp" placeholder=" <?php echo  $db_billInfo->getExpirationDate(); ?>" value="<?php echo  $db_billInfo->getExpirationDate();?>" style="width: 35%; margin-left: 450px; ">
						</div>
						<div class="form-group">
							<label for="cvc" style="margin-left: 450px;">CVC</label>
							<input type="text" class="form-control is-valid" name="cvc" aria-describedby="cvcHelp" placeholder=" <?php echo  $db_billInfo->getCVC(); ?>" value="<?php echo  $db_billInfo->getCVC();?>" style="width: 35%; margin-left: 450px; ">
						</div>
					 	<div class="form-group">
							<label for="name" style="margin-left: 450px;">Name</label>
							<input type="text" class="form-control is-valid" name="name" aria-describedby="nameHelp" placeholder=" <?php echo  $db_billInfo->getNameOnCard(); ?>" value="<?php echo  $db_billInfo->getNameOnCard();?>" style="width: 35%; margin-left: 450px; ">
						</div>



				<?php
				}	
				?>

		     <center> <input type="submit" name="deleteBillInfo" value="Delete"></center>

		  </fieldset>
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
					Harrow <br>(  )
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