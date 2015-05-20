<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
    <meta charset="utf-8"/>
    <title>SocialPlaza | Twitter</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="scripts/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
    <link href="<?php echo base_url();?>css/feeds.css" rel="stylesheet">

</head>
<body>
<?php
//print_r($user_info);
echo "<img src='$user_info->profile_image_url' /><br />";
echo "<a href='https://twitter.com/$user_info->screen_name' style='text-decoration: none'><h3 style='display:inline'>$user_info->name </h3><h5 style='display:inline'>"."@"."$user_info->screen_name</h5></a><br />";
echo "Followers: $user_info->followers_count<br />";
echo "Friends: $user_info->friends_count<br />";


$data = array('name' => 'tweet_text',
    'placeholder' => 'Tweet text :)');

echo "<br />";
?>
<div class="panel panel-default">
    <div class="panel-heading"> <span class="glyphicon glyphicon-list-alt"></span><b>Feed</b></div>
    <div class="panel-body">
        <div class="row">
            <div class="col-xs-12">
                <ul class="demo">
                    <li class="news-item">
                        <table cellpadding="4">
                            <tr>
                                <!--<td><img src="images/1.png" width="60" class="img-circle" /></td>-->
                                <td>
                                    <?php
                                    foreach ($home_timeline as $tweet) {
                                        $name = $tweet->user->name;
                                        $text = $tweet->text;

                                        echo $name;


                                        echo "<li class='news-item'>";
                                        echo "<table cellpadding='4'>";
                                        echo "<tr>";
                                        echo "<td>";
                                        echo $text;
                                        echo "</td>";
                                        echo "</tr>";
                                        echo "</table>";
                                        echo "</li>";
                                        echo "<br />";

                                        echo "<br />";

                                    }

                                    ?>
                                </td>
                            </tr>
                        </table>
                </ul>
            </div>
        </div>
    </div>
    <div class="panel-footer"> </div>
</div>
<?php echo '<p><a href="' . base_url() . 'twitter/clearsession">Logout</a></p>'; ?>
</body>

</html>
