<?php
class WishlistIdMap{
    private $WishlistCatalog=array();

    public function __construct(){

    }

    public function add($obj){

        $this->WishlistCatalog[]= $obj;
   }

    public function get($id){
        //search $laptop catalog for obj with id
        //return if found
        //return null if not found

        if(in_Array($id,$this->laptopCatalog)){
            $key=array_search($id,$this->laptopCatalog);
            return $this->laptopCatalog[$key];
        }
        else{
            return null;
        }
    }
}
?>
