<?php
include_once "Mapper.php";
include_once "Uow.php";
include_once "monitorIdMap.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/soen341/dataSource/MTdg.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/soen341/domain/domainObjects/products/Monitor.php";

class MonitorMapper extends Mapper{
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
	}

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
