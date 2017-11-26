<?php
class ClientTdg{
public function find($Username, $Password){

        //get the clientId from the MySQL Client table for the current user
        $username = $Username;
        $password = $Password;

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

            return $row;
        }else return null;
}


public function save($client){
		$newArr = array();
		$newArr = (array) $client;
		$user = array();

		$user = array_values($newArr);

		$firstName = $user[0];
		$lastName = $user[1];
		$physicalAddress = $user[2];
		$emailAddress = $user[3];
		$phoneNumber = $user[4];
		$Username = $user[6];
		$password = $user[8];

			$servername = "localhost";
			$dbname = "pomoroad_myTestDB";

			// Create connection
			$conn = new mysqli($servername, 'root', '', $dbname);
			$sql = "INSERT INTO Client (clientId, firstName, lastName, physicalAddress, emailAddress, phoneNumber, isAdmin, Username, password) VALUES (NULL, '$firstName', '$lastName', '$physicalAddress', '$emailAddress', '$phoneNumber', 0, '$Username', '$password')";
		   if($conn->query($sql)===TRUE){
			   return "1";
		   }else{
			   if ("Error: " .$sql."<br>".$conn->error){
                                return "0";
                           }

		   }

			$conn->close();

	}




}
?>
