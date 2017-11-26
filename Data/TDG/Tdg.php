<?php
class Tdg{


public function __construct(){

}

public static function factory(){
        //session_start();
        if(isset($_SESSION['tdg'])===TRUE){
            return unserialize($_SESSION['tdg']);
        }
        //echo "no tdg"; //troubleshooting comment
        return new Tdg();
    }

public function clientAuth($login){

        //get the clientId from the MySQL Client table for the current user
        $username = $login->getUserName();
        $password = $login->getPassword();
        //echo $username . $password;

        $servername = "localhost";
        $dbname = "pomoroad_myTestDB";

        // Create connection
        $conn = new mysqli($servername, 'root', '', $dbname);//MB_6_cSsGJog

        $idQuery = $conn->query("SELECT * FROM Client WHERE userName='$username' AND password='$password'");


        if($idQuery->num_rows>0){

            $row = mysqli_fetch_array($idQuery);
            $clientId = $row["clientId"];

            //get the status and clientId of the most recent log activity
            $lastUserQuerry = $conn->query("SELECT isLoggedIn, clientId FROM UserLog ORDER BY eventNumber DESC LIMIT 1");
            $row2 = mysqli_fetch_array($lastUserQuerry);
            $lastUserStatus = $row2["isLoggedIn"];
            $lastUserClientId = $row2["clientId"];

            if($lastUserStatus == 0){
                $sql = "INSERT INTO UserLog (clientId, isLoggedIn)
                VALUES ('$clientId',1)";


                //giving login status to client
                $conn->query($sql);

            }else
                //log out the user (admin) if they are logged-in
                if(($lastUserStatus == 1) && ($clientId != $lastUserClientId)){
                    $insertLogout = "INSERT INTO UserLog (clientId, isLoggedIn)
                    VALUES ('$lastUserClientId',0)";
                    $conn->query($insertLogout);
                    $sql = "INSERT INTO UserLog (clientId, isLoggedIn)
                    VALUES ('$clientId',1)";

                    //giving login status to client
                    $conn->query($sql);
            }
            //echo "you got here";

            return $row;
        }else return null;
}//end ClientAuth

public function addMonitor($product){
    $brandName = $product[1];
    $modelNumber = $product[2];
    $price = $product[3];
    $weight = $product[4];
    $size = $product[5];

        $servername = "localhost";
        $dbname = "pomoroad_myTestDB";

        // Create connection
        $conn = new mysqli($servername, pomoroad_root, MB_6_cSsGJog, $dbname);//MB_6_cSsGJog

        $sql = "INSERT INTO MonitorDisplay (m_DisplaySize, m_Weight, m_brandName, m_ModelNumber, m_Price) VALUES ($size, $weight, '$brandName', '$modelNumber', $price)";
       if($conn->query($sql)===TRUE){
           echo "good";

       }else{
           echo "Error: " .$sql."<br>".$conn->error;
       }

        $conn->close();
}

public function addDesktop($product){
    $brandname = $product[1];
    $modelNumber = $product[2];
    $price = $product[3];
    $weight = $product[4];
    $processorType = $product[5];
    $ramSize = $product[6];
    $hdSize = $product[7];
    $noCPU = $product[8];
    $dimensions = $product[9];

        $servername = "localhost";
        $dbname = "pomoroad_myTestDB";

        // Create connection
        $conn = new mysqli($servername, pomoroad_root, MB_6_cSsGJog, $dbname);//MB_6_cSsGJog

        $sql = "INSERT INTO Desktop (brandname, modelNumber, price, weight, processorType, ramSize, hdSize, noCPU, dimensions) VALUES ('$brandname', '$modelNumber', $price, $weight, '$processorType', $ramSize, $hdSize, $noCPU, '$dimensions')";
       if($conn->query($sql)===TRUE){
           echo "good";

       }else{
           echo "Error: " .$sql."<br>".$conn->error;
       }

        $conn->close();
}

public function addLaptop($product){
    $brandname = $product[1];
    $modelNumber = $product[2];
    $price = $product[3];
    $weight = $product[4];
    $processorType = $product[5];
    $ramSize = $product[6];
    $hdSize = $product[7];
    $noCPU = $product[8];
    $displaySize = $product[9];
    $battInfo = $product[10];
    $os=$product[11];

        $servername = "localhost";
        $dbname = "pomoroad_myTestDB";

        // Create connection
        $conn = new mysqli($servername, pomoroad_root, MB_6_cSsGJog, $dbname);//MB_6_cSsGJog

        $sql = "INSERT INTO Laptop (brandname, modelNumber, price, weight, processorType, ramSize, hdSize, noCPU, os, battInfo, displaySize) VALUES ('$brandname', '$modelNumber', $price, $weight, '$processorType', $ramSize, $hdSize, $noCPU, $displaySize, '$battInfo', '$os')";
       if($conn->query($sql)===TRUE){
           echo "good";


       }else{
           echo "Error: " .$sql."<br>".$conn->error;
       }

        $conn->close();
}

public function addTablet($product){
    $brandname = $product[1];
    $modelNumber = $product[2];
    $price = $product[3];
    $weight = $product[4];
    $processorType = $product[5];
    $ramSize = $product[6];
    $hdSize = $product[7];
    $noCPU = $product[8];
    $displaySize = $product[9];
    $battInfo = $product[10];
    $os=$product[11];
    $cameraInfo = $product[12];
    $dimensions = $product[13];

        $servername = "localhost";
        $dbname = "pomoroad_myTestDB";

        // Create connection
        $conn = new mysqli($servername, pomoroad_root, MB_6_cSsGJog, $dbname);//MB_6_cSsGJog

        $sql = "INSERT INTO Tablet (brandname, modelNumber, price, weight, processorType, ramSize, hdSize, noCPU, displaySize, battInfo, os, cameraInfo, dimensions) VALUES ('$brandname', '$modelNumber', $price, $weight, '$processorType', $ramSize, $hdSize, $noCPU, $displaySize, '$battInfo', '$os', '$cameraInfo', '$dimensions')";
       if($conn->query($sql)===TRUE){
           echo "good";

       }else{
           echo "Error: " .$sql."<br>".$conn->error;
       }

        $conn->close();
}

public function viewMonitors(){
        $productList = array();
        $servername = "localhost";
        $dbname = "pomoroad_myTestDB";


        // Create connection
        $conn = new mysqli($servername, 'root', '', $dbname);//MB_6_cSsGJog

        $monitorQuery = $conn->query("SELECT * FROM MonitorDisplay");


        if($monitorQuery->num_rows>0){
            while($row=$monitorQuery->fetch_assoc()){
                $brandName=$row['m_brandName'];
                $weight=$row['m_Weight'];
                $size=$row['m_DisplaySize'];
                $price=$row['m_Price'];
                $modelNumber=$row['m_ModelNumber'];
                $product = array($brandName, $modelNumber, $price, $weight, $size);
            array_push($productList, $product);
            }
            return $productList;

        }

}

public function viewDesktops(){
    $productList = array();
    $servername = "localhost";
    $dbname = "pomoroad_myTestDB";


    // Create connection
    $conn = new mysqli($servername, 'root', '', $dbname);//MB_6_cSsGJog
    $monitorQuery = $conn->query("SELECT * FROM Desktop");


        if($monitorQuery->num_rows>0){
            while($row=$monitorQuery->fetch_assoc()){
                $brandName=$row['brandname'];
                $weight=$row['weight'];
                $ramSize=$row['ramSize'];
                $price=$row['price'];
                $modelNumber=$row['modelNumber'];
                $hdSize=$row['hdSize'];
                $noCPU=$row['noCPU'];
                $dimensions=$row['dimensions'];
                $processorType = $row['processorType'];
                $product = array($brandName, $modelNumber, $price, $weight, $processorType, $ramSize, $hdSize, $noCPU, $dimensions);
            array_push($productList, $product);
            }
            return $productList;

        }

}

public function viewLaptops(){
    $productList = array();
    $servername = "localhost";
    $dbname = "pomoroad_myTestDB";


    // Create connection
    $conn = new mysqli($servername, 'root', '', $dbname);//MB_6_cSsGJog

    $monitorQuery = $conn->query("SELECT * FROM Laptop");


        if($monitorQuery->num_rows>0){
            while($row=$monitorQuery->fetch_assoc()){
                $brandName=$row['brandname'];
                $modelNumber=$row['modelNumber'];
                $weight=$row['weight'];
                $price=$row['price'];
                $processorType=$row['processorType'];
                $ramSize=$row['ramSize'];
                $hdSize=$row['hdSize'];
                $noCPU=$row['noCPU'];
                $displaySize=$row['displaySize'];
                $battInfo=$row['battInfo'];
                $os=$row['os'];
                $product = array($brandName, $modelNumber, $price, $weight, $size, $processorType, $ramSize, $hdSize, $noCPU, $displaySize, $battInfo, $os);
            array_push($productList, $product);
            }
            return $productList;

        }

}

public function viewTablets(){
    $productList = array();
     $servername = "localhost";
        $dbname = "pomoroad_myTestDB";


        // Create connection
        $conn = new mysqli($servername, 'root', '', $dbname);//MB_6_cSsGJog

         $monitorQuery = $conn->query("SELECT * FROM Tablet");


        if($monitorQuery->num_rows>0){
            while($row=$monitorQuery->fetch_assoc()){
                $brandName=$row['brandname'];
                $weight=$row['weight'];
                $ramSize=$row['ramSize'];
                $price=$row['price'];
                $modelNumber=$row['modelNumber'];
                $processorType=$row['processorType'];
                $hdSize=$row['hdSize'];
                $noCPU=$row['noCPU'];
                $displaySize=$row['displaySize'];
                $battInfo=$row['battInfo'];
                $os=$row['os'];
                $cameraInfo=$row['cameraInfo'];
                $dimensions=$row['dimensions'];

                $product = array($brandName, $modelNumber, $price, $weight, $ramSize, $processorType, $hdSize, $noCPU, $displaySize, $battInfo, $os, $cameraInfo, $dimensions);
            array_push($productList, $product);
            }
            return $productList;

        }
        else{
            return "no products in db";
        }

}

public function deleteMonitor($product){
    $brandName = $product[1];
    $modelNumber = $product[2];
	 $servername = "localhost";
        $dbname = "pomoroad_myTestDB";
        // Create connection
        $conn = new mysqli($servername, pomoroad_root, MB_6_cSsGJog, $dbname);//MB_6_cSsGJog

        $sql = "Delete From MonitorDisplay where brandname=‘$brandname’ and modelNumber= ‘$modelNumber’";

       if($conn->query($sql)===TRUE){

           echo “deleted”;

       }else{

           echo "Error: " .$sql."<br>".$conn->error;

       }

        $conn->close();

}



public function deleteDesktop($product){

    $brandname = $product[1];

    $modelNumber = $product[2];
	$servername = "localhost";

        $dbname = "pomoroad_myTestDB";



        // Create connection

        $conn = new mysqli($servername, pomoroad_root, MB_6_cSsGJog, $dbname);//MB_6_cSsGJog



        $sql = "Delete from Desktop where brandname=‘$brandname’ and modelNumber= ‘$modelNumber’";

       if($conn->query($sql)===TRUE){

           echo “deleted”;

       }else{

           echo "Error: " .$sql."<br>".$conn->error;

       }

        $conn->close();

}



public function deleteLaptop($product){

    $brandname = $product[1];

    $modelNumber = $product[2];
	$servername = "localhost";

        $dbname = "pomoroad_myTestDB";



        // Create connection

        $conn = new mysqli($servername, pomoroad_root, MB_6_cSsGJog, $dbname);//MB_6_cSsGJog



        $sql = "Delete from Laptop where brandname=‘$brandname’ and modelNumber= ‘$modelNumber’";

       if($conn->query($sql)===TRUE){

           echo “deleted”;

       }else{

           echo "Error: " .$sql."<br>".$conn->error;

       }

        $conn->close();

}



public function deleteTablet($product){

    $brandname = $product[1];

    $modelNumber = $product[2];

	$servername = "localhost";

        $dbname = "pomoroad_myTestDB";



        // Create connection

        $conn = new mysqli($servername, pomoroad_root, MB_6_cSsGJog, $dbname);//MB_6_cSsGJog



        $sql = "Delete from Tablet where brandname=‘$brandname’ and modelNumber= ‘$modelNumber’)";

       if($conn->query($sql)===TRUE){

           echo “deleted”;

       }else{

           echo "Error: " .$sql."<br>".$conn->error;

       }

        $conn->close();

}

public function __destruct(){
        $_SESSION['tdg']=serialize($this);
    }

}//end class
?>
