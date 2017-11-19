<?php
include_once "Mapper.php";
include_once "Uow.php";
include_once "laptopIdMap.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/soen341/dataSource/LTdg.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/soen341/domain/domainObjects/products/Laptop.php";

class LaptopMapper extends Mapper{
	private $obj;
	private $laptop;
	private $laptopIDMAP;
	private $lTdg;
	
	
	public function __construct(){
		$this->laptopIDMAP = new LaptopIdMap();
		if ($this->lTdg == null){
			$this->lTdg = new LTdg();
		}
	}
	
	public function MakeNew($brandname, $modelNumber, $price, $weight, $processorType, $ramSize,
			$hdSize, $noCPU, $displaySize, $battInfo, $os){
		$this->obj = new laptop($brandname, $modelNumber, $price, $weight, $processorType, $ramSize,
			$hdSize, $noCPU, $displaySize, $battInfo, $os);
		$this->laptopIDMAP->add($this->obj);
		UnitOfWork::registerNew($this->obj);
		UnitOfWork::commit();
		//UOW.registerNew($this, $this->obj);
	}
	
	/*public function find($id){
		if ($this->laptopIDMAP.get($id) == null){
			
			if($this->lTdg.get($id) != null){
				//get the exact values from the row returned from the db
				//use them as parameters to create the object.
				$this->obj.create();
				$this->laptopIDMAP.add($this->obj);
				return	$this->obj;
			} 	
		}
		else{
			$this->obj = $this->laptopIDMAP.get(id);
			return $this->obj;
		}
	}
	
	public function set($id){
		
		//$this->obj.property = value; you can call all set methodds in the object
		$this->obj.set(); //changes values of obj attributes
		return $this->UOW.registerDirty($this->obj);
	}*/
	
	public function erase($id){
		$this->laptopIDMAP->delete($id);
		UnitOfWork::registerDelete($this, $id);
		UnitOfWork::commit();
	}
	
	public function save($obj){
		$this->lTdg->save($obj);
		
	
	}
		
	public function delete($id){
		$this->lTdg->delete($id);
	
	}
}

?>