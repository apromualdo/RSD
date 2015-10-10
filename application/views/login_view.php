<!DOCTYPE HTML>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Login Page</title>
	</head>
<body>
	<h1>Login</h1>
	<?php echo form_open('authenticator_class/authenticator_method'); ?>
	<p>
		<?php 
			echo form_label('Username: ', 'username');
			echo form_input('username', set_value('username'), 'id=username');
		?>
	</p>
	<p>
		<?php 
			echo form_label('Password: ', 'password');
			echo form_password('password', '', 'id=password');
		?>
	</p>
	<p>
		<?php echo form_submit('submit', 'Login'); ?>
	</p>
	<p>
		<?php echo validation_errors(); ?>
	</p>
</body>
</html>