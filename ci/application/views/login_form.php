<html>
	<head>
		<title>Login Form</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<?php
			if (isset($logout_message)) {
				echo "<div class='message'>";
				echo $logout_message;
				echo "</div>";
			}
		?>
		<?php
			if (isset($message_display)) {
				echo "<div class='message'>";
				echo $message_display;
				echo "</div>";
			}
		?>
		<div id="main">
			<div id="login">
				<h2>Login</h2>
				<?php
				 	echo form_open('user_authentication/user_login_process');
					echo "<div class='error_msg'>";
					if (isset($error_message)) {
						echo $error_message;
					}
					echo validation_errors();
					echo "</div>";
					echo form_label('Username:');
					echo form_input('username');
					echo form_label('Password:');
					echo form_password('password');
					echo "<br/>";
					echo form_submit('submit', 'Login');
					echo form_close();
				?>
				<a href="user_registration_show">SignUp</a>
			</div>
		</div>
	</body>
</html>