<!DOCTYPE html>
<html>
<head>
	<title>YourMarket</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		require '../App/init.php';
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
		echo $userTest->getName();

		if(hasSessionStart()){
			echo 1;
		}else {
			echo 0;
		}

	 ?>
</body>
</html>