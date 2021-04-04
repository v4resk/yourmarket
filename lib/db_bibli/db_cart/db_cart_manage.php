<?php

private $db;
	public function __construct($db){
		$this->db = $db;
	}


public function db_deleteCart($cart){
		if(isset($this->db)){
			$id_item_int = (int)$cart->getIdItem(); 
			$sqlQuery="DELETE From Cart WHERE id_item = :item_id";
			$statment = $this->db->prepare($sqlQuery);
			$statment->bindParam(':item_id',$id_item_int,PDO::PARAM_INT);
			if(!$statment->execute()){
				echo print_r($statment->errorInfo());
			}
		}
	}


public function db_addCard(){
	if(isset($this->db)){
		if(isset($_POST['cart_id_item']) && isset($_POST['cart_id_customer'])){

			$id_item = $_POST['cart_id_item'];
			$id_customer = $_POST['cart_id_customer'];
			$sqlQuery = "INSERT INTO Cart(id_item,id_customer) VALUES (:id_item,id_customer)";
			$statment = $this->db->prepare($sqlQuery);
			$statment->bindParam(':id_item',$id_item,PDO::PARAM_STR);
			$statment->bindParam(':id_customer',$id_customer,PDO::PARAM_STR);

			if(!$statment->execute()){
				echo print_r($statment->errorInfo());
			}
		}
	}
}
?>