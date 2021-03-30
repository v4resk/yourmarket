<!DOCTYPE html>
<html>
<head>
	<title>Sign in or Sign up</title>
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
			<input type="email" class="form-control" name="inputEmail" aria-describedby="emailHelp" placeholder="Enter your email" style="width: 35%; margin-left: 450px;" >
		</div>
		<div class="form-group">
			<label for="inputPassword" style="margin-left: 450px;">Password</label>
			<input type="password" name="inputPassword" class="form-control" placeholder="Password" style="width: 35%; margin-left: 450px;">
		</div>
		<div class="form-check">
			<input type="checkbox" name="rememberMe" class="form-check-input"style="margin-left: 450px;">
			<label class="form-check-label" for="check" >Remember Me</label>
		</div>
		<button type="submit" class="btn" style="margin-left: 450px;">Submit</button>
	</form>
</body>
</html>