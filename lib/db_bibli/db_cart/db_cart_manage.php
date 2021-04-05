<?php
/*All SQL table have an equivalent in php : there is a class db_<tabs_name> to represent the sql row 
	the db_<tabs_name>_manage class is for update/remove/add one of this item in the Mysql data base 

	all "manage" class receive a db_<tabs_name> object by reference to update the database with same data as saved in the  db_<tabs_name> class*/

class db_cart_manage{
private $db;
	public function __construct($db){
		$this->db = $db;
	}


public function db_deleteCart($id_cust,$id_item){
		if(isset($this->db)){

			$sqlQuery="DELETE From Cart WHERE id_item = :item_id AND id_customer = :id_cust";
			$statment = $this->db->prepare($sqlQuery);
			$statment->bindParam(':item_id',$id_item,PDO::PARAM_INT);
			$statment->bindParam(':id_cust',$id_cust,PDO::PARAM_STR);
			if(!$statment->execute()){
				echo print_r($statment->errorInfo());
			}
		}
	}


public function db_addCard(){
	if(isset($this->db)){
		if(isset($_POST['id_item_cart']) && isset($_POST['cart_id_customer'])){

			$id_item = $_POST['id_item_cart'];
			$id_customer = $_POST['cart_id_customer'];
			$sqlQuery = "INSERT INTO Cart(id_item,id_customer) VALUES (:id_item,:id_customer)";
			$statment = $this->db->prepare($sqlQuery);
			$statment->bindParam(':id_item',$id_item,PDO::PARAM_STR);
			$statment->bindParam(':id_customer',$id_customer,PDO::PARAM_STR);

			if(!$statment->execute()){
				echo print_r($statment->errorInfo());
			}
		}
	}
}

public function getCartTabFromWhere($whereClause){
		if(isset($this->db)){
			$sqlQuery= "SELECT * FROM Cart WHERE ".$whereClause;
			$statment = $this->db->prepare($sqlQuery);
			if(!$statment->execute()){
				echo print_r($statment->errorInfo());
			}
			$itemTab = [];
			$i = 0;
			while ($resp = $statment->fetch()) {
				$itemTab[$i] = new db_item($this->db,(int)$resp['id_item']);
				$i++; 
			}
			return $itemTab;
		}
	}
}
?>