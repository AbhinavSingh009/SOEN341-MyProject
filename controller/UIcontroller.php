<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/SOEN341-MyProject/Domain/Mapper/LaptopMapper.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/SOEN341-MyProject/Domain/Mapper/DesktopMapper.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/SOEN341-MyProject/Domain/Mapper/TabletMapper.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/SOEN341-MyProject/Domain/Mapper/MonitorMapper.php";

    $lmapper = new LaptopMapper();
    $dmapper = new DesktopMapper();
    $mmapper = new MonitorMapper();
    $tmapper = new TabletMapper();


      //echo json_encode($dmapper->get());
      //echo json_encode($mmapper->get());
      //echo json_encode($tmapper->get());
      //echo "true";

?>
