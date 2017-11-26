<?php
class Tablet extends Laptop{
	private $cameraInfo;
	private $dimensions;

	//Tablet constructor 
	public function __construct($brandname, $modelNumber, $price, $weight, $processorType, $ramSize,
			$hdSize, $noCPU, $displaySize, $battInfo, $os, $cameraInfo, $height, $length, $width) {
		parent::__construct($brandname, $modelNumber, $price, $weight, $processorType, $ramSize, $hdSize, $noCPU, $displaySize, $battInfo, $os);
		$this->cameraInfo = $cameraInfo;
		$this->dimensions = new Dimensions($height, $length, $width);
	}
	
	
	public function getCameraInfo(){
		return $this->cameraInfo;
	}
	
	public function setCameraInfo($cameraInfo){
		$this->cameraInfo = $cameraInfo;
	}
	
	public function getDimensions(){
		return $this->dimensions;
	}
	
	public function setDimensions($height, $length, $width){
		$this->dimensions = new Dimensions($height, $length, $width);
	}
	

}

?>