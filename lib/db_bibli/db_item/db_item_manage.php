<?php

class db_item_manage{

	private $db;
	public function __construct($db){
		$this->db = $db;
	}

	public function db_deleteItem($item){
		if(isset($this->db)){
			$id_item_int = (int)$item->getIdItem(); 
			$sqlQuery="DELETE From User WHERE id_item = :item_id";
			$statment = $this->bd->prepare($sqlQuery);
			$statment->bindParam(':item_id',$id_item_int,PDO::PARAM_INT);
			$statment->execute();
		}
	}

	public function db_updateItem($item){
		if(isset($this->db)){
				$id_item = $item->getIdItem();
				$name = $item->getName();
				$sellBID= $item->getSellBID();
				$sellBO= $item->getSellBO();
				$sellBIN= $item->getSellBIN();
				$category= $item->getCategory();
				$info= $item->getInfo();
				$delivery_price= $item->getDeliveryPrice();
				$price= $item->getPrice();
				$fromTime= $item->getFromTime();
				$toTime= $item->getToTime();
				$seller_id= $item->getSellerId();
				$customer_id= $item->getCustomerId();
				$pic = $item->getPic();


				$sqlQuery = "UPDATE Item SET name = :name, sellBID= :sellBID, sellBO = :sellBO, sellBIN = :sellBIN, category = :category, info = :info, delivery_price = :delivery_price, price = :price, fromTime = :fromTime, toTime = :toTime, seller_id = :seller_id, customer_id = :customer_id, pic = :pic WHERE id_item = :id_item";
				$statment = $this->db->prepare($sqlQuery);
				$statment->bindParam(':name',$name,PDO::PARAM_STR);
				$statment->bindParam(':sellBID',$sellBID,PDO::PARAM_BOOL);
				$statment->bindParam(':sellBO',$sellBO,PDO::PARAM_BOOL);
				$statment->bindParam(':sellBIN',$sellBIN,PDO::PARAM_BOOL);
				$statment->bindParam(':category',$category,PDO::PARAM_STR);
				$statment->bindParam(':info',$info,PDO::PARAM_STR);
				$statment->bindParam(':delivery_price',$delivery_price,PDO::PARAM_STR);
				$statment->bindParam(':price',$price,PDO::PARAM_STR);
				$statment->bindParam(':fromTime',$fromTime,PDO::PARAM_STR);
				$statment->bindParam(':toTime',$toTime,PDO::PARAM_STR);
				$statment->bindParam(':seller_id',$seller_id,PDO::PARAM_STR);
				$statment->bindParam(':customer_id',$customer_id,PDO::PARAM_STR);
				$statment->bindParam(':id_item',$id_item,PDO::PARAM_INT);
				$statment->bindParam(':pic',$pic,PDO::PARAM_STR);
				$statment->execute();
		}
	}

	public function db_addItem(){
		if(isset($this->db)){
		
			if(isset($_POST['item_name']) && (isset($_POST['sellBID']) || isset($_POST['sellBO']) || isset($_POST['sellBIN'])) && isset($_POST['category']) && isset($_POST['info']) && isset($_POST['price']) && isset($_POST['fromTime']) && isset($_POST['toTime'])){
				$name = $_POST['item_name'];
				$sellBID= isset($_POST['sellBID']) ? 1 :0;
				$sellBO=  isset($_POST['sellBO']) ? 1 :0;
				$sellBIN= isset($_POST['sellBIN']) ? 1 :0;
				$category= $_POST['category'];
				$info= $_POST['info'];
				$delivery_price= 2.7;
				$price= $_POST['price'];
				$fromTime= $_POST['fromTime'];
				$toTime= $_POST['toTime'];
				$seller_id= $_SESSION['db_user']->getEmail();
				$pic = $_POST['pic'];
				

				$sqlQuery = "INSERT INTO Item (id_item,name,sellBID,sellBO,sellBIN,category,info,delivery_price,price,fromTime,toTime,seller_id,customer_id,pic) VALUES (NULL,:name,:sellBID,:sellBO,:sellBIN,:category,:info,:delivery_price,:price,:fromTime,:toTime,:seller_id,NULL,:pic)";

				$statment = $this->db->prepare($sqlQuery);
				$statment->bindParam(':name',$name,PDO::PARAM_STR);
				$statment->bindParam(':sellBID',$sellBID,PDO::PARAM_INT);
				$statment->bindParam(':sellBO',$sellBO,PDO::PARAM_INT);
				$statment->bindParam(':sellBIN',$sellBIN,PDO::PARAM_INT);
				$statment->bindParam(':category',$category,PDO::PARAM_STR);
				$statment->bindParam(':info',$info,PDO::PARAM_STR);
				$statment->bindParam(':delivery_price',$delivery_price,PDO::PARAM_STR);
				$statment->bindParam(':price',$price,PDO::PARAM_STR);
				$statment->bindParam(':fromTime',$fromTime,PDO::PARAM_STR);
				$statment->bindParam(':toTime',$toTime,PDO::PARAM_STR);
				$statment->bindParam(':seller_id',$seller_id,PDO::PARAM_STR);
				$statment->bindParam(':pic',$pic,PDO::PARAM_STR);

				if (!$statment->execute()) {
			    print_r($statment->errorInfo());
				
				}
			}
		}
	}

	public function getItemTabFromWhere($whereClause){
		if(isset($this->db)){
			$sqlQuery= "SELECT * FROM Item WHERE ".$whereClause;
			$statment = $this->db->prepare($sqlQuery);
			$statment->execute();
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