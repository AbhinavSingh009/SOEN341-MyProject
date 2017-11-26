<?php
include_once "User.php";
class Admin extends User{

    public function __construct($clientId, $firstName, $lastName, $physicalAddress, $emailAddress, $phoneNumber, $userName, $password, $isAdmin) {
		parent::__construct($clientId, $userName, $password,$isAdmin);
	}
}
