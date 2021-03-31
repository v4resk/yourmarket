<?php

class db_item{

	private $id_item;
	private $name;
	private $sellBID;
	private $sellBO;
	private $sellBIN;
	private $category;
	private $info;
	private $delivery_price;
	private $price;
	private $fromTime;
	private $toTime;
	private $seller_id;
	private $customer_id;

	private function hydrate($data_item){
		if(isset($data_item['id_item'])){
			$this->id_item = $data_item['id_item'];
		}
		if(isset($data_item['name'])){
			$this->name = $data_item['name'];
		}
		if(isset($data_item['sellBID'])){
			$this->sellBID = $data_item['sellBID'];
		}
		if(isset($data_item['sellBO'])){
			$this->sellBO = $data_item['sellBO'];
		}
		if(isset($data_item['sellBIN'])){
			$this->sellBIN = $data_item['sellBIN'];
		}
		if(isset($data_item['category'])){
			$this->category = $data_item['category'];
		}
		if(isset($data_item['info'])){
			$this->info = $data_item['info'];
		}
		if(isset($data_item['delivery_price'])){
			$this->delivery_price = $data_item['delivery_price'];
		}
		if(isset($data_item['price'])){
			$this->price = $data_item['price'];
		}
		if(isset($data_item['fromTime'])){
			$this->fromTime = $data_item['fromTime'];
		}
		if(isset($data_item['toTime'])){
			$this->toTime = $data_item['toTime'];
		}
		if(isset($data_item['seller_id'])){
			$this->seller_id = $data_item['seller_id'];
		}
		if(isset($data_item['customer_id'])){
			$this->customer_id = $data_item['customer_id'];
		}
	}

	//Init an item from his ID;
	public function __construct($db,$id){

		if(isset($db)){
			$query_resp = $db->query('SELECT * FROM Item WHERE id_item=\''.$id.'\'');
			while ($data_user = $query_resp->fetch(PDO::FETCH_ASSOC)) {
				$this->hydrate($data_user);
			}
		}
	}

	//----------------GET------------------------
	public function getIdItem(){
		return $this->id_item;
	}

	public function getName(){
		return $this->name;
	}
	public function getSellBID(){
		return $this->sellBID;
	}
	public function getSellBO(){
		return $this->sellBO;
	}
	public function getSellBIN(){
		return $this->sellBIN;
	}
	public function getCategory(){
		return $this->category;
	}
	public function getInfo(){
		return $this->info;
	}
	public function getDeliveryPrice(){
		return $this->delivery_price;
	}
	public function getPrice(){
		return $this->price;
	}
	public function getFromTime(){
		return $this->fromTime;
	}
	public function getToTime(){
		return $this->toTime;
	}
	public function getSellerId(){
		return $this->seller_id;
	}
	public function getCustomerId(){
		return $this->customer_id;
	}
	//-------------------SET---------------------

	public function setIdItem($id){
		$this->id_item = $id;
	}
	public function setName($name){
		$this->name = $name;
	}
	public function setSellBID($boolB){
		$this->sellBID = $boolB;
	}
	public function setSellBO($boolB){
		$this->sellBO = $boolB;
	}
	public function setSellBIN($boolB){
		$this->sellBIN = $boolB;
	}
	public function setCategory($category){
		$this->category = $category;
	}
	public function setInfo($info){
		$this->info = $info;
	}
	public function setDeliveryPrice($delivery){
		$this->delivery_price = $delivery;
	}
	public function setPrice($price){
		$this->price = $price;
	}
	public function setFromTime($time){
		$this->fromTime = $time;
	}
	public function setToTime($time){
		$this->toTime = $time;
	}
	public function setSellerId($sellId){
		$this->seller_id = $sellId;
	}
	public function setCustomerId($custId){
		$this->customer_id = $custId;
	}
}
?>