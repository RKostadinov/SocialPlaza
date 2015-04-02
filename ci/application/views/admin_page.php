<html>
	<head>
		<title>Admin Page</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div id="profile">
			<?php
				echo "Hello <b id='welcome'><i>" . $session['name'] . "</i> !</b>";
			?>
            <b id="logout"><a href="logout">Logout</a></b>
		</div>

        <div id="socialmedia_wrapper">
            <a href="<?php echo base_url();?>twitter"><img class="icon" src="<?php echo base_url();?>images/twitter.png"/></a>
            <a href="<?php echo base_url();?>instagram"><img class="icon" src="<?php echo base_url();?>images/instagram.png"/></a>
            <a href="<?php echo base_url();?>linkedin"><img class="icon" src="<?php echo base_url();?>images/linkedin.png"/></a>
            <a href="<?php echo base_url();?>youtube"><img class="icon" src="<?php echo base_url();?>images/youtube.png"/></a>
            <a href="<?php echo base_url();?>facebook"><img class="icon" src="<?php echo base_url();?>images/facebook.png"/></a>
        </div>

        <a href="<?php echo base_url();?>emails"><img class="icon" src="<?php echo base_url();?>images/email.png"/></a>

    </body>
</html>