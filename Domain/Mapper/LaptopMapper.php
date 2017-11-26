<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/SOEN341-MyProject/Domain/Mapper/Mapper.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/SOEN341-MyProject/Domain/UOW.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/SOEN341-MyProject/Domain/IdentityMap/laptopIdMap.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/SOEN341-MyProject/Data/TDG/LTdg.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/SOEN341-MyProject/Domain/domainObjects/products/Laptop.php";


class LaptopMapper extends Mapper{
	private $obj;
	private $laptop;
	private $laptopIDMAP;
	private $lTdg;
	private $catalog = array();


	public function __construct(){
		if ($this->laptopIDMAP == null){
			$this->laptopIDMAP = new LaptopIdMap();
		}
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
		//UnitOfWork::commit();
	}

	public function get(){
		if ($this->laptopIDMAP->get() == null){
							$productList = $this->lTdg->get();
							return $productList;
		}else{
				return $this->laptopIDMAP->get();
		}
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
	}*/

	public function modify($id){
		//$this->obj.property = value; you can call all set methodds in the object
		$this->obj.set(); //changes values of obj attributes
		return $this->UOW.registerDirty($this->obj);
	}

	public function erase($id){
		$this->laptopIDMAP->delete($id);
		UnitOfWork::registerDelete($this, $id);
		//UnitOfWork::commit();
	}

	public function save($obj){
		$this->lTdg->save($obj);


	}

	/*public function delete($id){
		$this->lTdg->delete($id);

	}*/
}

?>
