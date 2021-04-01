<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
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

	<form action="" method="post">
		<div class="form-group">
			<label for="inputEmail"style="margin-left: 450px;">Email Address</label>
			<input type="email" class="form-control is-valid"  name="inputEmail" aria-describedby="emailHelp" placeholder="Enter your email" required style="width: 35%; margin-left: 450px;" >
		</div>
		<div class="form-group">
			<label for="inputName"style="margin-left: 450px;">Name</label>
			<input type="text" class="form-control is-valid" name="inputName" aria-describedby="nameHelp" placeholder="Name" required style="width: 35%; margin-left: 450px;" >
		</div>
		<div class="form-group">
			<label for="inputDate"style="margin-left: 450px;">Date of Birth</label>
			<input type="date" class="form-control is-valid" required name="inputDate" aria-describedby="dateHelp" style="width: 35%; margin-left: 450px;" value="2003-04-01" max="2003-04-01">
			 <small id="dateHelp" class="form-text text-muted" style="color: red; margin-left: 450px; ">You must be 18 years or older to create an account!</small>
		</div>
		<div class="form-group">
			<label for="inputPassword" style="margin-left: 450px;">Password</label>
			<input type="password" name="inputPassword" class="form-control is-valid" required placeholder="Password" style="width: 35%; margin-left: 450px;">
		</div>
		<div class="form-group">
			<label for="inputAdress1" style="margin-left: 450px;">Adress 1</label>
			<input type="text" class="form-control is-valid" required name="inputAdress1" aria-describedby="adress1Help" placeholder="1234 Old Street"style="width: 35%; margin-left: 450px;" >
		</div>
		<div class="form-group">
			<label for="inputAdress2" style="margin-left: 450px;">Adress 2</label>
			<input type="text" class="form-control is-valid" name="inputAdress2" required aria-describedby="adress2Help" placeholder="Flat,Floor,..."style="width: 35%; margin-left: 450px;" >						
		</div>
		<div class="form-group">
			<label for="inputCity" style="margin-left: 450px;">City</label>
			<input type="text" class="form-control is-valid" name="inputCity" required aria-describedby="cityHelp" style="width: 35%; margin-left: 450px;" >			
		</div>
		<div class="form-group">
			<label for="inputZip" style="margin-left: 450px;">Zip Code</label>
			<input type="text" class="form-control is-valid" name="inputZip" required aria-describedby="zipHelp" style="width: 35%; margin-left: 450px;" >			
		</div>
		<div class="form-group">
			<label for="inputCountry" style="margin-left: 450px;">Country</label>
			<input type="text" class="form-control is-valid" name="inputCountry" required aria-describedby="countryHelp" style="width: 35%; margin-left: 450px;" >			
		</div>
		<div class="form-group">
			<label for="inputPhone" style="margin-left: 450px;">Phone Number</label>
			<input type="text" class="form-control is-valide" name="inputPhone" required 	aria-describedby="phoneHelp" style="width: 35%; margin-left: 450px;" >			
		</div>
		<button type="submit" class="btn" style="margin-left: 450px;" name="subSignUp">Submit</button><br><br>
	</form>
</body>
</html>