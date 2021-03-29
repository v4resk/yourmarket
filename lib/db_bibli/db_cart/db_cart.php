<?php

class db_cart{
	private $id_customer;
	private $id_item;

	private function hydrate($data_cart){
		if(isset($data_cart['id_item'])){
			$this->id_item = $data_cart['id_item'];
		}
		if(isset($data_cart['id_customer'])){
			$this->id_customer = data_cart['id_customer'];
		}
	}
	public function __construct($db,$id_cust){
		if(isset($db)){
			$query_resp = $db->query('SELECT * FROM Cart WHERE id_customer=\''.$id_cust.'\'');
			while ($data_user = $query_resp->fetch(PDO::FETCH_ASSOC)) {
				$this->hydrate($data_user);
			}
		}
	}
}
?>