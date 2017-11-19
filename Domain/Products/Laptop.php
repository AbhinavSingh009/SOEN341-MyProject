<?php
class Laptop extends Computer{
	private $displaySize;
	private $battInfo;
	private $os;

	//Laptop constructor when being pulled up from the database
	public function __construct($brandname, $modelNumber, $price, $weight, $processorType, $ramSize,
			$hdSize, $noCPU, $displaySize, $battInfo, $os) {
		parent::__construct($brandname, $modelNumber, $price, $weight, $processorType, $ramSize, $hdSize, $noCPU);
		$this->displaySize = $displaySize;
		$this->battInfo = $battInfo;
		$this->os = $os;
	}
	
	public function getDisplaySize(){
		return $this->displaySize;
	}
	
	public function setDisplaySize($displaySize){
		$this->displaySize=$displaySize;
	}
	
	public function getBattInfo(){
		return $this->battInfo;
	}
	
	public function setBattInfo($battInfo){
		$this->battInfo=$battInfo;
	}
	
	public function getOs(){
		return $this->os;
	}
	
	public function setOs($os){
		$this->os = $os;
	}
}
?>


