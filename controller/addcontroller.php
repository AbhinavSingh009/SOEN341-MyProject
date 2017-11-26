<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/SOEN341-MyProject/Domain/Mapper/LaptopMapper.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/SOEN341-MyProject/Domain/Mapper/DesktopMapper.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/SOEN341-MyProject/Domain/Mapper/TabletMapper.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/SOEN341-MyProject/Domain/Mapper/MonitorMapper.php";
//start admin view control
if(isset($_POST['MDS']) && isset($_POST['MBN']) && isset($_POST['MP']) && isset($_POST['MMN']) && isset($_POST['MW']))
{
    $lmapper = new LaptopMapper();
    $dmapper = new DesktopMapper();
    $mmapper = new MonitorMapper();
    $tmapper = new TabletMapper();

      //print_r($lmapper->MakeNew());
      //echo json_encode($dmapper->get());
      //echo json_encode($mmapper->get());
      //echo json_encode($tmapper->get());
      //echo "true";
    $mmapper -> MakeNew($_POST['MBN'], $_POST['MMN'], $_POST['MP'], $_POST['MW'], $_POST['MDS']);

    //header('Location: ' . $_SERVER['HTTP_REFERER']);










}







 ?>
