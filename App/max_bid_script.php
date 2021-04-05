<?php
	

	if($item_actual_bid_price < $user_max_order){
		$_SESSION["bid_email"] = $_SESSION["db_user"]->getEmail();
		$_SESSION["bid_date_m"] = date("Y-m-d");
		$_SESSION["bid_id_item"] = $item->getIdItem();
		$_SESSION["bid_status"] = 0;
		$_SESSION["bid_max_price"] = $user_max_order;

		$orderManager = new db_order_manage($db);
		$orderManager->db_addOrder();

		unset($_SESSION["bid_email"]);
		unset($_SESSION["bid_date_m"]);
		unset($_SESSION["bid_id_item"]);
		unset($_SESSION["bid_status"]);
		unset($_SESSION["bid_max_price"]);

	}else{
		$_SESSION['info_alert'] = create_alert_red("Bid too low");
	}


?>