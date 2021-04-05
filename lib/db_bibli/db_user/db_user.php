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
		if(isset($user_data['addr1'])){
			$this->addr1 = $user_data['addr1'];
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
			$this->email = $email;
		}
	}

	//-----------------GET-----------------------------
	public function getEmail(){
		return $this->email;
	}

	public function getName(){
		return $this->name;
	}
	public function getFirstName(){
		return $this->firstName;
	}
	public function getDateOfBirth(){
		return $this->dateOfBirth;
	}
	public function getPasswd(){
		return $this->passwd;
	}
	public function getWhoAmI(){
		return $this->whoAmI;
	}
	public function getIdBillInfo(){
		return $this->idBillInfo;
	}
	public function getFavBackgroundNo(){
		return $this->favBackgroundNo;
	}
	public function getPhotoId(){
		return $this->photoId;
	}
	public function getAddr1(){
		return $this->addr1;
	}
	public function getAddr2(){
		return $this->addr2;
	}
	public function getCity(){
		return $this->city;
	}
	public function getZip(){
		return $this->zip;
	}
	public function getCountry(){
		return $this->country;
	}
	public function getPhone(){
		return $this->phone;
	}
	//----------SET---------------
	public function setEmail($email){
		$this->email = (String)$email;
	}

	public function setName($name){
		$this->name = (String)$name;
	}
	public function setFirstName($fname){
		$this->firstName = (String)$fname;
	}
	public function setDateOfBirth($dateOfBirth){
		$this->dateOfBirth = (String)$dateOfBirth;
	}
	public function setPasswd($pass){
		$this->passwd = (String)$pass;
	}
	public function setWhoAmI($whoAmI){
		$this->whoAmI = (String)$whoAmI;
	}
	public function setIdBillInfo($db){
		$statment = $db->prepare("SELECT id_billInfo FROM Bill_info WHERE email = :email");
		$statment->bindParam(':email',$this->email,PDO::PARAM_STR);
		$statment->execute();

		while ($res = $statment->fetch()){
			$this->idBillInfo = (int)$res['id_billInfo'];
		}
	}
	public function setFavBackgroundNo($favBack){
		$this->favBackgroundNo = $favBack;
	}
	public function setPhotoId($id){
		$this->photoId = $id;
	}
	public function setAddr1($addr){
		$this->addr1 = $addr;
	}
	public function setAddr2($addr){
		$this->addr2 = $addr;
	}
	public function setCity($city){
		$this->city = $city;
	}
	public function setZip($zip){
		$this->zip = $zip;
	}
	public function setCountry($country){
		$this->country = $country;
	}
	public function setPhone($phone){
		$this->phone = $phone;
	}
	public function hasPasswd($pass){
		return ($pass == $this->passwd) ? true : false;
	}
}
?>