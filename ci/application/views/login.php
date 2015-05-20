<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>SocialPlaza | Facebook</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link href="<?php echo base_url();?>css/feeds.css" rel="stylesheet">




</head>

<body>
        <div class="polaroid">

            <!-- Display profile name -->
            <p><?=$user_profile['name']?></p>
            <img src="https://graph.facebook.com/<?php $user_profile['id']?>/picture?type=large">

        </div>
        <br>
        <br>
       <!-- <p><?=$user_profile['gender']?></p>-->



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
//                                            $feeds = json_decode($feed['data'] , true);
//                                            var_dump($feeds);
                                            $i = 0;
                                            foreach( $feeds as $post) {

                                                if ($post['type'] == 'status' || $post['type'] == 'link' || $post['type'] == 'photo') {

                                                    if ($post['type'] == 'status') {
                                                        echo "<li class='news-item'>";
                                                        echo "<table cellpadding='4'>";
                                                        echo "<tr>";
                                                        echo "<td>";
                                                        echo "<h4 >Status updated on: " . date("jS M, Y", (strtotime($post['created_time']))) . "</h4>";
                                                        echo "<p style = 'color: #664B51;'>" . $post['message'] . "</p>";
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
                                                            echo "<p style = 'color: #72545B;'>" . $post['story'] . "</p>";
                                                        } elseif (empty($post['message']) === false) {
                                                            echo "<p style = 'color: #72545B;'>" . $post['message'] . "</p>";
                                                        }
                                                        echo "<li class='news-item'>";
                                                        echo "<table cellpadding='4'>";
                                                        echo "<tr>";
                                                        echo "<td>";
                                                        echo "<img src =" . $post['picture'] . "  style = ' border: 6px ;border-style: outset;' />";
                                                        echo "<br>";
                                                        echo "<div class='button'>";
                                                        echo "<br>";
                                                        echo "<a href=\"" . $post['link'] . "\" target=\"_blank\" class='btn btn-blue' target= 'blank'>View photo &rarr;</a>";
                                                        echo "</div>";
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

        <a href="<?=$user_profile['link']?> " class='btn btn-blue'>View Profile</a>

        <a href="<?= $logout_url ?>" class='btn btn-blue'>Logout</a>



</body>

</html>
