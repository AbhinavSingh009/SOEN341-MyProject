<?php

class Desktop extends Computer{
	private $dimensions; //(height cm, width cm, length cm )
	
	//Desktop constructor 
	public function __consrtruct($brandname, $modelNumber, $price, $weight, $processorType, $ramSize,
			$hdSize, $noCPU, $height, $length, $width) {
		parent::__construct($brandname, $modelNumber, $price, $weight, $processorType, $ramSize, $hdSize, $noCPU);
		$this->dimensions = new Dimensions($height, $length, $width);
	}
	
	public function getDimensions(){
		return $this->dimensions;
	}
	
	public function setDimensions($height, $length, $width){
		$this->dimensions = new Dimensions($height, $length, $width);
	}
	
}

?>
