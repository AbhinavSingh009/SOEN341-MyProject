<?php
/*include_once "Mapper.php";
include_once "Uow.php";
include_once "monitorIdMap.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/soen341/dataSource/MTdg.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/soen341/domain/domainObjects/products/Monitor.php";*/

include_once $_SERVER['DOCUMENT_ROOT'] . "/SOEN341-MyProject/Domain/Mapper/Mapper.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/SOEN341-MyProject/Domain/UOW.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/SOEN341-MyProject/Domain/IdentityMap/monitorIdMap.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/SOEN341-MyProject/Data/TDG/MTdg.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/SOEN341-MyProject/Domain/domainObjects/products/Monitor.php";

class MonitorMapper extends Mapper{
	private $obj;
	private $monitor;
	private $monitorIDMAP;
	private $mTdg;


    public function __construct(){
        if ($this->monitorIDMAP == null){
            $this->monitorIDMAP = new MonitorIdMap();
        }
        if ($this->mTdg == null){
            $this->mTdg = new MTdg();
        }
    }
/*
	public function __construct(){
		$this->monitorIDMAP = new MonitorIdMap();
		if ($this->mTdg == null){
			$this->mTdg = new MTdg();
		}
	}
*/

    public function get(){
        if ($this->monitorIDMAP->get() == null){
            $productList = $this->mTdg->get();
            return $productList;
        }else{
            return $this->monitorIDMAP->get();
        }

    }

	public function MakeNew($brandname, $modelNumber, $price, $weight, $size){
		$this->obj = new monitor($brandname, $modelNumber, $price, $weight, $size);
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
