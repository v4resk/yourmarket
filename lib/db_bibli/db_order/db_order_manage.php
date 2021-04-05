<?php 


class db_order_manage{

	private $db;
	public function __construct($db){
		$this->db = $db;
	}

	public function db_deleteOrder($order){
		if(isset($this->db)){
			$id_order_int = (int)$order->getIdOrder(); 
			$sqlQuery= "DELETE From _order WHERE id_order = :id_order";
			$statment = $this->bd->prepare($sqlQuery);
			$statment->bindParam(':id_order',$id_order_int,PDO::PARAM_INT);
			$statment->execute();
		}
	}

	public function db_updateOrder($order){
		$id_order = $order->getIdOrder();
		$email= $order->getEmail() ;
		$date_m= $order->getDate_m();
		$id_item= $order->getIdItem();
		$status= $order->getStatus();
		$price= $order->getPrice();
		$max_price= $order->getMaxPrice();

		$sqlQuery = "UPDATE _order SET email = :email, date_m = :date_m, id_item = :id_item, status = :status, price = :price , max_price= :max_price WHERE id_order = :id_order";

		$statment = $this->db->prepare($sqlQuery);
		$statment->bindParam(':email',$email,PDO::PARAM_STR);
		$statment->bindParam(':date_m',$date_m,PDO::PARAM_STR);
		$statment->bindParam(':id_item',$id_item,PDO::PARAM_INT);
		$statment->bindParam(':status',$status,PDO::PARAM_INT);
		$statment->bindParam(':price',$price,PDO::PARAM_STR);
		$statment->bindParam(':max_price',$max_price,PDO::PARAM_STR);
		$statment->bindParam(':id_order',$id_order,PDO::PARAM_INT);

		$statment->execute();

	}

	public function db_addOrder(){
		if(isset($this->db)){
			
				$email= $_SESSION["bid_email"]; // A REMPLIR ! 
				$date_m= $_SESSION["bid_date_m"];
				$id_item= $_SESSION["bid_id_item"];
				$status= $_SESSION["bid_status"];
				$price = isset($_SESSION["bid_price"]) ? $_SESSION["bid_price"] : null;
				$max_price= isset($_SESSION["bid_max_price"]) ? $_SESSION["bid_max_price"] : null;
				$null = null;

				$sqlQuery = "INSERT INTO _order(id_order,email,date_m,id_item,status,price,max_price) VALUES (:id_order,:email,:date_m,:id_item,:status,:price,:max_price)";
				$statment = $this->db->prepare($sqlQuery);
				$statment->bindParam(':id_order',$null,PDO::PARAM_INT);
				$statment->bindParam(':email',$email,PDO::PARAM_STR);
				$statment->bindParam(':date_m',$date_m,PDO::PARAM_STR);
				$statment->bindParam(':id_item',$id_item,PDO::PARAM_INT);
				$statment->bindParam(':status',$status,PDO::PARAM_INT);
				$statment->bindParam(':price',$price,PDO::PARAM_STR);
				$statment->bindParam(':max_price',$max_price,PDO::PARAM_STR);

				$statment->execute();
			
		}
	}


		public function getOrderTabFromWhere($whereClause){
		if(isset($this->db)){
			$sqlQuery= "SELECT * FROM _order WHERE ".$whereClause;
			$statment = $this->db->prepare($sqlQuery);
			$statment->execute();
			$itemTab = [];
			$i = 0;
			while ($resp = $statment->fetch()) {
				$itemTab[$i] = new db_item($this->db,(int)$resp['id_order']);
				$i++; 
			}
			return $itemTab;
		}
	}

}
?>