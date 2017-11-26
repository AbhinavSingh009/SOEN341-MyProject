<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/SOEN341-MyProject/Domain/Mapper/LaptopMapper.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/SOEN341-MyProject/Domain/Mapper/DesktopMapper.php";
//include_once $_SERVER['DOCUMENT_ROOT'] . "/SOEN341-MyProject/Domain/Mapper/TabletMapper.php";
//include_once $_SERVER['DOCUMENT_ROOT'] . "/SOEN341-MyProject/Domain/Mapper/MonitorMapper.php";
//start admin view control
if(isset($_REQUEST['page_name']) && $_REQUEST['page_name'] == 'add_products')
{
    $lmapper = new LaptopMapper();
    $dmapper = new DesktopMapper();
    //$mmapper = new MonitorMapper();
    //$tmapper = new TabletMapper();

      print_r($lmapper->MakeNew());
      //echo json_encode($dmapper->get());
      //echo json_encode($mmapper->get());
      //echo json_encode($tmapper->get());
      //echo "true";
}







 ?>
