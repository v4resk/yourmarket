<?php

class db_user_manage{

	private $db;
	public function __construct($db){
		$this->db = $db;
	}

	// ADD USER / REMOVE USER from $db_user 
	public function db_deleteUser($user){
		if(isset($this->db)){
			$user_email_string = (String)$user->getEmail(); 


			//BEFORE WE NEED TO DELET ALL BillInfo related to user
			$sqlQuery = "DELETE FROM Bill_info WHERE email = :user_email";
			$statment = $this->db->prepare($sqlQuery);
			$statment->bindParam(':user_email',$user_email_string,PDO::PARAM_STR);
			if(!$statment->execute()) {
			    print_r($statment->errorInfo());
				
				}


			//BEFORE WE NEED TO DELET ALL _order related to user
			$sqlQuery = "DELETE FROM _order WHERE email = :user_email";
			$statment = $this->db->prepare($sqlQuery);
			$statment->bindParam(':user_email',$user_email_string,PDO::PARAM_STR);
			if(!$statment->execute()) {
			    print_r($statment->errorInfo());
				
				}

			//BEFORE WE NEED TO DELET ALL Items list by the user
			$sqlQuery = "DELETE FROM Item WHERE seller_id = :user_email";
			$statment = $this->db->prepare($sqlQuery);
			$statment->bindParam(':user_email',$user_email_string,PDO::PARAM_STR);
			if(!$statment->execute()) {
			    print_r($statment->errorInfo());
				
				}

			$sqlQuery="DELETE From User WHERE email = :user_email";
			$statment = $this->db->prepare($sqlQuery);
			$statment->bindParam(':user_email',$user_email_string,PDO::PARAM_STR);
			if(!$statment->execute()) {
			    print_r($statment->errorInfo());
				
				}
		}
	}
	public function db_updateUser($user){
		if(isset($this->db)){
			$user_email = (String)$user->getEmail();
			$user_name = (String)$user->getName();
			$user_fName = (String)$user->getFirstName();
			$user_date_of_b = (String)$user->getDateOfBirth();
			$user_Passwd = (String)$user->getPasswd();
			$user_WhoAmI = (String)$user->getWhoAmI();
			$user_idBillInfo = (int)$user->getIdBillInfo();
			$user_favBackground = (int)$user->getFavBackgroundNo();
			$user_photoId = (String)$user->getPhotoId();
			$user_addr1 = (String)$user->getAddr1();
			$user_addr2 = (String)$user->getAddr2();
			$user_city = (String)$user->getcity();
			$user_zip = (String)$user->getZip();
			$user_country = (String)$user->getCountry();
			$user_phone = $user->getPhone();

			$sqlQuery = "UPDATE User SET name = :name, firstName = :firstName, date_naissance = :date_naissance , mdp = :passwd, whoAmI = :whoAmI, id_billInfo = :id_billInfo, fav_background_number = :favBack, photo_id = :photo_id, addr1 = :addr1, addr2 = :addr2, city = :city, postal_code = :zip, country = :country, phone = :phone WHERE email = :email";
			$statment = $this->db->prepare($sqlQuery);
			$statment->bindParam(':name',$user_name,PDO::PARAM_STR);
			$statment->bindParam(':firstName',$user_fName,PDO::PARAM_STR);
			$statment->bindParam(':date_naissance',$user_date_of_b,PDO::PARAM_STR);
			$statment->bindParam(':passwd',$user_Passwd,PDO::PARAM_STR);
			$statment->bindParam(':whoAmI',$user_WhoAmI,PDO::PARAM_STR);
			$statment->bindParam(':id_billInfo',$user_idBillInfo!="null" ? $user_idBillInfo : null,PDO::PARAM_INT);
			$statment->bindParam(':favBack',$user_favBackground,PDO::PARAM_INT);
			$statment->bindParam(':photo_id',$user_photoId,PDO::PARAM_STR);
			$statment->bindParam(':addr1',$user_addr1,PDO::PARAM_STR);
			$statment->bindParam(':addr2',$user_addr2,PDO::PARAM_STR);
			$statment->bindParam(':city',$user_city,PDO::PARAM_STR);
			$statment->bindParam(':zip',$user_zip,PDO::PARAM_STR);
			$statment->bindParam(':country',$user_country,PDO::PARAM_STR);
			$statment->bindParam(':phone',$user_phone,PDO::PARAM_STR);
			$statment->bindParam(':email',$user_email,PDO::PARAM_STR);
			
			if (!$statment->execute()) {
			    print_r($statment->errorInfo());
				
				}
		}
	}


public function db_addUser(){
	if(isset($this->db)){
		if(isset($_POST['user_email']) && isset($_POST['user_name']) && isset($_POST['user_fName']) && isset($_POST['user_date_of_b']) && isset($_POST['user_Passwd'])&& isset($_POST['user_addr1']) && isset($_POST['user_city']) && isset($_POST['user_country']) && isset($_POST['user_phone']) ){


			$user_email=(String)$_POST['user_email'];
			$user_name=(String)$_POST['user_name']; 
			$user_fName=(String)$_POST['user_fName'];
			$user_date_of_b = (String)$_POST['user_date_of_b'];
		 	$user_Passwd= (String)$_POST['user_Passwd'];
			$user_addr1= (String)$_POST['user_addr1'];
			$user_addr2= (String)$_POST['user_addr2'];
			$user_zip = (String)$_POST['user_zip'];
			$user_city= (String)$_POST['user_city'];
			$user_country= (String)$_POST['user_country'];
			$user_phone = (String)$_POST['user_phone'];
			$user_WhoAmI = isset($_POST["user_WhoAmI"]) ? $_POST["user_WhoAmI"] : "custo";

			$sqlQuery = "INSERT INTO User (name,firstName,date_naissance,email,mdp,whoAmI,id_billInfo,addr1,addr2,city,postal_code,country,phone) VALUES (:name,:firstName,:date_naissance,:email,:mdp,:whoAmI,NULL,:addr1,:addr2,:city,:postal_code,:country,:phone)";

			$statment = $this->db->prepare($sqlQuery);
			$statment->bindParam(':name',$user_name,PDO::PARAM_STR);
			$statment->bindParam(':firstName',$user_fName,PDO::PARAM_STR);
			$statment->bindParam(':date_naissance',$user_date_of_b,PDO::PARAM_STR);
			$statment->bindParam(':email',$user_email,PDO::PARAM_STR);
			$statment->bindParam(':mdp',$user_Passwd,PDO::PARAM_STR);
			$statment->bindParam(':whoAmI',$user_WhoAmI,PDO::PARAM_STR);
			$statment->bindParam(':addr1',$user_addr1,PDO::PARAM_STR);
			$statment->bindParam(':addr2',$user_addr2,PDO::PARAM_STR);
			$statment->bindParam(':city',$user_city,PDO::PARAM_STR);
			$statment->bindParam(':postal_code', $user_zip,PDO::PARAM_STR);
			$statment->bindParam(':country',$user_country,PDO::PARAM_STR);
			$statment->bindParam(':phone',$user_phone,PDO::PARAM_STR);

			
			if (!$statment->execute()) {
			    print_r($statment->errorInfo());
			    return true;
			}
			
			}else {
				return false;
			}
	}
}
}	



?>