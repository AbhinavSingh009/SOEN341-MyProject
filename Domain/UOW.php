<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/SOEN341-MyProject/Domain/Mapper/LaptopMapper.php";

class UnitOfWork{
	//private $mapper;
	private static $registerNew = array();
	private static $registerDirty = array();
	private static $registerDeleted = array();

	public function __construct(){

	}


	public static function registerNew($obj){
		//Omapper is the mapper of the object
		$class = get_class($obj);
		echo $class;
		self::$registerNew[] = array($class => $obj);
		echo "start here ------";
		print_r(self::$registerNew);
	}

	public static function registerDirty($Omapper,$obj){
		$class = get_class($Omapper);
		self::$registerDirty[] = array($class => $obj);
		print_r(self::$registerNew);
	}


	public static function registerDelete($Omapper,$id){
		$class = get_class($Omapper);
		echo "********************".$class;
		self::$registerDeleted[] = array($id => $class);
	}

	public static function commit(){
		$i = 0;
		foreach (self::$registerNew as $array){
				foreach ($array as $object){
					echo "<br/> ------------------------";
					$id = key($array);
					echo "your mapper is -----------------------------------" . $id;
					$key = $id."Mapper";
					echo "your mapper is -----------------------------------" . $key;
					$mapper = new $key();
					print_r($mapper);
					if ($mapper->save($object) == 1){
						return 1;
					}
					else{
						return 0;
					}
				}
		}

		foreach (self::$registerDirty as $map => $object){
			//$map.save($object);
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
