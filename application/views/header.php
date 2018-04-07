<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Title Of Site -->
	<title>Countonadvisor</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="Trixno">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS Plugins -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/media/css/bootstrap.min.css" media="screen">	
    <!-- CSS Custom -->
  <link href="<?php echo base_url();?>/media/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/media/css/style1.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Merriweather:400,700|Source+Sans+Pro:400,700" rel="stylesheet">
	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>


</head>
<body>
<nav class="hidden-xs" style="background-color: #000;height: 45px;">
	<div class="container-fluid">
		<div class="col-md-6">
			<div class="col-md-6">
				<p style="padding-top: 5px;"><i class="fas fa-map-marker-alt" style="color: #fff;font-size: 24px;"></i> <span style="color: #fff;font-size: 16px;font-weight: bold;"> C-30, Hari Nagar, New Delhi, 110064<span></p>
			</div>
			<div class="col-md-6">
				<p href="" style="padding-top: 5px;color: #fff;"><i class="fas fa-envelope  " style="color: #fff;font-size: 24px;"></i><span style="color: #fff;font-size: 16px;font-weight: bold;"> countonadvisor@gmail.com<span></p>
			</div>
		</div>
		<div class="col-md-6 text-right">
			<ul class="header-top">
          <li><a href="<?php echo base_url();?>">Home</a></li> 
          <li><a href="<?php echo base_url();?>index.php/home/about">About</a></li> 
          <li><a href="<?php echo base_url();?>index.php/home/contact">Contact Us</a></li> 
          <li><a href="">Invest Login</a></li> 
          <li><a href="">Portfolio Login</a></li>   
      </ul>
		</div>
	</div>
</nav>
<nav class="navbar navbar-default header-main" style="">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right header-main-nav">
        <li class="dropdown">
          <a class=" dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown">Mutual Funds <i class="fa fa-angle-down" aria-hidden="true"></i>
          </a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url("index.php/profile"); ?>">About Mutual Funds</a></li>
            <li><a href="<?php echo base_url("index.php/orders"); ?>" >About SIP</a></li>
            <li><a href="<?php echo base_url("index.php/wishlist"); ?>">SIP Calculator</a></li>
            <li><a href="<?php echo base_url("index.php/profile/address"); ?>">Current NFO</a></li>
            <li><a href="<?php echo base_url("index.php/profile/account_details"); ?>">Dividends Announced</a></li>
            <li><a href="<?php echo base_url("index.php/home/logout"); ?>">Latest NAV</a></li>
            <li><a href="<?php echo base_url("index.php/home/logout"); ?>">Fund Performance</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class=" dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown">Insurance <i class="fa fa-angle-down" aria-hidden="true"></i>
          </a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url("index.php/profile"); ?>">Life Insurance</a></li>
            <li><a href="<?php echo base_url("index.php/orders"); ?>" >Health Insurance</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class=" dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown">Taxation <i class="fa fa-angle-down" aria-hidden="true"></i>
          </a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url("index.php/profile"); ?>">Tax Planning</a></li>
            <li><a href="<?php echo base_url("index.php/orders"); ?>" >Tax Slab</a></li>
            <li><a href="<?php echo base_url("index.php/wishlist"); ?>"> Tax Deduction</a></li>
            <li><a href="<?php echo base_url("index.php/profile/address"); ?>">Tax Calculator</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class=" dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown">Calculators <i class="fa fa-angle-down" aria-hidden="true"></i>
          </a>
          <ul class="dropdown-menu">
            <li><a href="sip-calculator.php">SIP Calculator</a></li>
            <li><a href="education-calculator.php">Education Calculator</a></li>
            <li><a href="marriage-calculator.php">Marriage Calculator</a></li>
            <li><a href="retirement-calculator.php">Retirement Calculator</a></li>
            <li><a href="goal-calculator.php">Goal Calculator</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class=" dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown">NRI Services <i class="fa fa-angle-down" aria-hidden="true"></i>
          </a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url("index.php/profile"); ?>">NRI Services</a></li>
            <li><a href="<?php echo base_url("index.php/orders"); ?>" >Document Required</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class=" dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown">Pathsala <i class="fa fa-angle-down" aria-hidden="true"></i>
          </a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url("index.php/profile"); ?>">Profile</a></li>
            <li><a href="<?php echo base_url("index.php/wishlist"); ?>"> Fund Compare</a></li>
            <li><a href="<?php echo base_url("index.php/orders"); ?>" > Fund Selector</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class=" dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown">Downloads <i class="fa fa-angle-down" aria-hidden="true"></i>
          </a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url("index.php/profile"); ?>">MF Forms</a></li>
            <li><a href="<?php echo base_url("index.php/profile"); ?>">KYC/FATCA Forms</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
