<?php

/* This file is start on every page , connect.php allow us too catch all $_POST var 
	in order to start the good action asked by user*/

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

//Login 
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

//Sign up 
if(isset($_POST['subSignUp'])){
	//Create manager to acces db
	$temp_manager_to_addUser = new db_user_manage($db);
	//Add user to DB
	$temp_manager_to_addUser->db_addUser();
	$_SESSION['blue_alert'] = create_alert_blue("Succeffully sign up");
}

//Add an item
if(isset($_POST['subPubItemConf'])){
	//Create a manger to acces DB
	$temp_manager_to_addItem = new db_item_manage($db);
	//add item to db
	$temp_manager_to_addItem->db_addItem();
	$_SESSION['green_alert'] = create_alert_green("Item succeffully posted");
}
//When an user ask to update his profile
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
		}
	else{
		if(isset($_POST["email"]))
	{
		//Update an user from admin panel
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

//Update an item from admin panel
if(isset($_POST['updateItem'])){

	$temp_manager_to_updateItem = new db_item_manage($db);

		 if(isset($_POST["id_item"]))
		{ 
			$_SESSION['admin_item_to_update']->setIdItem($_POST["id_item"]);
		}
		if (isset($_POST["name"])) {
			$_SESSION['admin_item_to_update']->setName($_POST["name"]);		
		}
		if(isset($_POST["sellBID"])){

			$_SESSION['admin_item_to_update']->setSellBID(1);	
		}else{
			$_SESSION['admin_item_to_update']->setSellBID(0);
		}
		if(isset($_POST["sellBO"])){
			$_SESSION['admin_item_to_update']->setSellBO(1);		
		}else{
			$_SESSION['admin_item_to_update']->setSellBO(0);	
		}
		if(isset($_POST["sellBIN"])){
			$_SESSION['admin_item_to_update']->setSellBIN(1);	
		}else{
			$_SESSION['admin_item_to_update']->setSellBIN(0);	

		}
		if(isset($_POST["category"])){
			$_SESSION['admin_item_to_update']->setCategory($_POST["category"]);		
		}
		if(isset($_POST["deliveryPrice"])){
			$_SESSION['admin_item_to_update']->setDeliveryPrice($_POST["deliveryPrice"]);		
		}
		if (isset($_POST["price"])) {
			$_SESSION['admin_item_to_update']->setPrice($_POST["price"]);		
		}
		if(isset($_POST["fromTime"])){
			$_SESSION['admin_item_to_update']->setFromTime($_POST["fromTime"]);		
		}
		if(isset($_POST["toTime"])){
			$_SESSION['admin_item_to_update']->setToTime($_POST["toTime"]);		
		}
		if(isset($_POST["sellerId"])){
			$_SESSION['admin_item_to_update']->setSellerId($_POST["sellerId"]);
		}
		if(isset($_POST["customerId"])){

			if(strlen($_POST["customerId"])<=1){

			}else{
				$_SESSION['admin_item_to_update']->setCustomerId($_POST["customerId"]);
			}
			
		}
			$temp_manager_to_updateItem->db_updateItem($_SESSION['admin_item_to_update']);
	

	
	$_SESSION['blue_alert'] = create_alert_blue("Succeffully updated");

}

//Log out 
if(isset($_POST['killSession'])){
	session_unset();
	$_SESSION['blue_alert'] = create_alert_blue("Succeffully log out");
}

//Delet an user from AdminPanel
if(isset($_POST["deleteSubmitUser"])){
	
	$userToDelete = new db_user($db,$_POST["delete"]);
	$userManager = new db_user_manage($db);
	$userManager->db_deleteUser($userToDelete);

}

//delet an item from admin panel
if(isset($_POST["deleteSubmitItem"])){

	$itemToDelete = new db_item($db,$_POST["deleteItem"]);
	$itemManager = new db_item_manage($db);
	$itemManager->db_deleteItem($itemToDelete);

}

// Global var set to update Item and User
if(isset($_POST["updateSubmit"])){
	$_SESSION["admin_user_to_update"] = new db_user($db,$_POST["update_user"]);
}

if(isset($_POST["updateSubmitItems"])){
	$_SESSION["admin_item_to_update"] = new db_item($db,$_POST["updateItemAdmin"]);
}

if(isset($_POST["deleteItemsUser"])){

	$itemToDelete = new db_item($db,$_POST["id_item"]);
	$itemManager = new db_item_manage($db);
	$itemManager->db_deleteItem($itemToDelete);
}

//delet a bill info (asked by user)
if (isset($_POST["deleteBillInfo"])) {
	$billToDelete = new db_billInfo($db,$_SESSION["db_user"]->getIdBillInfo());
	$billManager = new db_billInfo_manage($db);
	$billManager->db_deleteBill($billToDelete);
	
	$_SESSION["db_user"]->setNullBillInfo();
	$userManager = new db_user_manage($db);
	$userManager->db_updateUser($_SESSION["db_user"]);

}

//add a bill info
if(isset($_POST["subBillInfo"])){
	$billManager = new db_billInfo_manage($db);
	$billManager->db_addBill();

	// SET the billInfo
	$_SESSION["db_user"]->setIdBillInfo($db);

	//Add bill info to the user table
	$userManager = new db_user_manage($db);
	$userManager->db_updateUser($_SESSION["db_user"]);
	$_SESSION['green_alert'] = create_alert_green("Payment info succeffully posted");
}

if(isset($_POST["id_item_purchase"])){
  //We set the email customer in Item 

 	$_SESSION["item_to_buy"] = new db_item($db,$_POST['id_item_purchase']);
}
if(isset($_POST["id_item_bid"])){
	$_SESSION["item_to_bid"] = new db_item($db,$_POST['id_item_bid']);
}
if(isset($_POST["id_item_max_bid"])){
	$_SESSION["item_to_bid_for_maxPrice"] = new db_item($db,$_POST["id_item_max_bid"]);
}

//add an item to the user cart
if(isset($_POST["addCartBtn"])){
	$cartManager = new db_cart_manage($db);
	$cartManager->db_addCard();
	$_SESSION['green_alert'] = create_alert_green("Item added to cart");
}
//remove an item from the user cart
if(isset($_POST["remove_cart"])){
	$cartManager = new db_cart_manage($db);
	$cartManager->db_deleteCart($_SESSION["db_user"]->getEmail(),$_POST["id_item_remove_cart"]);
	$_SESSION['green_alert'] = create_alert_green("Item removed from cart");
}

$_POST[] = array();

?>