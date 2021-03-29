<?php

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
}


?>