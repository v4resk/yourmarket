<?php
	

	if($item_actual_bid_price < $item_user_bid_price){
		$_SESSION["bid_email"] = $_SESSION["db_user"]->getEmail();
		$_SESSION["bid_date_m"] = date("Y-m-d");
		$_SESSION["bid_id_item"] = $item->getIdItem();
		$_SESSION["bid_status"] = 0;
		$_SESSION["bid_price"] = $item_user_bid_price;

		$orderManager = new db_order_manage($db);
		$orderManager->db_addOrder();


	}else{
		$_SESSION['info_alert'] = create_alert_red("Bid too low");
	}


?>