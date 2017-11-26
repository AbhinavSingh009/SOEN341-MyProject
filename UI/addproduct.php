<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>OXY Computers &amp; </title>
<link rel="icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />

<!-- JavaScript -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/parallax.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS Style -->
<!--<link rel="stylesheet" href="css/animate.css" type="text/css">-->
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/slider.css" type="text/css">
<link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="css/owl.theme.css" type="text/css">
<link rel="stylesheet" href="css/font-awesome.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'>
<script src="js/jquery.min.js"></script>
<script>

    $(document).ready(function(){
        $('#form1').hide();
        $('#form2').hide();
        $('#form3').hide();
        $('#form4').hide();
    });
    function select_form()
    {
        var productType = $('#productType').val();
        if(productType == 'Laptop')
        {
            $('#form2,#form3,#form4').hide();
            $('#form1').show();
        }
        else if(productType == 'Desktop')
        {
            $('#form1,#form3,#form4').hide();
            $('#form2').show();
        }
        else if(productType == 'Monitor')
        {
            $('#form1,#form2,#form4').hide();
            $('#form3').show();
        }
        else if(productType == 'Tablet')
        {
            $('#form1,#form2,#form3').hide();
            $('#form4').show();
        }
    }
</script>



</head>

<body>
<div class="page">
  <!-- Header -->
  <header class="header-container">
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-xs-6">

            <!-- Header Currency -->
          <!--  <div class="dropdown block-currency-wrapper"> <a role="button" data-toggle="dropdown" data-target="#" class="block-currency dropdown-toggle" href="#"> USD <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> $ - Dollar </a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> £ - Pound </a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> € - Euro </a></li>
              </ul>
            </div> -->

            <!-- End Header Currency -->
            <!-- Header Language -->
          <!--  <div class="dropdown block-language-wrapper"> <a role="button" data-toggle="dropdown" data-target="#" class="block-language dropdown-toggle" href="#"> <img src="images/english.png" alt="language"> English <span class="caret"></span> </a>
              <ul class="dropdown-menu" role="menu">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="images/english.png" alt="language"> English </a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="images/francais.png" alt="language"> French </a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="images/german.png" alt="language"> German </a></li>
              </ul>
            </div> -->

            <!-- End Header Language -->

            <div class="welcome-msg hidden-xs"><marquee>Welcome to OXY Computers</marquee>  </div>
          </div>
          <div class="col-xs-6">

            <!-- Header Top Links -->
            <div class="toplinks">
              <div class="links">
                <div class="myaccount"><a title="My Account" href="login.php"><span>My Account</span></a></div>
                <div class="wishlist"><a title="My Wishlist" href="wishlist.php"><span>Wishlist</span></a></div>
               <!-- <div class="check"><a href="checkout.html" title="Checkout"><span>Checkout</span></a></div> -->
                <div class="login"><a href="login.php"><span>Log In</span></a></div>
              </div>
            </div>
            <!-- End Header Top Links -->
          </div>
        </div>
      </div>
    </div>
    <div class="header container">
      <div class="row">
        <div class="col-lg-3 col-sm-6 col-md-3">
          <!-- Header Logo -->
          <a class="logo" title="Magento Commerce" href="index.html"><b><h1><span>OXY</span></b>Computers</h1></a>
          <!-- End Header Logo -->
        </div>
        <div class="col-lg-9 col-sm-6 col-md-9">
          <!-- Search-col -->
          <div class="search-box pull-right">
            <form action="cat" method="POST" id="search_mini_form" name="Categories">
              <input type="text" placeholder="Search entire store here..." value="Search" maxlength="70" name="search" id="search">
              <button type="button" class="btn btn-default  search-btn-bg"> <span class="glyphicon glyphicon-search"></span>&nbsp;</button>
            </form>
          </div>
          <!-- End Search-col -->
        </div>
      </div>
    </div>
  </header>
  <!-- end header -->
  <!-- Navbar -->
  <nav>
    <div class="container">
      <div class="nav-inner">
        <!-- mobile-menu -->
       <!-- <div class="hidden-desktop" id="mobile-menu">
          <ul class="navmenu">
            <li>
              <div class="menutop">
                <div class="toggle"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></div>
                <h2>Categories</h2>
              </div>

            </li>
          </ul>
          <!--navmenu-->
        </div> -->

        <!--End mobile-menu -->
        <ul id="nav" class="hidden-xs">
          <li id="nav-home" class="level0 parent drop-menu active"><a href="index.php"><span>Home</span> </a>

          </li>

         <!-- <li class="level0 nav-7 level-top parent"> <a href="grid.html" class="level-top"> <span>Computers</span> </a>

          </li> -->
          <li class="level0 nav-6 level-top parent"> <a href="login.php" class="level-top"> <span>Desktop</span> </a>

          </li>
          <li class="level0 nav-7 level-top parent"> <a class="level-top" href="login.php"> <span>Laptop</span> </a>

          </li>
          <li class="level0 nav-8 level-top"> <a href="login.php" class="level-top"> <span>Monitor</span> </a> </li>
         <!-- <li class="level0 nav-8 level-top"> <a href="grid.html" class="level-top"> <span>Product</span> </a> </li> -->

			<li class="level0 nav-8 level-top"> <a href="login.php" class="level-top"> <span>Tablet</span> </a> </li>
        </ul>


          </li>

          </li>
        </ul>

      </div>
    </div>
  </nav>
