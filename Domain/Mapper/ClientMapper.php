<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/SOEN341-MyProject/Domain/UOW.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/SOEN341-MyProject/Domain/IdentityMap/clientIdMap.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/SOEN341-MyProject/Data/TDG/clientTdg.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/SOEN341-MyProject/Domain/domainObjects/clients/Admin.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/SOEN341-MyProject/Domain/domainObjects/clients/Client.php";

class ClientMapper{
  private $idmap;
  private $tdg;
  private $client;

  public function __construct(){
    $this->idmap = new ClientIdMap();
    $this->tdg = new ClientTdg();
  }

  public function find($username, $password){
      if($this->idmap->getClient($username) != null){
        $this->client = $this->idmap->getClient($username);
		if ($this->client->getIsAdmin()== 1){
			return "admin";
		}else{
			return "client";
		}
      }else{
        $row = $this->tdg->find($username, $password);

        if($row!=null){
            $isAdmin = $row["isAdmin"];

            if($isAdmin==1){
                $this->client = new Admin($row["clientId"],  $row["firstName"], $row["lastName"], $row["physicalAddress"], $row["emailAddress"], $row["phoneNumber"], $row["Username"], $row["password"], $row["isAdmin"]);
                $_SESSION["user"] = $row["Username"];
				$this->idmap->add($this->client);
                return "admin";
            }
            else if ($isAdmin==0){
                $this->client = new Client($row["clientId"],  $row["firstName"], $row["lastName"], $row["physicalAddress"], $row["emailAddress"], $row["phoneNumber"], $row["Username"], $row["password"], $row["isAdmin"]);
                $_SESSION["user"] = $row["Username"];
				$this->idmap->add($this->client);
                return "client";
            }

        }
        else{
                $this->client=null;
                return "false";
            }
      }
  }

   public function create($id,$firstName,$lastName,$physicalAddress, $emailAddress, $phoneNumber, $userName,$password){
        $this->client = new client($id, $firstName,$lastName,$physicalAddress, $emailAddress, $phoneNumber, $userName,$password, 0) ;
        $this->idmap->add($this->client);
        UnitOfWork::registerNew($this->client);
        if (UnitOfWork::commit() == 1){

			return "1";
		}
		else{

			return "0";
		}
    }

	public function save($obj){
		if ($this->tdg->save($obj) == 1){
			return 1;
		}else{
			return 0;

		}
	}


}
?>
