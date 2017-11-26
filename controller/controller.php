<?php
//the main purpose of the controller is to send and recieve
//data need for all transactions betweeen UI and Mapper
include_once $_SERVER['DOCUMENT_ROOT'] . "/SOEN341-MyProject/Domain/Mapper/ClientMapper.php";


//start registration control
  if(isset($_REQUEST['page_name']) && $_REQUEST['page_name'] == 'registration_data')
  {

      echo "true";
  }//finish registration control


//start login control
  if(isset($_REQUEST['page_name']) && $_REQUEST['page_name'] == 'login_data')
  {
      $mapper = new ClientMapper();
      if ($mapper->find($_REQUEST['user_name'], $_REQUEST['pass_word']) == "admin"){
        echo "admin";
      }else if ($mapper->find($_REQUEST['user_name'], $_REQUEST['pass_word']) == "client"){
        echo "client";
      }else{
	      echo "no user";
      }
  }
?>
