<?php
/*include_once "Mapper.php";
include_once "Uow.php";
include_once "desktopIdMap.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/soen341/dataSource/DTdg.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/soen341/domain/domainObjects/products/Desktop.php";*/

include_once $_SERVER['DOCUMENT_ROOT'] . "/SOEN341-MyProject/Domain/Mapper/Mapper.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/SOEN341-MyProject/Domain/UOW.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/SOEN341-MyProject/Domain/IdentityMap/desktopIdMap.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/SOEN341-MyProject/Data/TDG/DTdg.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/SOEN341-MyProject/Domain/domainObjects/products/Desktop.php";


class DesktopMapper extends Mapper{
	private $obj;
	private $desktop;
	private $desktopIDMAP;
	private $dTdg;

    public function __construct(){
        if ($this->desktopIDMAP == null){
            $this->desktopIDMAP = new DesktopIdMap();
        }
        if ($this->dTdg == null){
            $this->dTdg = new dTdg();
        }
    }

/*	public function __construct(){
		$this->desktopIDMAP = new DesktopIdMap();
		if ($this->dTdg == null){
			$this->dTdg = new DTdg();
		}
	} */

	public function MakeNew($brandname, $modelNumber, $price, $weight, $processorType, $ramSize,
			$hdSize, $noCPU, $height, $length, $width){
		$this->obj = new desktop($brandname, $modelNumber, $price, $weight, $processorType, $ramSize,
			$hdSize, $noCPU, $height, $length, $width);
		$this->desktopIDMAP->add($this->obj);
		UnitOfWork::registerNew($this->obj);
		UnitOfWork::commit();
	}

	//public function get(){
						//	$productList = $this->dTdg->get();
							//return $productList;
	//}

    public function get(){
        if ($this->desktopIDMAP->get() == null){
            $productList = $this->dTdg->get();
            return $productList;
        }else{
            return $this->desktopIDMAP->get();
        }

    }


    public function erase($id){
		$this->desktopIDMAP->delete($id);
		UnitOfWork::registerDelete($this, $id);
		UnitOfWork::commit();
	}

	public function save($obj){
		$this->dTdg->save($obj);


	}

	public function delete($id){
		$this->dTdg->delete($id);

	}
}

?>
