<html>

<head>
<title>Login with Facebook Using CodeIgniter</title>
</head>

<body>

<div class="container">

	<form>
        <?php //site_url('facebook_process/loginByFacebook');?>
        <p>Hello world!</p>
		<!-- @user_profile check when user login successed  -->
		<?php if (@$user_profile):  // call var_dump($user_profile) to view all data ?>
		<!-- Display profile photo -->
		<img src="https://graph.facebook.com/<?=$user_profile['id']?>/picture?type=large" style="width: 140px; height: 140px;">
		<!-- Display profile name -->
		<h2><?=$user_profile['name']?></h2>
        <p><?=$user_profile['gender']?></p>

        <?php
            echo form_open('facebook_process/post_to_wall');
            echo form_label('What\'s on your mind? ');
            echo form_input('message');
            echo form_submit('submit', 'Post');
            echo form_close();
        ?>
        <!-- Create link to facebook profile -->
		<a href="<?=$user_profile['link']?>">View Profile</a>
		<!-- Create link logout -->
		<a href="<?= $logout_url ?>">Logout</a> 
	    <!-- Display login when start home page first -->

<!--		<h2>Login with Facebook Using CodeIgniter</h2>-->
<!--		<a href="--><?//= $login_url ?><!--">Login</a>-->
		<?php endif; ?>

	</form>

</div>

</body>

</html>
