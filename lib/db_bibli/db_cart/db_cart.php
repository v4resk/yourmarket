<?php
/*All SQL table have an equivalent in php : there is a class db_<tabs_name> to represent the sql row 
	the db_<tabs_name>_manage class is for update/remove/add one of this item in the Mysql data base 

	all "manage" class receive a db_<tabs_name> object by reference to update the database with same data as saved in the  db_<tabs_name> class*/
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
	// We can construct a cart whith both id;
	public function __construct($db,$id_cust,$id_item){
		if(isset($db)){
			if(isset($id_cust)){
				$query_resp = $db->query('SELECT * FROM Cart WHERE id_customer=\''.$id_cust.'\'');
				while ($data_user = $query_resp->fetch(PDO::FETCH_ASSOC)) {
				$this->hydrate($data_user);
				}
			}else if(isset($id_item)){
				$query_resp = $db->query('SELECT * FROM Cart WHERE id_item=\''.$id_item.'\'');
				while ($data_user = $query_resp->fetch(PDO::FETCH_ASSOC)){
				$this->hydrate($data_user);
				}
			}
			
		}
	}

	//----------------GET------------------------

	public function getIdCustomer(){
		return $this->$id_customer;
	}

	public function getIdItem(){
		return $this->$id_item;
	}

	//----------------SET------------------------	

	public function setIdCustomer($id){
		$this->id_customer=$id;
	}

	public function setIdItem($id){
		$this->id_item=$id;
	}
}
?>