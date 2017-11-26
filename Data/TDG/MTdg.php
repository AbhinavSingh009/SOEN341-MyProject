<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/SOEN341-MyProject/Data/TDG/Tdg.php";
class MTdg extends Tdg{

  public function get(){
        $productList = array();
        $servername = "localhost";
        $dbname = "pomoroad_myTestDB";


        // Create connection
        $conn = new mysqli($servername, 'root', '', $dbname);//MB_6_cSsGJog

        $monitorQuery = $conn->query("SELECT * FROM MonitorDisplay");


            if($monitorQuery->num_rows>0){
                while($row=$monitorQuery->fetch_assoc()){
                    $brandName=$row['m_brandName'];
                    $modelNumber=$row['m_ModelNumber'];
                    $weight=$row['m_Weight'];
                    $price=$row['m_Price'];
                    $displaySize=$row['m_DisplaySize'];
                    $product = array($brandName, $modelNumber, $price, $weight, $displaySize);
                array_push($productList, $product);
                }
                return $productList;

            }

    }


    public function save($laptop){
        //some database update db statement
        /*$qry = "UPDATE SET WHERE";
        $result = mysql_query($qry);
        if ($result){
            return "Operation Successful";
        }
        else{
            return "Operation Unsuccessful";
        }*/
        //print_r($laptop);

        $newArr = array();
        $newArr = (array) $laptop;
        $values = array();


        echo "array is ";
        $product = array_values($newArr);

        $brandname = $product[7];
        $modelNumber = $product[8];
        $price = $product[9];
        $weight = $product[10];
        $processorType = $product[3];
        $ramSize = $product[4];
        $hdSize = $product[5];
        $noCPU = $product[6];
        $displaySize = $product[0];
        $battInfo = $product[1];
        $os=$product[2];

        $servername = "localhost";
        $dbname = "pomoroad_myTestDB";

        // Create connection
        $conn = new mysqli($servername, 'root', '', $dbname);

        $sql = "INSERT INTO Laptop (brandname, modelNumber, price, weight, processorType, ramSize, hdSize, noCPU, os, battInfo, displaySize) VALUES ('$brandname', '$modelNumber', '$price', '$weight', '$processorType', '$ramSize', '$hdSize', '$noCPU', '$os', '$battInfo', '$displaySize')";
        if($conn->query($sql)===TRUE){
            return "Operation sucessful";


        }else{
            echo "Error: " .$sql."<br>".$conn->error;
        }

        $conn->close();

    }


    public function delete($id){
        //$newArr = (array) $laptop;
        //$modelNumber = $product[8];
        /*
        $qry = "DELETE FROM Laptop WHERE";
        $result = mysql_query($qry);
        if ($result){
            return "Operation Successful";
        }
        else{
            return "Operation Unsuccessful";
        }*/

        $servername = "localhost";
        $dbname = "pomoroad_myTestDB";

        // Create connection
        $conn = new mysqli($servername, 'root', '', $dbname);//MB_6_cSsGJog

        $sql = "DELETE FROM Laptop WHERE modelNumber ='$id'";
        if($conn->query($sql)===TRUE){
            return "Operation sucessful";


        }else{
            echo "Error: " .$sql."<br>".$conn->error;
        }

        $conn->close();

    }






}


?>
