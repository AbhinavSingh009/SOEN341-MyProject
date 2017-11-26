<?php
class MonitorIdMap{
	private $monitorCatalog=array();

	public function __construct(){

	}

	public function add($obj){

		$this->monitorCatalog[]= $obj;
		


	}
	/*
	public function get($id){
		  if(in_Array($id,$this->monitorCatalog)){
				$key=array_search($id,$this->monitorCatalog);
				return $this->monitorCatalog[$key];
		        }
		            else{
					return null;
                }
	}
	*/
    public function get(){
        //search $laptop catalog for obj with id
        //return if found
        //return null if not found

        /*if(in_Array($id,$this->laptopCatalog)){
            $key=array_search($id,$this->laptopCatalog);
            return $this->laptopCatalog[$key];
        }
        else{
            return null;
        }*/
        return $this->monitorCatalog;
    }



	public function delete($obj){
		if (($key = array_search($obj, $this->monitorCatalog)) !== false) {
			unset($this->monitorCatalog[$key]);
			}

		else{
		}
	}

}




?>
