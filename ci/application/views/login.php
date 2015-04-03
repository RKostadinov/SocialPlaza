<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>SocialPlaza | Facebook</title>
</head>

<body>

    <div class="container">
            <?php //site_url('facebook_process/loginByFacebook');?>
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
                echo "</br>";
                echo form_label('You wanna post link?');
                echo form_input('link');
                echo form_submit('submit', 'Post');
                echo form_close();
            ?>
            <!-- Create link to facebook profile -->
            <a href="<?=$user_profile['link']?>">View Profile</a>
            <!-- Create link logout -->
            <a href="<?= $logout_url ?>">Logout</a>
            <?php endif; ?>
    </div>

</body>

</html>
