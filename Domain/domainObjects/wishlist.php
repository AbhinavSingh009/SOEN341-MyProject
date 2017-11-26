<<?php

class wishlist{
private $username;
private $product;

public function __construct($Username, $Product){
$this->username = $username;
$this->product = $product;

}

public function getUsername(){
  return $this -> username;

}

public function getProduct()
  return $this -> product;

}
 ?>
