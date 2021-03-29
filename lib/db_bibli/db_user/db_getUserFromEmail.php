<?php

class db_user{

	private $db;
	private $email;
	private $name;
	private $firstName;
	private $dateOfBirth;
	private $passwd;
	private $whoAmI;
	private $idBillInfo;
	private $favBackgroundNo;
	private $photoId;
	private $addr1;
	private $addr2;
	private $city;
	private $zip;
	private $country;
	private $phone;

	private function hydrate($user_data){
		if(isset($user_data['name'])){
			$this->name = $user_data['name'];
		}
		if(isset($user_data['firstName'])){
			$this->firstName = $user_data['firstName'];
		}
		if(isset($user_data['date_naissance'])){
			$this->dateOfBirth = $user_data['date_naissance'];
		}
		if(isset($user_data['mdp'])){
			$this->passwd = $user_data['mdp'];
		}
		if(isset($user_data['whoAmI'])){
			$this->whoAmI = $user_data['whoAmI'];
		}
		if(isset($user_data['id_billInfo'])){
			$this->idBillInfo = $user_data['id_billInfo'];
		}
		if(isset($user_data['fav_background_number'])){
			$this->favBackgroundNo = $user_data['fav_background_number'];
		}
		if(isset($user_data['photo_id'])){
			$this->photoId = $user_data['photo_id'];
		}
		if(isset($user_data['adrr1'])){
			$this->addr1 = $user_data['adrr1'];
		}
		if(isset($user_data['addr2'])){
			$this->addr2 = $user_data['addr2'];
		}
		if(isset($user_data['city'])){
			$this->city = $user_data['city'];
		}
		if(isset($user_data['postal_code'])){
			$this->zip = $user_data['postal_code'];
		}
		if(isset($user_data['country'])){
			$this->country = $user_data['country'];
		}
		if(isset($user_data['phone'])){
			$this->phone = $user_data['phone'];
		}
	}

	public function __construct($db,$email){
		if(isset($db)){
			$query_resp = $db->query('SELECT * FROM User WHERE email=\''.$email.'\'');
			while ($data_user = $query_resp->fetch(PDO::FETCH_ASSOC)) {
				$this->hydrate($data_user);
			}
		}
	}

	public function getNameByEmail(){
		return $this->name;
	}
	public function getFirstNameByEmail(){
		return $firstName;
	}
	public function getDateOfBirthByEmail(){
		return $dateOfBirth;
	}
	public function getPasswdByEmail(){
		return $passwd;
	}
	public function getWhoAmIByEmail(){
		return $whoAmI;
	}
	public function getIdBillInfoByEmail(){
		return $idBillInfo;
	}
	public function getFavBackgroundNoByEmail(){
		return $favBackgroundNo;
	}
	public function getPhotoIdByEmail(){
		return $photoId;
	}
	public function getAddr1ByEmail(){
		return $addr1;
	}
	public function getAddr2ByEmail(){
		return $addr2;
	}
	public function getCityByEmail(){
		return $city;
	}
	public function getZipByEmail(){
		return $zip;
	}
	public function getCountryByEmail(){
		return $country;
	}
	public function getPhoneByEmail(){
		return $phone;
	}
	public function hasPasswd($pass){
		return $isPassGood = ($pass == $this->passwd) true : false;
	}
}

?>