</head>
<!-- Body Starts Here -->
<body id="body" style="overflow:hidden;">
  <div align="center">
	<h1> Select Product Type</h1>
  <select id="productType" name="productType" onchange="return select_form()">
	 <option value="none">--------</option> 
     <option value="Laptop">Laptop</option>
     <option value="Desktop">Desktop</option>
     <option value="Monitor">Monitor</option>
     <option value="Tablet">Tablet</option>
  </select>
	  
	  </div>
<div id="abc">
<!-- Popup Div Starts Here -->
<div id="desktopID">
<!-- Contact Us Form -->
<form action="#" id="form1" method="post" name="form">
<h2>Desktop Details</h2>
<hr>
<input id="brandName" name="Brand Name" placeholder="brand name" type="text">
<input id="modelNumber" name="Model Number" placeholder="model number" type="text">
<input id="price" name="Price" placeholder="price" type="int">
<input id="weight" name="Weight" placeholder="weight" type="text">
<input id="processorType" name="Processor Type" placeholder="processor type" type="text">
<input id="ramSize" name="Ram Size" placeholder="ram size" type="text">
<input id="hdSize" name="Hard Drive Size" placeholder="hard drive size" type="text">
<input id="noCPU" name="Number of CPU" placeholder="number of cpu" type="text">
<input id="dimention" name="Dimentions" placeholder="dimention" type="text">
<a href="" id="submit"><button class="btn-success btn-update">Submit</button></a>
</form>
</div>
<div id="LaptopID">

<form action="#" id="form2" method="post" name="form">
<h2>Laptop Details</h2>
<hr>
<input id="LaptopbrandName" name="Brand Name" placeholder="brand name" type="text">
<input id="LaptopmodelNumber" name="Model Number" placeholder="model number" type="text">
<input id="Laptopprice" name="Price" placeholder="price" type="number">
<input id="Laptopweight" name="Weight" placeholder="weight" type="text">
<input id="LaptopprocessorType" name="Processor Type" placeholder="processor type" type="text">
<input id="LaptopramSize" name="Ram Size" placeholder="ram size" type="text">
<input id="LaptophdSize" name="Hard Drive Size" placeholder="hard drive size" type="text">
<input id="LaptopnoCPU" name="Number of CPU" placeholder="number of cpu" type="text">
<input id="LaptopdisplaySize" name="Display Size" placeholder="display size" type="number">
<input id="LaptopBatteryInfo" name="Battery Info" placeholder="battery info" type="text">
<input id="LaptopOs" name="Operating System" placeholder="operating system" type="text">
<a href=""id="submit"><button class="btn-success btn-update">Submit</button></a>
</form>
</div>
<div id="MonitorID">


<form action="#" id="form3" method="post" name="form">
<h2>Monitor Details</h2>
<hr>
<input id="MonitorDisplaySize" name="Display Size" placeholder="display size" type="text">
<input id="MonitorBrandName" name="Brand Name" placeholder="brand name" type="text">
<input id="MonitorPrice" name="Price" placeholder="price" type="number">
<input id="MonitorModelNumber" name="Model Number" placeholder="model number" type="text">
<input id="MonitorWeight" name="Monitor Weight" placeholder="monitor weight" type="number">

<a href=""id="submit"><button class="btn-success btn-update">Submit</button></a>
</form>
</div>
<div id="TabletID">


<form action="#" id="form4" method="post" name="form">
<h2>Tablet Details</h2>
<hr>
<input id="TabletbrandName" name="Brand Name" placeholder="brand name" type="text">
<input id="LaptopmodelNumber" name="Model Number" placeholder="model number" type="text">
<input id="Tabletprice" name="Price" placeholder="price" type="number">
<input id="TabletWeight" name="Weight" placeholder="weight" type="text">
<input id="TabletprocessorType" name="Processor Type" placeholder="processor type" type="text">
<input id="tabletRamSize" name="Ram Size" placeholder="ram size" type="text">
<input id="TablethdSize" name="Hard Drive Size" placeholder="hard drive size" type="text">
<input id="TabletNoCPU" name="Number of CPU" placeholder="number of cpu" type="text">
<input id="TabletDisplaySize" name="Display Size" placeholder="display size" type="number">
<input id="TabletbrandName" name="Battery Info" placeholder="battery info" type="text">
<input id="TabletOs" name="Operating System" placeholder="operating system" type="text">
<input id="TabletCameraInfo" name="Camera Info" placeholder="camera info" type="text">
<input id="Tabletdimention" name="Dimentions" placeholder="dimention" type="text">

<a href=""id="submit"><button class="btn-success btn-update">Submit</button></a>
</form>
</div>
<!-- Popup Div Ends Here -->
</div>
<!-- Display Popup Button -->
</body>
<!-- Body Ends Here -->
</html>
