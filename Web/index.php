<!DOCTYPE html>
<html>
<head>
	<title>YourMarket</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		require '../lib/db_bibli/db_user/db_getUserFromEmail.php';
		try{
				$local = "localhost";
				$dbname = "yourMarketDB";
				$user = "www-data";
				$pass = "toor";
				$db = new PDO("mysql:host=$local;dbname=$dbname;charset=utf8",$user,$pass);

		
			}catch(Exeption $e){
				die("ERROR".$e->intl_get_error_message());
			}

		$userTest = new db_user($db,'lucas.heurtin@free.fr');
		echo $userTest->getNameByEmail();

	 ?>
</body>
</html>