<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<html>
	<head>
		<title>RSD Dental Clinic</title>

		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/Home_Patient_Style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		 <!-- For Tabs -->
		 <link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/tabs.css" />
		<link rel="stylesheet" type="text/css" href="css/tabstyles.css" />
		 <!-- For  Old Tabs -->
		<script src="<?php echo base_url();?>js/tabcontent.js" type="text/javascript"></script>
		<link href="<?php echo base_url();?>tab-content/template1/tabcontent.css" rel="stylesheet" type="text/css" />

	</head>
	
	<body>
		<svg class="hidden">
			<defs>
				<path id="tabshape" d="M80,60C34,53.5,64.417,0,0,0v60H80z"/>
			</defs>
		</svg>
		<!--NavHeader-->
		<header>
			<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        					<span class="sr-only">Toggle navigation</span>
        					<span class="icon-bar"></span>
        					<span class="icon-bar"></span>
        					<span class="icon-bar"></span>
        				</button>
						<div class="nav navbar-left grid__item color-3">
							<a class="nav navbar-brand link link--nukun" href="#">R<span>S</span>D</a>
						</div>
        			</div>

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li>
							<a href="#menu-toggle" id="menu-toggle">&#9776; Menu</a>
            			</li>
							<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Signed in as Patient <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Settings</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">Sign Out</a></li>
								</ul>
							</li>
						</div>
					</ul>
				</div>
			</nav>
		</header>
		<!-- /NavHeader-->

		<!--Wrapper-->
		<div id="wrapper">
		<!--Sidebar-->
		<div id="sidebar-wrapper">
			<ul class="sidebar-nav">
				<li>
                    <a href="#">Profile</a>
                </li>
                <li>
                    <a href="#">Records</a>
                </li>
                <li>
                    <a href="#">Appointments</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Contact Us</a>
                </li>
                <li class="padbot">
                	<input type="text" class="form-control-inline" placeholder="Search">
                </li>
			</ul>
		</div>
		<!-- /Sidebar-->
		