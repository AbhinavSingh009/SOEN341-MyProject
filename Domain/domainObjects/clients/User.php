<?php
class User {
	private $clientId;
	private $userName;
	private $isAdmin;
	private $password;
	
	public function __construct($clientId, $userName, $password, $isAdmin){
		$this->clientId = $clientId;
		$this->userName = $userName;
		$this->isAdmin = $isAdmin;
		$this->password = $password;
	}
	
	public function getClientId(){
		return $this->clientId;
	}
	
	public function setClientId($clientId){
		$this->clientId = $clientId;
	}
	
	public function getUserName(){
		return $this->userName;
	}
	
	public function setUserName($userName){
		$this->userName=$userName;
	}
	
	public function getIsAdmin(){
		return $this->isAdmin;
	}
	
	public function setIsAdmin($isAdmin){
		$this->isAdmin = $isAdmin;
	}

}

?>