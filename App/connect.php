<?php

if(!isset($_SESSION)){session_start();}

try{
	$local = "localhost";
	$dbname = "yourMarketDB";
	$user = "www-data";
	$pass = "toor";
	$db = new PDO("mysql:host=$local;dbname=$dbname;charset=utf8",$user,$pass);

}catch(Exeption $e){
				die("ERROR".$e->intl_get_error_message());
}

if(isset($_POST['inputEmail']) && isset($_POST['inputPassword'])){
	$userEmail = (String)$_POST['inputEmail'];
	$userPasswd = (String)$_POST['inputPassword'];
	// Create object to verify connection
	$user_connect_attempt = new db_user($db,$userEmail);
	if($user_connect_attempt->hasPasswd($userPasswd)){
		$_SESSION["db_user"]=$user_connect_attempt;
		$_SESSION['green_alert'] = create_alert_green("Succeffully log in");
	}
}

if(isset($_POST['subSignUp'])){
	//Create manager to acces db
	$temp_manager_to_addUser = new db_user_manage($db);
	//Add user to DB
	$temp_manager_to_addUser->db_addUser();
	$_SESSION['blue_alert'] = create_alert_blue("Succeffully sign up");
}

if(isset($_POST['subPubItemConf'])){
	//Create a manger to acces DB
	$temp_manager_to_addItem = new db_item_manage($db);
	//add item to db
	$temp_manager_to_addItem->db_addItem();
	$_SESSION['green_alert'] = create_alert_green("Item succeffully posted");
}
if(isset($_POST['killSession'])){
	session_unset();
	$_SESSION['blue_alert'] = create_alert_blue("Succeffully log out");
}


if(isset($_POST["deleteSubmit"])){

	$userToDelete = new db_user($db,$_POST["delete"]);
	$userManager = new db_user_manage($db);
	$userManager->db_deleteUser($userToDelete);

}

$_POST[] = array();

?>
