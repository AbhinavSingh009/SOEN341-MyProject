<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/SOEN341-MyProject/Data/TDG/Tdg.php";
class WTdg extends Tdg{

	public function get($username){
		    $productList = array();
		    $servername = "localhost";
		    $dbname = "pomoroad_myTestDB";


		    // Create connection
		    $conn = new mysqli($servername, 'root', '', $dbname);//MB_6_cSsGJog

		    $wishlistQuery = $conn->query("SELECT * FROM Wishlist WHERE user");


		        if($wishlistQuery->num_rows>0){
		            while($row=$wishlistQuery->fetch_assoc()){
		                $brandName=$row['brandname'];
		                $modelNumber=$row['modelNumber'];
		                $weight=$row['weight'];
		                $price=$row['price'];
		                $processorType=$row['processorType'];
		                $ramSize=$row['ramSize'];
		                $hdSize=$row['hdSize'];
		                $noCPU=$row['noCPU'];
										$dimensions = $row['dimensions'];
		                $product = array($brandName, $modelNumber, $price, $weight, $processorType, $ramSize, $hdSize, $noCPU, $dimensions);
		            array_push($productList, $product);
		            }
		            return $productList;

		        }

		}

	public function save($desktop){
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
		$newArr = (array) $desktop;
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
		$height = $product[0];
		$length = $product[1];
		$width=$product[2];

			$servername = "localhost";
			$dbname = "pomoroad_myTestDB";

			// Create connection
			$conn = new mysqli($servername, 'root', '', $dbname);

			$sql = "INSERT INTO Laptop (brandname, modelNumber, price, weight, processorType, ramSize, hdSize, noCPU, width, length, height) VALUES ('$brandname', '$modelNumber', '$price', '$weight', '$processorType', '$ramSize', '$hdSize', '$noCPU', '$width', '$length', '$height')";
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

			$sql = "DELETE FROM Desktop WHERE modelNumber ='$id'";
		   if($conn->query($sql)===TRUE){
			   return "Operation sucessful";


		   }else{
			   echo "Error: " .$sql."<br>".$conn->error;
		   }

			$conn->close();

	}






}


?>
