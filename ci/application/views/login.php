<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>SocialPlaza | Facebook</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="scripts/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
    <link href="http://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" type="text/css">


    <!--Facebook feed -->
    <style>
    .glyphicon {
    margin-right: 4px !important; /*override*/
    }
    .pagination .glyphicon {
    margin-right: 0px !important; /*override*/
    }
    .pagination a {
    color: #555;
    }
    .panel ul {
    padding: 0px;
    margin: 0px;
    list-style: none;
    }
    .news-item {
    padding: 4px 4px;
    margin: 0px;
    border-bottom: 1px dotted #555;
    }
    </style>
    <script type="text/javascript">
        $(function () {
            $(".demo").bootstrapNews({
                newsPerPage: 4,
                navigation: true,
                autoplay: true,
                direction:'up', // up or down
                animationSpeed: 'normal',
                newsTickerInterval: 4000, //4 secs
                pauseOnHover: true,
                onStop: null,
                onPause: null,
                onReset: null,
                onPrev: null,
                onNext: null,
                onToDo: null
            });
        });

    </script>
    <!--Facebook feed end -->

    <!--Profile image -->
    <style>
        body {
            background: #867d79;
        }
        </style>
    <!--Fprofile image end -->

</head>

<body>

    <div class="container">
            <?php //site_url('facebook_process/loginByFacebook');?>
            <!-- @user_profile check when user login successed  -->
            <?php if (@$user_profile):  // call var_dump($user_profile) to view all data ?>
            <!-- Display profile photo -->

                    <p><h2><?=$user_profile['name']?></h2></p>

                    <img src="https://graph.facebook.com/<?=$user_profile['id']?>/picture?type=large" style="width: 140px; height: 140px;">


            <!-- Display profile name -->
            <h2><?=$user_profile['name']?></h2>
            <p><?=$user_profile['gender']?></p>


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
                                                    $i = 0;
                                                    foreach($feed['data'] as $post) {

                                                        if ($post['type'] == 'status' || $post['type'] == 'link' || $post['type'] == 'photo') {

                                                            if ($post['type'] == 'status') {
                                                                echo "<li class='news-item'>";
                                                                echo "<table cellpadding='4'>";
                                                                echo "<tr>";
                                                                echo "<td>";
                                                                echo "<h4>Status updated on: " . date("jS M, Y", (strtotime($post['created_time']))) . "</h4>";
                                                                echo "<p>" . $post['message'] . "</p>";
                                                                echo "</td>";
                                                                echo "</tr>";
                                                                echo "</table>";
                                                                echo "</li>";
                                                            }

                                                            if ($post['type'] == 'link') {
                                                                echo "<h2>Link posted on: " . date("jS M, Y", (strtotime($post['created_time']))) . "</h2>";
                                                                echo "<p>" . $post['link'] . "</p>";
                                                                echo "<p><a href=\"" . $post['link'] . "\" target=\"_blank\">" . $post['link'] . "</a></p>";
                                                            }


                                                            if ($post['type'] == 'photo') {

                                                                echo "<h2>Photo posted on: " . date("jS M, Y", (strtotime($post['created_time']))) . "</h2>";

                                                                if (empty($post['story']) === false) {
                                                                    echo "<p>" . $post['story'] . "</p>";
                                                                } elseif (empty($post['message']) === false) {
                                                                    echo "<p>" . $post['message'] . "</p>";
                                                                }
                                                                echo "<li class='news-item'>";
                                                                echo "<table cellpadding='4'>";
                                                                echo "<tr>";
                                                                echo "<td>";
                                                                echo "<img src =" . $post['picture'] . " />";
                                                                echo "<p><a href=\"" . $post['link'] . "\" target=\"_blank\">View photo &rarr;</a></p>";
                                                                echo "</td>";
                                                                echo "</tr>";
                                                                echo "</table>";
                                                                echo "</li>";
                                                            }

                                                            echo "</div>";

                                                            $i++;
                                                        }

                                                        if ($i == 10) {
                                                            break;
                                                        }
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


?>

            <!-- Create link to facebook profile -->
            <a href="<?=$user_profile['link']?>">View Profile</a>
            <!-- Create link logout -->
            <a href="<?= $logout_url ?>">Logout</a>
            <?php endif; ?>
    </div>

</body>

</html>
