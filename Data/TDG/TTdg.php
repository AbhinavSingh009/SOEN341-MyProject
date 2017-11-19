<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/soen341/dataSource/Tdg.php";
class TTdg extends Tdg{
	
	public function get($id){
		//sql statments to get laptop with ID
		//return $resultSet; if found
		//or null if not found;
		/*$qry = "SELECT  FROM  WHERE";
		$result = mysql_query($qry);
		if ($result){
			//return resultset ;
		}
		else{
			return "Operation Unsuccessful";
		}*/
		
		
	}
	
	public function save($tablet){
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
		$newArr = (array) $tablet;
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
		//$cameraInfo;
		//$height;
		//$length;
		//$width;
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
			
			$sql = "DELETE FROM Tablet WHERE modelNumber ='$id'";
		   if($conn->query($sql)===TRUE){
			   return "Operation sucessful";
			   
			   
		   }else{
			   echo "Error: " .$sql."<br>".$conn->error;
		   }
		
			$conn->close();
		
	}
	
	
	
	
	
	
}


?>