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
			if(isset($_POST['user_date_m']) && isset($_POST['user_id_item']) && isset($_POST['user_status']) && (isset($_POST['user_price']) || isset($_POST['user_max_price']))&& isset($_POST['user_email'])){

				$id_order = $_P
				$email= $_POST[''];
				$date_m= $_POST[''];
				$id_item= $_POST[''];
				$status= $_POST[''];
				$price= $_POST[''];
				$max_price= $_POST[''];

			}
			
		}
	}

}
?>