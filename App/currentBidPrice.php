<?php

function currentBidPrice($db,$itemID){
	$item = new db_item($db,$itemID);
	$currentPrice = $item->getPrice();

	$sqlQuery = "SELECT price FROM _order WHERE id_item = :id_item";
	$statment = $db->prepare($sqlQuery);
	$statment->bindParam(':id_item',$itemID,PDO::PARAM_INT);

	if (!$statment->execute()) {
			    print_r($statment->errorInfo());
				
				}

	while ($rep = $statment->fetch()) {
		if($rep["price"] > $currentPrice){
			$currentPrice = $rep["price"];
		}
	}

	return $currentPrice;
}


?>