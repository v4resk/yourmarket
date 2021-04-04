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
	else{
		$_SESSION['red_alert'] = create_alert_red("log in failed");
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
if(isset($_POST['subUpdate'])){

	$temp_manager_to_updateUser = new db_user_manage($db);

	if(isset($_POST['forDbUser'])){
		if(isset($_POST["email"]))
	{
		$_SESSION['db_user']->setEmail($_POST["email"]);
	}
	if (isset($_POST["name"])) {
		$_SESSION['db_user']->setName($_POST["name"]);		
	}
	if(isset($_POST["firstName"])){
		$_SESSION['db_user']->setFirstName($_POST["firstName"]);	
	}
	if(isset($_POST["dateOfBirth"])){
		$_SESSION['db_user']->setDateOfBirth($_POST["dateOfBirth"]);		
	}
	if(isset($_POST["password"])){
		$_SESSION['db_user']->setPasswd($_POST["password"]);	
	}
	if(isset($_POST["favBackGround"])){
		$_SESSION['db_user']->setFavBackgroundNo($_POST["favBackGround"]);		
	}
	if(isset($_POST["addr1"])){
		$_SESSION['db_user']->setAddr1($_POST["addr1"]);		
	}
	if (isset($_POST["addr2"])) {
		$_SESSION['db_user']->setAddr2($_POST["addr2"]);		
	}
	if(isset($_POST["city"])){
		$_SESSION['db_user']->setCity($_POST["city"]);		
	}
	if(isset($_POST["zip"])){
		$_SESSION['db_user']->setZip($_POST["zip"]);		
	}
	if(isset($_POST["country"])){
		$_SESSION['db_user']->setCountry($_POST["country"]);
	}
	if(isset($_POST["phone"])){
		$_SESSION['db_user']->setPhone($_POST["phone"]);
	}
	if(isset($_POST["WhoAmI"])){
		$_SESSION['db_user']->setWhoAmI($_POST["WhoAmI"]);
	}
		$temp_manager_to_updateUser->db_updateUser($_SESSION['db_user']);
	}else{
		if(isset($_POST["email"]))
	{
		$_SESSION['admin_user_to_update']->setEmail($_POST["email"]);
	}
	if (isset($_POST["name"])) {
		$_SESSION['admin_user_to_update']->setName($_POST["name"]);		
	}
	if(isset($_POST["firstName"])){
		$_SESSION['admin_user_to_update']->setFirstName($_POST["firstName"]);	
	}
	if(isset($_POST["dateOfBirth"])){
		$_SESSION['admin_user_to_update']->setDateOfBirth($_POST["dateOfBirth"]);		
	}
	if(isset($_POST["password"])){
		$_SESSION['admin_user_to_update']->setPasswd($_POST["password"]);	
	}
	if(isset($_POST["favBackGround"])){
		$_SESSION['admin_user_to_update']->setFavBackgroundNo($_POST["favBackGround"]);		
	}
	if(isset($_POST["addr1"])){
		$_SESSION['admin_user_to_update']->setAddr1($_POST["addr1"]);		
	}
	if (isset($_POST["addr2"])) {
		$_SESSION['admin_user_to_update']->setAddr2($_POST["addr2"]);		
	}
	if(isset($_POST["city"])){
		$_SESSION['admin_user_to_update']->setCity($_POST["city"]);		
	}
	if(isset($_POST["zip"])){
		$_SESSION['admin_user_to_update']->setZip($_POST["zip"]);		
	}
	if(isset($_POST["country"])){
		$_SESSION['admin_user_to_update']->setCountry($_POST["country"]);
	}
	if(isset($_POST["phone"])){
		$_SESSION['admin_user_to_update']->setPhone($_POST["phone"]);
	}
	if(isset($_POST["WhoAmI"])){
		$_SESSION['admin_user_to_update']->setWhoAmI($_POST["WhoAmI"]);
	}
	

		$temp_manager_to_updateUser->db_updateUser($_SESSION["admin_user_to_update"]);
	}
	
	$_SESSION['blue_alert'] = create_alert_blue("Succeffully updated");

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


if(isset($_POST["updateSubmit"])){
	$_SESSION["admin_user_to_update"] = new db_user($db,$_POST["update_user"]);
}

if(isset($_POST["db_user"])){
	if($_POST["db_user"]->getWhoAmI()=="Admin"){
		$_SESSION["admin"] = true;
	}else{
		$_SESSION["admin"] = false;
	}
}

$_POST[] = array();

?>
