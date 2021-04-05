<?php

/*All SQL table have an equivalent in php : there is a class db_<tabs_name> to represent the sql row 
	the db_<tabs_name>_manage class is for update/remove/add one of this item in the Mysql data base 

	all "manage" class receive a db_<tabs_name> object by reference to update the database with same data as saved in the  db_<tabs_name> class*/

class db_billInfo{
	private $id_billInfo;
	private $email;
	private $type_of_payment;
	private $card_number;
	private $name_on_card;
	private $expiration_date;
	private $cvc;

	private function hydrate($data_bill){
		if(isset($data_bill['id_billInfo'])){
			$this->id_billInfo = $data_bill['id_billInfo'];
		}
		if(isset($data_bill['email'])){
			$this->email = $data_bill['email'];
		}
		if(isset($data_bill['type_of_payment'])){
			$this->type_of_payment = $data_bill['type_of_payment'];
		}
		if(isset($data_bill['card_number'])){
			$this->card_number = $data_bill['card_number'];
		}
		if(isset($data_bill['expiration_date'])){
			$this->expiration_date = $data_bill['expiration_date'];
		}
		if(isset($data_bill['cvc'])){
			$this->cvc = $data_bill['cvc'];
		}
		if(isset($data_bill['name_on_card'])){
			$this->name_on_card = $data_bill['name_on_card'];
		}
	}

	public function __construct($db,$id){
		if(isset($db)){
			$query_resp = $db->query('SELECT * FROM Bill_info WHERE id_billInfo=\''.$id.'\'');
			while ($data_user = $query_resp->fetch(PDO::FETCH_ASSOC)) {
				$this->hydrate($data_user);
			}
		}

	}

	public function getIdBill(){
		return $this->id_billInfo;
	}
	public function getEmail(){
		return $this->email;
	}
	public function getTypeOfPayment(){
		return $this->type_of_payment;
	}
	public function getCardNumber(){
		return $this->card_number;
	}
	public function getExpirationDate(){
		return $this->expiration_date;
	}
	public function getCVC(){
		return $this->cvc;
	}
	public function getNameOnCard(){
		return $this->name_on_card;
	}
	//----------SET--------------------
	public function setIdBill($data){
		$this->id_billInfo = $data;
	}
	public function setEmail($data){
		$this->email = $data;
	}
	public function setTypeOfPayment($data){
		$this->type_of_payment = $data;
	}
	public function setCardNumber($data){
		$this->card_number = $data;
	}
	public function setExpirationDate($data){
		$this->expiration_date = $data;
	}
	public function setCVC($data){
		$this->cvc = $data;
	}
	public function setNameOnCard($data){
		$this->name_on_card = $data;
	}

}


?>