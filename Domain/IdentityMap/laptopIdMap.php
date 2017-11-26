<?php
class LaptopIdMap{
    private $laptopCatalog=array();

    public function __construct(){

    }

    public function add($obj){

        $this->laptopCatalog[]= $obj;
        print_r($this->laptopCatalog);


    }

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
        return $this->laptopCatalog;
    }
}
?>
