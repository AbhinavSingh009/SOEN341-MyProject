<?php
class Monitor extends Product{
	private $size; //inches

	//Monitor constructor
	public function __construct($brandname, $modelNumber, $price, $weight, $size) {
		parent::__construct($brandname, $modelNumber, $price, $weight);
		$this->size = $size;
	}
	
	public function getSize(){
		return $this->size;
	}
	
	public function setSize($size){
		$this->size = $size;
	}
	
}


?>