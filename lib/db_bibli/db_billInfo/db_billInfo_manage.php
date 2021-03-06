<?php

/*All SQL table have an equivalent in php : there is a class db_<tabs_name> to represent the sql row 
	the db_<tabs_name>_manage class is for update/remove/add one of this item in the Mysql data base 

	all "manage" class receive a db_<tabs_name> object by reference to update the database with same data as saved in the  db_<tabs_name> class*/
class db_billInfo_manage{
	private $db;
	public function __construct($db){
		$this->db = $db;
	}

	public function db_deleteBill($bill){
		if(isset($this->db)){
			$id_bill_int = (int)$bill->getIdBill(); 
			$sqlQuery="DELETE From Bill_info WHERE id_billInfo = :id_billInfo";
			$statment = $this->db->prepare($sqlQuery);
			$statment->bindParam(':id_billInfo',$id_bill_int,PDO::PARAM_INT);
			if(!$statment->execute()){
				echo print_r($statment->errorInfo());
			}
		}
	}

	public function db_updateBill($bill){

		if(isset($this->db)){
		$email = $bill->getEmail();
		$typeOfPayment = $bill->getTypeOfPayment();
		$cardNumber = $bill->getCardNumber();
		$expiration = $bill->getExpirationDate();
		$cvc = $bil->getCVC();
		$name_on_card = $bill->getNameOnCard();
		$id_billInfo = $bill->getIdBill();

		$sqlQuery = "UPDATE Bill_info SET eamil = :email, type_of_payment = type_of_payment, card_number = :card_number, name_on_card = :name_on_card, cvc = :cvc, expiration_date = :expiration_date WHERE id_billInfo = :id_billInfo";

		$statment = $this->db->prepare($sqlQuery);
		$statment->bindParam(':email',$email,PDO::PARAM_STR);
		$statment->bindParam(':type_of_payment',$typeOfPayment,PDO::PARAM_STR);
		$statment->bindParam(':card_number',$cardNumber,PDO::PARAM_STR);
		$statment->bindParam(':name_on_card',$name_on_card,PDO::PARAM_STR);
		$statment->bindParam(':cvc',$cvc,PDO::PARAM_INT);
		$statment->bindParam(':expiration_date',$expiration,PDO::PARAM_STR);
		$statment->bindParam(':id_billInfo',$id_billInfo,PDO::PARAM_INT);

		if(!$statment->execute()){
				echo print_r($statment->errorInfo());
			}

		}

	}


	public function db_addBill(){
		if(isset($this->db)){
			if(isset($_POST['email']) && isset($_POST['type_of_payment']) && isset($_POST['card_number']) && isset($_POST['cvc']) && isset($_POST['name_on_card'])){
				$email = $_POST['email'];
				$typeOfPayment = $_POST['type_of_payment'];
				$cardNumber = $_POST['card_number'];
				$expiration = $_POST['expirationDate'];
				$cvc = $_POST['cvc'];
				$name_on_card = $_POST['name_on_card'];
			

				$sqlQuery = "INSERT INTO Bill_info(id_billInfo,email,type_of_payment,card_number,expiration_date,cvc,name_on_card) VALUES (null,:email,:type_of_payment,:card_number,:expiration_date,:cvc,:name_on_card)";

				$statment = $this->db->prepare($sqlQuery);
				$statment->bindParam(':email',$email,PDO::PARAM_STR);
				$statment->bindParam(':type_of_payment',$typeOfPayment,PDO::PARAM_STR);
				$statment->bindParam(':card_number',$cardNumber,PDO::PARAM_STR);
				$statment->bindParam(':cvc',$cvc,PDO::PARAM_INT);
				$statment->bindParam(':name_on_card',$name_on_card,PDO::PARAM_STR);
				$statment->bindParam(':expiration_date',$expiration_date,PDO::PARAM_STR);

				if(!$statment->execute()){
						echo print_r($statment->errorInfo());
				}

			}
			


		}

	}


}


?>