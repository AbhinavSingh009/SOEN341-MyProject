<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/SOEN341-MyProject/Domain/domainObjects/products/Product.php";
class Computer extends Product{

    private $processorType;
	private $ramSize;
	private $hdSize; //hard drive size
	private $noCPU; //number of CPU cores
	
	//Computer constructor
	public function __construct($brandname, $modelNumber, $price, $weight, $processorType, $ramSize, $hdSize, $noCPU){
		parent::__construct($brandname, $modelNumber, $price, $weight);
		$this->processorType = $processorType;
		$this->ramSize = $ramSize;
		$this->hdSize = $hdSize;
		$this->noCPU = $noCPU;
	}



	public function getProcessorType(){
		return $this->processorType;
	}

	public function setProcessorType($processorType){
		$this->processorType = $processorType;
	}

	public function getRamSize(){
		return $this->ramSize;
	}

	public function setRamSize($ramSize){
		$this->ramSize = $ramSize;
	}

	public function getHdSize(){
		return $this->hdSize;
	}

	public function setHdSize($hdSize){
		$this->hdSize = $hdSize;
	}

	public function getNoCPU(){
		return $this->noCPU;
	}

	public function setNoCPU($noCPU){
		$this->noCPU = $noCPU;
	}

}
