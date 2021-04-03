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
	<div class="headr">
		<a href="homePage.html"><img src="logo.png" height="150" width="200"></a>
	</div>
<div class="row" id="">
		<nav class="navbar navbar-default" role="navigation">
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-left">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navBarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">user</a>
						<div class="dropdown-menu" aria-labelledby="navBarDropdownMenuLink">
						<a class="dropdown-item" href="adduser.php" style="color:grey; ">Add User</a><br>
							<a class="dropdown-item" href="deleteuser.php" style="color: grey;  ">Delete User</a><br>
							<a class="dropdown-item" href="updateuser.php" style="color:grey; ">Update User</a><br>
						</div>
					</li>
					<li>
						<a class="nav-link dropdown-toggle" href="#" id="navBarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Items</a>
					
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

<!--NAV-->
 <form action=".php" method="post">*
	<div class="form-group">
		<label for="user_email"style="margin-left: 450px;">Enter your name</label>
		<input type="text" class="form-control is-valid"  name="name" aria-describedby="nameHelp" placeholder="Enter your name" required style="width: 35%; margin-left: 450px;" >
	</div>
	<div class="form-group">
				<label for="user_firstName"style="margin-left: 450px;">Enter your first name</label>
				<input type="text" class="form-control is-valid"  name="firstName" aria-describedby="firstNamelHelp" placeholder="Enter your first name" required style="width: 35%; margin-left: 450px;" >
			</div>
	<div class="form-group">
				<label for="user_date_naissance"style="margin-left: 450px;">Enter your date of birth</label>
				<input type="date" class="form-control is-valid"  name="date_naissance" min= "2003-04-06"aria-describedby="date_naissancelHelp" placeholder="Enter your date of birth" required style="width: 35%; margin-left: 450px;" >
			</div>
	<div class="form-group">
		<label for="user_email"style="margin-left: 450px;">Enter your e-mail</label>
		<input type="email" class="form-control is-valid"  name="email" aria-describedby="emailHelp" placeholder="name.firstname@mail.com" required style="width: 35%; margin-left: 450px;" >
	</div>

	<div class="form-group">
		<label for="mdp"style="margin-left: 450px;">Enter your password</label>
		<input type="password" class="form-control is-valid"  name="mdp" aria-describedby="mdplHelp" placeholder="password" required style="width: 35%; margin-left: 450px;" >
	</div>
	<div class="form-group">
				<label for="category" style="margin-left: 450px;">Who Am I </label>
				<input list="dataCategory" name="whoAmI" style="margin-left: 450px; width: 35%;">
				<datalist id="dataCategory">
					<option value="admin">
					<option value="customer">
					<option value="seller">
				</datalist>
	
	

	<div class="form-group">
		<label for="fav_background_number"style="margin-left: 450px;">Enter your favorite background number</label>
		<input type="number" min=0 max=2 class="form-control is-valid"  name="fav_background_number" aria-describedby="fav_background_numberlHelp" placeholder="favorite background number" required style="width: 35%; margin-left: 450px;" >
	</div>

	<div class="form-group">
				<label for="pic" style="margin-left: 450px;">Add the photo id in .png or .jpg </label>
				<input type="file" name="photo_id" id="photo_id" style="width: 35%; margin-left: 450px;" class="form-control"  aria-describedby="photo_idHelp">
			</div>

	<div class="form-group">
		<label for="addr1"style="margin-left: 450px;">Enter your adress</label>
		<input type="text" class="form-control is-valid"  name="addr1" aria-describedby="addr1lHelp" placeholder="Addres 1" required style="width: 35%; margin-left: 450px;" >
	</div>
	<div class="form-group">
		<label for="addr2"style="margin-left: 450px;">Enter your adress</label>
		<input type="text" class="form-control is-valid"  name="addr2" aria-describedby="addr2lHelp" placeholder="Addres 2" style="width: 35%; margin-left: 450px;" >
	</div>
<div class="form-group">
		<label for="city"style="margin-left: 450px;">Enter your city</label>
		<input type="text" class="form-control is-valid"  name="city" aria-describedby="citylHelp" placeholder="City" required style="width: 35%; margin-left: 450px;" >
	</div>
	<div class="form-group">
		<label for="postal_code"style="margin-left: 450px;">Enter your postal code</label>
		<input type="text" class="form-control is-valid"  name="postal_code" aria-describedby="postal_codelHelp" placeholder="Postal Code" required style="width: 35%; margin-left: 450px;" >
	</div>
	<div class="form-group">
		<label for="country"style="margin-left: 450px;">Enter your country</label>
		<input type="text" class="form-control is-valid"  name="country" aria-describedby="countrylHelp" placeholder="Country" required style="width: 35%; margin-left: 450px;" >
	</div>
	<div class="form-group">
		<label for="phone"style="margin-left: 450px;">Enter your phone number</label>
		<input type="text" class="form-control is-valid"  name="phone" aria-describedby="phonelHelp" placeholder="Phone number" required style="width: 35%; margin-left: 450px;" >
	</div>
	<button type="submit" class="btn" style="margin-left: 450px;" name="subNewUser">Add this user</button><br><br>
	




	 	
</form>
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