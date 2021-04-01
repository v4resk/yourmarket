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

	//--------GET----------------
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

	//-----------SET----------------
	public function setIdOrder($val){
		$this->id_order = $val;
	}
	public function setIdItem($val){
		$this->id_item= $val;
	}
	public function setEmail($val){
		$this->email= $val;
	}
	public function setDate_m($val){
		$this->date_m= $val;
	}
	public function setStatus($val){
		$this->status= $val;
	}
	public function setPrice($val){
		$this->price= $val;
	}
	public function setMaxPrice($val){
		$this->max_price= $val;
	}
}



?>