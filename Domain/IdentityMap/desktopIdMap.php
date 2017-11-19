<?php
class DesktopIdMap{
	private $desktopCatalog=array();

	public function __construct(){
	
	}
	
	public function add($obj){
	
		$this->desktopCatalog[]= $obj;
		print_r($this->desktopCatalog);
	
	
	}
	
	public function get($id){
		//search $laptop catalog for obj with id
		//return if found
		//return null if not found
		
		  if(in_Array($id,$this->desktopCatalog)){  
				$key=array_search($id,$this->desktopCatalog);         
				return $this->desktopCatalog[$key];
		        }
		            else{                  
					return null;                 
                }
	}
	
	
	public function delete($obj){
	
		//$this->catalog[]= array_pus
		if (($key = array_search($obj, $this->desktopCatalog)) !== false) {
			unset($this->desktopCatalog[$key]);
			}
			
		else{
		    return null;
		}
	}
	
}




?>