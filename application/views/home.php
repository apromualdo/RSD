<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<html>
	<head>
		<title>RSD Dental Clinic</title>

		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/Home_Patient_Style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	</head>
	
	<body>
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
						<ul class="nav navbar-left">
							<a class="nav navbar-brand" href="#menu-toggle" id="menu-toggle">&#9776; Menu</a>
            			</ul>
        			</div>

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
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

		<!--Pages-->
		<div id="page-content-wrapper">
		<!--Patient Nav-->
		<center>
        	<div class="btn-group pat_nav" role="group" aria-label="...">
        		<button type="button" class="btn btn-default">Profile</button>
            	<button type="button" class="btn btn-default">Records</button>
            	<button type="button" class="btn btn-default">Appointments</button>
            	<button type="button" class="btn btn-default">Services</button>
            </div>
        </center><br>
		<!-- /Patient Nav-->

		<!--Page Contents-->
		
		<!-- /Page Contents-->
		</div>

		<footer>
		</footer>
		</div>
		<!-- /Wrapper-->

		<!-- jQuery -->
    	<script src="js/jquery.js"></script>

    	<!-- Bootstrap Core JavaScript -->
    	<script src="js/bootstrap.min.js"></script>

    	<!-- Menu Toggle Script -->
    	<script>
    		$("#menu-toggle").click(function(e) {
        	e.preventDefault();
        	$("#wrapper").toggleClass("toggled");
    		});
    	</script>
	</body>
</html>