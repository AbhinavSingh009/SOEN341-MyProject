<?php

class Product{
    private $brandname;
    private $modelNumber;
    private $price;
    private $weight;
    

	//Product constructor 
	public function __construct($brandname, $modelNumber, $price, $weight){
		$this->brandname = $brandname;
		$this->modelNumber = $modelNumber;
		$this->price = $price;
		$this->weight = $weight;
		
	}
	
	public function getBrandname(){
		return $this->brandname;
	}
	
	public function setBrandname($brandname){
		$this->brandname = $brandname;
	}
	
	public function getModelNumber(){
		return $this->modelNumber;
	}
	
	public function setModelNumber($modelNumber){
		$this->modelNumber = $modelNumber;
	}
	
	public function getPrice(){
		return $this->price;
	}
	
	public function setPrice($price){
		$this->price = $price;
	}
		
	public function getWeight(){
		return $this->weight;
	}
	
	public function setWeight($weight){
		$this->weight = $weight;
	}
	
	public function getId(){

		return $this->id;
	}
	
	public function setId($id){
		$this->id = $id;
	}



}