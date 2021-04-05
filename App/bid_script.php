<?php


	if($item_actual_bid_price < $item_user_bid_price){
		//create order for user

	}else{
		$_SESSION['info_alert'] = create_alert_red("Bid too low");
	}


?>