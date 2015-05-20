<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
    <meta charset="utf-8"/>
    <title>SocialPlaza | Twitter</title>
</head>
<body>
<?php
    //print_r($user_info);
    echo "<img src='$user_info->profile_image_url' /><br />";
    echo "<a href='https://twitter.com/$user_info->screen_name' style='text-decoration: none'><h3 style='display:inline'>$user_info->name </h3><h5 style='display:inline'>"."@"."$user_info->screen_name</h5></a><br />";
    echo "Followers: $user_info->followers_count<br />";
    echo "Friends: $user_info->friends_count<br />";
    echo '<p><a href="' . base_url() . 'twitter/clearsession">Logout</a></p>';

    $data = array('name' => 'tweet_text',
                  'placeholder' => 'Tweet text :)');
    echo form_open('twitter/tweet');
    echo form_input($data);
    echo form_submit('submit', 'Tweet');
    echo form_close();
    echo "<br />";

    foreach ($home_timeline as $tweet) {
        $name = $tweet->user->name;
        $text = $tweet->text;
        echo "<div class = 'tweet'>";
        echo $name;
        echo "<br />";
        echo $text;
        echo "<br />";
        echo "</div>";
    }

?>
</body>

</html>
