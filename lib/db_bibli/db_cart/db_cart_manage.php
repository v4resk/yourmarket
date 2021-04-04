<?php

private $db;
	public function __construct($db){
		$this->db = $db;
	}


public function db_deleteCart($cart){
		if(isset($this->db)){
			$id_cart_int = (int)$item->getIdItem(); 
			$sqlQuery="DELETE From Item WHERE id_item = :item_id";
			$statment = $this->db->prepare($sqlQuery);
			$statment->bindParam(':item_id',$id_item_int,PDO::PARAM_INT);
			if(!$statment->execute()){
				echo print_r($statment->errorInfo());
			}
		}
	}



?>