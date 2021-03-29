<?php

class db_order{

	private $id_order;
	private $email;
	private $date_m;
	private $id_item;
	private $status;
	private $price;
	private $max_price;

	private function hydrate($data_order){
		if(isset($data_order['id_order'])){
			$this->id_order = $data_order['id_order'];
		}
		if(isset($data_order['email'])){
			$this->email = $data_order['email'];
		}
		if(isset($data_order['email'])){
			$this->date_m = $data_order['date_m'];
		}
		if(isset($data_order['id_item'])){
			$this->id_item = $data_order['id_item'];
		}
		if(isset($data_order['status'])){
			$this->status = $data_order['status'];
		}
		if(isset($data_order['price'])){
			$this->price = $data_order['price'];
		}
		if(isset($data_order['max_price'])){
			$this->max_price = $data_order['max_price'];
		}
	}

	public function __construct($db,$id){
		if(isset($db)){
			$query_resp = $db->query('SELECT * FROM _order WHERE id_order=\''.$id.'\'');
			while ($data_user = $query_resp->fetch(PDO::FETCH_ASSOC)) {
				$this->hydrate($data_user);
			}
		}
	}

	public function getIdOrder(){
		return $this->id_order;
	}
	public function getIdItem(){
		return $this->id_item;
	}
	public function getEmail(){
		return $this->email;
	}
	public function getDate_m(){
		return $this->date_m;
	}
	public function getStatus(){
		return $this->status;
	}
	public function getPrice(){
		return $this->price;
	}
	public function getMaxPrice(){
		return $this->max_price;
	}

}



?>