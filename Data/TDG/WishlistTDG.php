<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/SOEN341-MyProject/Data/TDG/Tdg.php";
class WTdg extends Tdg{

	public function get($username){
		    $productList = array();
		    $servername = "localhost";
		    $dbname = "pomoroad_myTestDB";


		    // Create connection
		    $conn = new mysqli($servername, 'root', '', $dbname);//MB_6_cSsGJog

		    $wishlistQuery = $conn->query("SELECT * FROM Wishlist WHERE Username == $username");


		        if($wishlistQuery->num_rows>0){
		            while($row=$wishlistQuery->fetch_assoc()){
		                $username=$row['Username'];
		                $modelNumber=$row['ModelNumber'];

		                $product = array($username, $modelNumber);
		            array_push($productList, $product);
		            }
		            return $productList;

		        }

		}



	public function save($wish){
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
		$newArr = (array) $wish;
		$values = array();


		$product = array_values($newArr);

		$brandname = $product[0];
		$modelNumber = $product[1];


			$servername = "localhost";
			$dbname = "pomoroad_myTestDB";

			// Create connection
			$conn = new mysqli($servername, 'root', '', $dbname);

			$sql = "INSERT INTO wishlist (ModelNumber, Username) VALUES ('$modelNumber', '$username')";
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

			$sql = "DELETE FROM Wishlist WHERE Username ='$id'";
		   if($conn->query($sql)===TRUE){
			   return "Operation sucessful";


		   }else{
			   echo "Error: " .$sql."<br>".$conn->error;
		   }

			$conn->close();

	}






}


?>
