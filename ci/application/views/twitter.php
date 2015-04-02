<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
    <meta charset="utf-8"/>
</head>
<body>
<?php
    //print_r($user_info);
    echo "<img src='$profile_image_url' /><br />";
    echo "<a href='https://twitter.com/$screen_name' style='text-decoration: none'><h3 style='display:inline'>$name </h3><h5 style='display:inline'>"."@"."$screen_name</h5></a><br />";
    echo "Followers: $followers_count<br />";
    echo "Friends: $friends_count<br />";
    echo '<p><a href="' . base_url() . 'twitter/clearsession">Logout</a></p>';

    $data = array('name' => 'tweet_text',
                  'placeholder' => 'Tweet text :)');
    echo form_open('twitter/tweet');
    echo form_input($data);
    echo form_submit('submit', 'Tweet');
    echo form_close();
    echo "<br />";
//    echo 'Session data:<br/><pre>';
//    print_r($this->session->all_userdata());
//    echo '</pre>';
?>
</body>

</html>
