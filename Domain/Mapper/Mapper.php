<?php

//include_once "domainObjects/clients/User.php";
//include_once "../index.php";
//include $_SERVER['DOCUMENT_ROOT'] . "/soen341/index.php";
//include $_SERVER['DOCUMENT_ROOT'] . "/soen341/domainObjects/clients/Client.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/soen341/domain/domainObjects/clients/Admin.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/soen341/domain/domainObjects/products/Product.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/soen341/domain/domainObjects/products/Monitor.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/soen341/domain/domainObjects/products/Computer.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/soen341/domain/domainObjects/products/Desktop.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/soen341/domain/domainObjects/products/Laptop.php";



//include_once "presentation/add.php";


class Mapper{
    private $userIdentityMapper;
    private $productIdentityMapper;
    private $tdg;
    private $client;
    
    public function __construct(){
        $productIdentityMapper = new Pim();
        $tdg = new Tdg();
    }
    
    //factory method
    public static function factory(){
        //session_start();
        if(isset($_SESSION['mapper'])===TRUE){
            return unserialize($_SESSION['mapper']);
        }
        //echo "no mapper"; //troubleshooting comment
        return new Mapper();
    }
    
    public function getClient(){
        return $this->client;
    }
    
    public function unpackClient(){
       // $client=unserialize($_SESSION['mclient'];
    }
    
    public function setSomeNumber($someNumber){
        $this->someNumber = $someNumber;
    }
    
    public function login($userName, $password){
        $login = new Login($userName, $password);
        $this->authenticate($login);        
    }
    
    private function authenticate($login){
        //all tdg stuff goes here
        $tdg1 = Tdg::factory();
        $row = $tdg1->clientAuth($login);
        if($row!=null){
            $isAdmin = $row["isAdmin"];
            if($isAdmin==1){
                $this->client = new Admin($row["clientId"], $row["userName"], $row["isAdmin"], $row["firstName"], $row["lastName"], $row["physicalAddress"], $row["emailAddress"], $row["phoneNumber"]);
            }
            
        }
        else{
                echo "no user returned or login credentials no matching";
                $this->client=null;
            }
        
        
    }
    
    public function addProducts($products){
        
            
            switch($products[0]){
                case 'monitor':
                	//create monitor object
                    $monitor = new Monitor($products[1], $products[2], $products[3], $products[4], $products[5]);
                    //send to identityMapper
                    $productIdentityMapper -> add_monitor($monitor);
                    
                    //send to tdg
                    $tdg = Tdg::factory();
                    $tdg->addMonitor($products);
                    
                    //echo "in case monitor";
                    break;
                 case 'desktop':
                 	//create desktop object
                    $desktop = new Desktop($products[1], $products[2], $products[3], $products[4], $products[5], $products[6], $products[7], $products[8], $products[9]);
                    //send to identityMapper
                    $productIdentityMapper -> add_desktop($desktop);
                    
                    //send to tdg
                    $tdg = Tdg::factory();
                    $tdg->addDesktop($products);
                    
                   // echo "in case desktop";
                    break;
                case 'laptop':
                    //create laptop object
                    $laptop = new Laptop($products[1], $products[2], $products[3], $products[4], $products[5], $products[6], $products[7], $products[8], $products[9],$products[10], $products[11]);
                    //send to identityMapper
                    $productIdentityMapper -> add_laptop($laptop)
                    
                    //send to tdg
                    $tdg = Tdg::factory();
                    $tdg->addLaptop($products);
                    
                    //echo "in case laptop";
                    break;
                case 'tablet':
                	//create tablet object
                    $tablet = new Tablet($products[1], $products[2], $products[3], $products[4], $products[5], $products[6], $products[7], $products[8], $products[9],$products[10], $products[11], $products[12], $products[13]);
                    //send to identityMapper
                    $productIdentityMapper -> add_tablet($tablet);
                    
                    //send to tdg
                    $tdg = Tdg::factory();
                    $tdg->addTablet($products);
                    
                    //echo "in case Tablet";
                    break;
            
        }
        
    }
    
    public function viewProducts($productType){
        $tdg = Tdg::factory();
        switch($productType){
            case 'monitor':
                //check the productIdentityMapper for this product -> should have some variable for "has all monitors "?
                
                //if null
               
                $productList = $tdg->viewMonitors();
                return $productList;
                echo "hi in monitor view";
                break;
                
            case 'laptop':
                $productList = $tdg->viewLaptops();
                return $productList;
                echo "hi in laptop view";
                break;
                
            case 'desktop':
                $productList = $tdg->viewDesktops();
                return $productList;
                echo "hi in desktop view";
                break;
                
            case 'tablet':
                $productList = $tdg->viewTablets();
                return $productList;
                echo "hi in tablet view";
                break;
                default : echo"default in viewProducts() in Mapper.php ";
        }
    }
    
    public function deleteProduct($product){
    	
     	$productIdentityMapper -> delete($product);
    }
    public function addToClientIdentityMapper(){
        
    }
    

    
    public function createClient(){
        $this->client = new Client();
    }
    
    public function registerClient(){
        
    }
    

    
    
    //save object to session variable
    public function __destruct(){
        $_SESSION['mclient']=serialize($this->client);
        $_SESSION['mapper']=serialize($this);
    }
}






/*
include 'domainObjects/products/Product.php';

$product = new Product('dell', 'A55', 300.23, 600, NULL);
echo "Here is your product: " . $product->getBrandname() . "<br>";
echo "Here is your product: " . $product->getId();
*/

?>
