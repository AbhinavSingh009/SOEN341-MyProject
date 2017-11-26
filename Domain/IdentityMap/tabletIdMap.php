<?php
class TabletIdMap{
	private $tabletCatalog=array();

	public function __construct(){
	
	}
	
	public function add($obj){
	
		$this->tabletCatalog[]= $obj;
		print_r($this->tabletCatalog);
	
	
	}

	/*
	public function get($id){
		  if(in_Array($id,$this->tabletCatalog)){  
				$key=array_search($id,$this->tabletCatalog);         
				return $this->tabletCatalog[$key];
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
        return $this->tabletCatalog;
    }


	public function delete($obj){
		if (($key = array_search($obj, $this->tabletCatalog)) !== false) {
			unset($this->tabletCatalog[$key]);
			}
			
		else{
		}
	}
	
}




?>