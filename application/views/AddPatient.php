<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>


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
		<div class="container">
			<!-- Top Navigation -->
			<div class="tabs tabs-style-shape">
					<nav>
						<ul>
							<li>
								<a href="#section-shape-1">
									<svg viewBox="0 0 80 60" preserveAspectRatio="none"><use xlink:href="#tabshape"></use></svg>
									<span>Home</span>
								</a>
							</li>
							<li>
								<a href="#section-shape-2">
									<svg viewBox="0 0 80 60" preserveAspectRatio="none"><use xlink:href="#tabshape"></use></svg>
									<svg viewBox="0 0 80 60" preserveAspectRatio="none"><use xlink:href="#tabshape"></use></svg>
									<span>Design</span>
								</a>
							</li>
						</ul>
					</nav>
					<div class="content-wrap">
						<section id="section-shape-1">
							<?php echo form_open('Welcome/addpatient') ?>
							<table class="product_table">
								<legend> Add Patient </legend>
								<tr>
									<td>Lastname:</td>
									<td><?php echo form_input('lastname') ?></td>
								</tr>
								<tr>
									<td>Firstname:</td>
									<td><?php echo form_input('firstname') ?></td>
								</tr>
								<tr>
									<td> Middlename:</td>
									<td><?php echo form_input('middlename') ?></td>
								</tr>
								<tr>
									<td> Auxilliary Name:</td>
									<td><?php echo form_input('auxilliaryname') ?></td>
								</tr>
								<tr>
									<td> Address:</td>
									<td><?php echo form_input('address') ?></td>
								</tr>
								<tr>
									<td>Sex:</td>
									<td><?php echo form_input('sex') ?></td>
								</tr>
								<tr>
									<td> Contact:</td>
									<td><?php echo form_input('contact') ?></td>
								</tr>
								<tr>
									<td> Allergies:</td>
								<?php  $data = array(
								      'name'        => 'desc',
								      'rows'        => '5',
								      'cols'        => '60',
								      'style'       => 'width:50%',
								    ); ?>
									<td><?php echo form_textarea($data) ?></td>
								</tr>
								<tr>
									<td><?php echo form_submit('submit','Submit'); ?></td>	
								</tr>
								<?php echo form_close();?>
							</table>
						</section>
						<section id="section-shape-2"><p>2</p></section>
					</div><!-- /content -->
				</div><!-- /tabs -->
		</div><!-- /container -->

		
		
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
    	<script src="js/cbpFWTabs.js"></script>
    	<script>
    		(function() {

				[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
					new CBPFWTabs( el );
				});

			})();
    	</script>
	</body>
</html>