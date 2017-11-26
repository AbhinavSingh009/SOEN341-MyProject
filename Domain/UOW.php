<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/SOEN341-MyProject/Domain/Mapper/LaptopMapper.php";

class UnitOfWork{
	//private $mapper;
	private static $registerNew = array();
	private static $registerDirty = array();
	private static $registerDeleted = array();

	public function __construct(){

	}

public static function view(){
	return self::$registerNew;
}

	public static function registerNew($obj){
		//Omapper is the mapper of the object
		$class = get_class($obj);
		self::$registerNew[] = array($class => $obj);
	}

	public static function registerDirty($id, $obj){
		self::$registerDirty[] = array($id => $obj);
	}


	public static function registerDelete($Omapper,$id){
		$class = get_class($Omapper);
		self::$registerDeleted[] = array($id => $class);
	}

	public static function commit(){
		$i = 0;
		foreach (self::$registerNew as $array){
				foreach ($array as $object){
					$id = key($array);
					$key = $id."Mapper";
					$mapper = new $key();
					if ($mapper->save($object) == 1){
						return 1;
					}
					else{
						return 0;
					}
				}
		}

		foreach (self::$registerDirty as $array){
			foreach ($array as $mappername){
			$id = key($array);
			$mapper= new $mappername();
			$mapper->modify($id, $array);
			}
		}

		foreach (self::$registerDeleted as $array){
			foreach ($array as $mappername){
			$id = key($array);
			$mapper= new $mappername();
			$mapper->delete($id);
			}
		}



	}

}

?>
