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
                echo "</br>";
                echo form_input('message');
                echo "</br>";
                echo form_label('You wanna post link?');
                echo "</br>";
                echo form_input('link');
                echo "</br>";
                echo form_label('You wanna post image?');
                echo "</br>";
                echo form_input('picture');
                echo "</br>";
                echo form_submit('submit', 'Post');
                echo form_close();




                    $i = 0;
                    foreach($feed['data'] as $post) {

                        if ($post['type'] == 'status' || $post['type'] == 'link' || $post['type'] == 'photo') {

                            if ($post['type'] == 'status') {
                                echo "<h4>Status updated on: " . date("jS M, Y", (strtotime($post['created_time']))) . "</h4>";
                                echo "<p>" . $post['message'] . "</p>";
                            }

                            if ($post['type'] == 'link') {
                                echo "<h2>Link posted on: " . date("jS M, Y", (strtotime($post['created_time']))) . "</h2>";
                                echo "<p>" . $post['name'] . "</p>";
                                echo "<p><a href=\"" . $post['link'] . "\" target=\"_blank\">" . $post['link'] . "</a></p>";
                            }


                            if ($post['type'] == 'photo') {
                                echo "<h2>Photo posted on: " . date("jS M, Y", (strtotime($post['created_time']))) . "</h2>";
                                if (empty($post['story']) === false) {
                                    echo "<p>" . $post['story'] . "</p>";
                                } elseif (empty($post['message']) === false) {
                                    echo "<p>" . $post['message'] . "</p>";
                                }
                                echo "<img src =" . $post['picture'] . " />";
                                echo "<p><a href=\"" . $post['link'] . "\" target=\"_blank\">View photo &rarr;</a></p>";
                            }

                            echo "</div>";

                            $i++;
                        }

                        if ($i == 10) {
                            break;
                        }
                    }



            ?>
            <!-- Create link to facebook profile -->
            <a href="<?=$user_profile['link']?>">View Profile</a>
            <!-- Create link logout -->
            <a href="<?= $logout_url ?>">Logout</a>
            <?php endif; ?>
    </div>

</body>

</html>
