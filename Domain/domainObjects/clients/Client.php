<?php
include_once "User.php";
class Client extends User{
	private $firstName;
	private $lastName;
	private $physicalAddress;
	private $emailAddress;
	private $phoneNumber;
	//private Wishlist wishlist;
	
	public function __construct($clientId, $firstName, $lastName, $physicalAddress, $emailAddress, $phoneNumber, $userName, $password, $isAdmin) {
		parent::__construct($clientId, $userName, $password,$isAdmin);
		$this->firstName=$firstName;
		$this->lastName=$lastName;
		$this->physicalAddress=$physicalAddress;
		$this->emailAddress=$emailAddress;
		$this->phoneNumber=$phoneNumber;
	}
	
	public function getFirstName(){
		return $this->firstName;
	}
	
	public function setFirstName($firstName){
		$this->firstName=$firstName;
	}

	public function getLastName(){
		return $this->lastName;
	}
	
	public function setLastName($lastName){
		$this->lastName=$lastName;
	}
	
	public function getPhysicalAddress(){
		return $this->physicalAddress;
	}
	
	public function setPhysicalAddress($physicalAddress){
		$this->physicalAddress=$physicalAddress;
	}
	
	public function getEmailAddress(){
		return $this->emailAddress;
	}
	
	public function setEmailAddress($emailAddress){
		$this->emailAddress = $emailAddress;
	}
	
	public function getPhoneNumber(){
		return $this->phoneNumber;
	}
	
	public function setPhoneNumber($phoneNumber){
		$this->phoneNumber = $phoneNumber;
	}
	
}

?>