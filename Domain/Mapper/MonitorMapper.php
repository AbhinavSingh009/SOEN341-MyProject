<?php
include_once "Mapper.php";
include_once "Uow.php";
include_once "monitorIdMap.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/soen341/dataSource/MTdg.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/soen341/domain/domainObjects/products/Monitor.php";

class LaptopMapper extends Mapper{
	private $obj;
	private $monitor;
	private $monitorIDMAP;
	private $mTdg;
	
	
	public function __construct(){
		$this->monitorIDMAP = new MonitorIdMap();
		if ($this->mTdg == null){
			$this->mTdg = new MTdg();
		}
	}
	
	public function MakeNew($brandname, $modelNumber, $price, $weight, $processorType, $ramSize,
			$hdSize, $noCPU, $displaySize, $battInfo, $os){
		$this->obj = new laptop($brandname, $modelNumber, $price, $weight, $processorType, $ramSize,
			$hdSize, $noCPU, $displaySize, $battInfo, $os);
		$this->monitorIDMAP->add($this->obj);
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
		$this->monitorIDMAP->delete($id);
		UnitOfWork::registerDelete($this, $id);
		UnitOfWork::commit();
	}
	
	public function save($obj){
		$this->mTdg->save($obj);
		
	
	}
		
	public function delete($id){
		$this->mTdg->delete($id);
	
	}
}

?>