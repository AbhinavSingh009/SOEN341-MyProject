<?php
include_once "Mapper.php";
include_once "Uow.php";
include_once "tabletIdMap.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/soen341/dataSource/TTdg.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/soen341/domain/domainObjects/products/Tablet.php";

class LaptopMapper extends Mapper{
	private $obj;
	private $tablet;
	private $tabletIDMAP;
	private $tTdg;
	
	/*
	public function __construct(){
		$this->tabletIDMAP = new TabletIdMap();
		if ($this->tTdg == null){
			$this->tTdg = new TTdg();
		}
	}
*/

    public function __construct(){
        if ($this->tabletIDMAP == null){
            $this->tabletIDMAP = new TabletIdMap();
        }
        if ($this->TTdg == null){
            $this->TTdg = new tTdg();
        }
    }




    public function get(){
        if ($this->tabletIDMAP->get() == null){
            $productList = $this->TTdg->get();
            return $productList;
        }else{
            return $this->tabletIDMAP->get();
        }

    }
	public function MakeNew($brandname, $modelNumber, $price, $weight, $processorType, $ramSize,
			$hdSize, $noCPU, $displaySize, $battInfo, $os,$cameraInfo, $height, $length, $width){
		$this->obj = new tablet($brandname, $modelNumber, $price, $weight, $processorType, $ramSize,
			$hdSize, $noCPU, $displaySize, $battInfo, $os,$cameraInfo, $height, $length, $width);
		$this->tabletIDMAP->add($this->obj);
		UnitOfWork::registerNew($this->obj);
		UnitOfWork::commit();
	}

	
	public function erase($id){
		$this->tabletIDMAP->delete($id);
		UnitOfWork::registerDelete($this, $id);
		UnitOfWork::commit();
	}
	
	public function save($obj){
		$this->tTdg->save($obj);
		
	
	}
		
	public function delete($id){
		$this->tTdg->delete($id);
	
	}
}

?>