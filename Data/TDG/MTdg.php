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


    public function save($monitor){
        //some database update db statement
        /*$qry = "UPDATE SET WHERE";
        $result = mysql_query($qry);
        if ($result){
            return "Operation Successful";
        }
        else{
            return "Operation Unsuccessful";
        }*/
        //print_r($monitor);

        $newArr = array();
        $newArr = (array) $monitor;
        $values = array();


        echo "array is ";
        $product = array_values($newArr);

        $size = $product[0];
        $brandname = $product[1];
        $modelnumber = $product[2];
        $price = $product[3];
        $weight= $product[4];

        $servername = "localhost";
        $dbname = "pomoroad_myTestDB";

        // Create connection
        $conn = new mysqli($servername, 'root', '', $dbname);

        $sql = "INSERT INTO MonitorDisplay (m_DisplaySize, m_Weight, m_brandName, m_ModelNumber, m_Price) VALUES ('$size', '$weight', '$brandname', '$modelnumber', '$price')";
        if($conn->query($sql)===TRUE){
            return "Operation sucessful";


        }else{
            echo "Error: " .$sql."<br>".$conn->error;
        }

        $conn->close();

    }


    public function delete($id){
        //$newArr = (array) $monitor;
        //$modelNumber = $product[8];
        /*
        $qry = "DELETE FROM monitor WHERE";
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

        $sql = "DELETE FROM monitor WHERE modelNumber ='$id'";
        if($conn->query($sql)===TRUE){
            return "Operation sucessful";


        }else{
            echo "Error: " .$sql."<br>".$conn->error;
        }

        $conn->close();

    }






}


?>
