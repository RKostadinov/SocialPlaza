<html>
<head>
    <title>SocialPlaza | Feed and post</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/grayscale.css" rel="stylesheet">

    <style>
        input:checked {
            height: 20px;
            width: 20px;
        }
    </style>

    <script>
        function load_feed(page_url,place)
        {
            var xmlhttp;
            if (window.XMLHttpRequest)
            {// code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            }
            else
            {// code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function()
            {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    document.getElementById(place).innerHTML=xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET",page_url,true);
            xmlhttp.send();
        }
    </script>


</head>

<body id="page-top" data-target=".navbar-fixed-top">
<!-- Navigation menu bar, css - grayscale.css-->
    <nav class="navbar navbar-custom navbar-fixed-top top-nav-collapse" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>

                <a class="navbar-brand page-scroll" href="<?php echo base_url(); ?>">
                    <div class="nav-logo-visible">SocialPlaza</div>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li>
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#download"></a>
                    </li>
                    <li>
                    <li class="dropdown dropdown-large">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $session['name'];?><b class="caret"></b></a>

                        <ul class="dropdown-menu dropdown-menu-large row">
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">User</li>
                                    <li><a href="<?php echo base_url(); ?>">Post&feed</a></li>
                                    <li><a href="<?php echo base_url(); ?>user_authentication/payment_show">Payment</a></li>
                                    <li class="divider"></li>
<!--                                    <li class="dropdown-header"></li>-->
                                    <li><a href="logout">Logout</a></li>
                                </ul>
                            </li>
                        </ul>

                    </li>
                </ul>
<!--                        <a class="page-scroll" href="#contact">Contact</a>-->
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<!-- The end of the menu bar -->
<!--Side menu, css - grayscale.css, js - slider.js-->

    <div id="wrapper" class="active">
<!-- Sidebar -->
        <div id="sidebar-wrapper">
            <nav id="spy">
<!--                <ul class="nav">-->
<!--                    <li>-->
                <form method = "POST" action ="<?php echo base_url();?>posts">
                        <div id = "textbox">
                           <textarea type="textarea" name="message" placeholder="What do you want to post?" class="post-box"></textarea>
                        </div>
                        <hr>

                            <div class="col-md-6">
                                <div class="funkyradio">
                                    <div class="funkyradio-default">
                                        <input type="checkbox" name="facebook" id="checkbox1" />
                                        <label for="checkbox1">Facebook</label>
                                    </div>
                                    <div class="funkyradio-primary">
                                        <input type="checkbox" name="twitter" id="checkbox2" />
                                        <label for="checkbox2">Twitter</label>
                                    </div>
                                    <div class="funkyradio-success">
                                        <input type="checkbox" name="linkedin" id="checkbox3"/>
                                        <label for="checkbox3">LinkedIn</label>
                                    </div>
                                </div>
                            </div>
<!--                    </li>-->
<!--                    <li>-->

                <button class="btn btn-lg btn-primary btn-block post_button" type="submit">Post</button>
                </form>
<!--                    </li>-->
<!--                </ul>-->
            </nav>
        </div>
        <div class="content-header">
            <h1 id="home">
                <div id="menu-toggle" href="#" class="col-md-12 btn-menu toggle">
                    <button class="btn btn-default orange-circle-button" href="">Post<span class="orange-circle-greater-than"></span></button>
                </div>
            </h1>
        </div>

<!--The end of the side menu        -->

<!-- Page content -->
        <section id="download" class="text-center">
            <div class="download-section">
                <div class="container">
                    <div class="col-lg-8 col-lg-offset-2">
                        <h1>Welcome <?php echo $session['name'];?>!</h1>
                        <p>Social life - better life!</p>
                    </div>
                </div>
            </div>
        </section>
        <div id="page-content-wrapper">
            <div class="page-content inset" data-spy="scroll" data-target="#spy">
                <div class="row">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ul class="nav nav-pills nav-justified">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"><a href="#" onclick="load_feed('http://localhost/ci/facebook','myDiv1')">Facebook</a></li>
                            <li data-target="#myCarousel" data-slide-to="1"><a href="#" onclick="load_feed('http://localhost/ci/twitter','myDiv1')">Twitter</a></li>
                            <li data-target="#myCarousel" data-slide-to="2"><a href="#" onclick="load_feed('http://localhost/ci/instagram','myDiv1')">Instagram</a></li>
                            <li data-target="#myCarousel" data-slide-to="3"><a href="#">LinkedIn</a></li>
                            <li data-target="#myCarousel" data-slide-to="4"><a href="#">+</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row well">
                    <div class="item active" style="background-image: url('/ci/img/feed_background.png');  background-repeat: no-repeat; ">
                        <div id="myDiv1"></div>
                    </div>
                </div>
<!--                <div class="navbar navbar-default navbar-static-bottom">-->
<!--                    <p class="navbar-text pull-left">-->
<!--                    <div id="socialmedia_wrapper">-->
<!--                        <a href="--><?php //echo base_url();?><!--twitter"><img class="icon" src="--><?php //echo base_url();?><!--img/twitter.png"/></a>-->
<!--                        <a href="--><?php //echo base_url();?><!--instagram"><img class="icon" src="--><?php //echo base_url();?><!--img/instagram.png"/></a>-->
<!--                        <a href="--><?php //echo base_url();?><!--tumblr"><img class="icon" src="--><?php //echo base_url();?><!--img/linkedin.png"/></a>-->
<!--                        <a href="--><?php //echo base_url();?><!--youtube"><img class="icon" src="--><?php //echo base_url();?><!--img/youtube.png"/></a>-->
<!--                        <a href="--><?php //echo base_url();?><!--facebook"><img class="icon" src="--><?php //echo base_url();?><!--img/facebook.png"/></a>-->
<!--                    </div>-->
<!--                    </p>-->
<!--                </div>-->
<!--                <a href="--><?php //echo base_url();?><!--emails"><img class="icon" src="--><?php //echo base_url();?><!--img/email.png"/></a>-->
<!--            </div>-->


        </div>

    </div>


        <script src="<?php echo base_url();?>js/jquery.js"></script>
        <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>js/jquery.easing.min.js"></script>
        <script src="<?php echo base_url();?>js/side_menu.js"></script>
        <script src="<?php echo base_url();?>js/slider.js"></script>
    </body>
</html>