<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

		<!--Page Contents-->
		<div class="page-content-wrapper">
		<div class="container-fluid main_contents">
			<div class="panel panel-default">
				<div class="panel-body">
					

					<div class="row">
						<div class="col-md-6">
							<h4>Patient Information</h4><hr>
							<table class="pat-info">
								<tr>
									<th>Name</th>
									<td>Juan Dela Cruz</td>
								</tr>
								<tr>
									<th>Address</th>
									<td>40 Spain St., Greenmeadows Village, Ortigas, Pasig City</td>
								</tr>
								<tr>
									<th>Birthdate</th>
									<td>Jan 1, 1900</td>
								</tr>
								<tr>
									<th>Age</th>
									<td>25</td>
								</tr>
								<tr>
									<th>Occupation</th>
									<td>System Analyst</td>
								</tr>
								<tr>
									<th>Status</th>
									<td>Single</td>
								</tr>
								<tr>
									<th>Contact No.</th>
									<td>09123456789</td>
								</tr>
								<tr>
									<th>Email Address</th>
									<td>juandelacruz@yahoo.com</td>
								</tr>
							</table>
							</div>

						<div class="col-md-6">
							<h4>Records Summary</h4><hr>
							<div class="col-md-3">
								<ul class="info_label">
									<li><b>Total</b></li>
									<li><b>Most Recent</b></li>
									<li><b>First</b></li>
								</ul>
							</div>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-6">
							<h4>Patient Information</h4><hr>
							<div class="col-md-3">
								<ul class="info_label">
									<li><b>Name</b></li>
									<li><b>Address</b></li>
									<li><b>Birthdate</b></li>
									<li><b>Age</b></li>
									<li><b>Occupation</b></li>
									<li><b>Status</b></li>
									<li><b>Contact No.</b></li>
									<li><b>Email Address</b></li>
								</ul>
							</div>
							<div class="col-md-3">
								<ul class="info_label">
									<li>Juan Dela Cruz</li>
									<li>40 Spain St., Greenmeadows Village, Ortigas, Pasig City</li>
									<li>Jan 1, 1900</li>
									<li>25</li>
									<li>System Analyst</li>
									<li>Single</li>
									<li>09123456789</li>
									<li>juandelacruz@yahoo.com</li>
								</ul>
							</div>
						</div>
						<div class="col-md-6">
							<h4>Records Summary</h4><hr>
							<div class="col-md-3">
								<ul class="info_label">
									<li><b>Total</b></li>
									<li><b>Most Recent</b></li>
									<li><b>First</b></li>
								</ul>
							</div>
						</div>
					</div>
				

				</div>
			</div>
		</div>
		</div>
		<!-- /Page Contents-->
		

		<footer>
		</footer>
		</div>
		<!-- /Wrapper-->

		<!-- jQuery -->
    	<script src="<?php echo base_url();?>js/jquery.js"></script>

    	<!-- Bootstrap Core JavaScript -->
    	<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>

    	<!-- Menu Toggle Script -->
    	<script>
    		$("#menu-toggle").click(function(e) {
        	e.preventDefault();
        	$("#wrapper").toggleClass("toggled");
    		});
    	</script>
	</body>
</html>