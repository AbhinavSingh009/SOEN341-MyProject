<?php
class Dimensions{
    private $height;
	private $length;
	private $width;
	
	public function __construct($height, $length, $width){
		$this->height = $height;
		$this->length = $length;
		$this->width = $width;
	}
	
	public function getHeight(){
		return $this->height;
	}
	
	public function setHeight($height){
		$this->height = $height;
	}
	
	public function getLength(){
		return $this->length;
	}
	
	public function setLength($length){
		$this->length = $length;
	}
	
	public function getWidth(){
		return $this->width;
	}
	
	public function setWidth($width){
		$this->width = $width;
	}

}
?>
