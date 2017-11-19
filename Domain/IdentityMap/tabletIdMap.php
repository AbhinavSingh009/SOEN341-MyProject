<?php
class TabletIdMap{
	private $tabletCatalog=array();

	public function __construct(){
	
	}
	
	public function add($obj){
	
		$this->tabletCatalog[]= $obj;
		print_r($this->tabletCatalog);
	
	
	}
	
	public function get($id){
		//search $laptop catalog for obj with id
		//return if found
		//return null if not found
		
		  if(in_Array($id,$this->tabletCatalog)){  
				$key=array_search($id,$this->tabletCatalog);         
				return $this->tabletCatalog[$key];
		        }
		            else{                  
					return null;                 
                }
	}
	
	
	public function delete($obj){
	
		//$this->catalog[]= array_pus
		if (($key = array_search($obj, $this->tabletCatalog)) !== false) {
			unset($this->tabletCatalog[$key]);
			}
			
		else{
		}
	}
	
}




?>