<html>
<head>
    <title>SocialPlaza | Admin Page</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
    <!--		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/user.css">
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/grayscale.css" rel="stylesheet">
    <script src="<?php echo base_url();?>js/side_menu.js"></script>
    <!--        <script src="--><?php //echo base_url();?><!--js/slider.js"></script>-->

    <style>
        input:checked {
            height: 20px;
            width: 20px;
        }
    </style>

</head>

<body id="page-top" data-target=".navbar-fixed-top">
<!-- Navigation menu bar, css - grayscale.css-->
    <nav class="navbar navbar-custom navbar-fixed-top top-nav-collapse" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>

                <a class="navbar-brand page-scroll" href="#page-top">
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
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#download">Download</a>
                    </li>
                    <li>
                    <li class="dropdown dropdown-large">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $session['name'];?><b class="caret"></b></a>

                        <ul class="dropdown-menu dropdown-menu-large row">
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">User</li>
                                    <li><a href="#">My profile</a></li>
                                    <li><a href="#">Settings</a></li>
                                    <li class="divider"></li>
<!--                                    <li class="dropdown-header"></li>-->
                                    <li><a href="logout">Logout</a></li>
                                </ul>
                            </li>
                        </ul>

                    </li>
                </ul>
<!--                        <a class="page-scroll" href="#contact">Contact</a>-->
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<!-- The end of the menu bar -->
<!--Side menu, css - grayscale.css, js - slider.js-->

    <div id="wrapper">

<!-- Sidebar -->
        <div id="sidebar-wrapper">
            <nav id="spy">
                <ul class="sidebar-nav nav">

                   <div id = "textbox"> <textarea type="textarea" name="message" placeholder="What do you want to post?" class="post-box"></textarea> </div>
                    <hr>
                    <!--<li>
                        <p>Facebook</p>
                    </li>
                    <li>
                        <p>Twitter</p>
                    </li>
                    <li>
                        <p>Instagram</p>
                    </li>
                    <li>
                        <p>LinkedIn</p>
                    </li>-->
                    <div class="col-md-6">
                        <div class="funkyradio">
                            <div class="funkyradio-default">
                                <input type="checkbox" name="checkbox" id="checkbox1" checked/>
                                <label for="checkbox1">Facebook</label>
                            </div>
                            <div class="funkyradio-primary">
                                <input type="checkbox" name="checkbox" id="checkbox2" checked/>
                                <label for="checkbox2">Twitter</label>
                            </div>
                            <div class="funkyradio-success">
                                <input type="checkbox" name="checkbox" id="checkbox3" checked/>
                                <label for="checkbox3">LinkedIn</label>
                            </div>
                        </div>
                    </div>
<!--                    <form action="">-->
<!--                        <p><input type="checkbox" value="facebook"> Facebook<br></p>-->
<!--                        <p><input type="checkbox" value="twitter" > Twitter<br></p>-->
<!--                        <p><input type="checkbox" value="instagram"> Instagram<br></p>-->
<!--                        <p><input type="checkbox" value="linkein" >LinkedIn<br></p>-->
<!--                    </form>-->
                </ul>
            </nav>
        </div>
        <div class="content-header">
            <h1 id="home">
                <a id="menu-toggle" href="#" class="glyphicon glyphicon-align-justify btn-menu toggle">
                    post<i class="fa fa-bars"></i>
                </a>
            </h1>
        </div>

<!--The end of the side menu        -->

<!-- Page content -->
        <div id="page-content-wrapper">
            <div class="page-content inset" data-spy="scroll" data-target="#spy">
                <div class="row">

                    <div class="jumbotron text-center" >
                        <h1>Hello <?php echo $session['name'];?>!</h1>
                        <p>Welcome to SocialPlaza!</p>
                        <!--                    <p><a class="btn btn-default">Click On Me!</a>-->
                        <!--                        <a class="btn btn-info">Tweet Me!</a></p>-->
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12 well">
                        <legend id="anch1"><a href="<?php echo base_url();?>facebook">Facebook</a></legend>
                    </div>
                    <div class="col-md-12 well">
                        <legend id="anch2"><a href="<?php echo base_url();?>twitter">Twitter</a></legend>
                    </div>
                    <div class="col-md-12 well">
                        <legend id="anch3"><a href="<?php echo base_url();?>instagram">Instagram</a></legend>
                    </div>
                    <div class="col-md-12 well">
                        <legend id="anch4"><a href="<?php echo base_url();?>linkedin">LinkedIn</a></legend>
                    </div>
                </div>

                <div class="navbar navbar-default navbar-static-bottom">
                    <p class="navbar-text pull-left">
<!--                    <div id="socialmedia_wrapper">-->
                        <a href="<?php echo base_url();?>twitter"><img class="icon" src="<?php echo base_url();?>img/twitter.png"/></a>
                        <a href="<?php echo base_url();?>instagram"><img class="icon" src="<?php echo base_url();?>img/instagram.png"/></a>
                        <a href="<?php echo base_url();?>tumblr"><img class="icon" src="<?php echo base_url();?>img/linkedin.png"/></a>
                        <a href="<?php echo base_url();?>youtube"><img class="icon" src="<?php echo base_url();?>img/youtube.png"/></a>
                        <a href="<?php echo base_url();?>facebook"><img class="icon" src="<?php echo base_url();?>img/facebook.png"/></a>
<!--                    </div>-->
                    </p>
                </div>
                <a href="<?php echo base_url();?>emails"><img class="icon" src="<?php echo base_url();?>img/email.png"/></a>
            </div>


        </div>

    </div>


        <script src="<?php echo base_url();?>js/jquery.js"></script>
        <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>js/jquery.easing.min.js"></script>
        <script src="<?php echo base_url();?>js/slider.js"></script>
        <script src="<?php echo base_url();?>js/side_menu.js"></script>
    </body>
</html>