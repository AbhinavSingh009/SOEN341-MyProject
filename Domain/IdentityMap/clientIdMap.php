<?php
class ClientIdMap
{
    private $clientCatalog = array();

    public function __construct()
    {

    }
    public function add($obj)
    {
        $this->clientCatalog[] = $obj;
    }

    public function getClient($username)
    {
      foreach ($this->clientCatalog as $arr){
  		if ($arr->getuserName() == $username){
			return $arr;
  	}
    }
	}
}
?>
