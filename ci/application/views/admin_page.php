<html>
<head>
    <title>SocialPlaza | Admin Page</title>
    <!--		<link rel="stylesheet" type="text/css" href="--><?php //echo base_url(); ?><!--css/style.css">-->
    <!--		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>-->
<!--    <link rel="stylesheet" type="text/css" href="--><?php //echo base_url();?><!--css/user.css">-->
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/grayscale.css" rel="stylesheet">
    <!--        <script src="--><?php //echo base_url();?><!--js/slider.js"></script>-->
</head>

<!--<div id="profile">-->
<!--    --><?php
//    echo "Hello <b id='welcome'><i>" . $session['name'] . "</i> !</b>";
//    ?>
<!--    <b id="logout"><a href="logout">Logout</a></b>-->
<!--</div>-->

<body id="page-top" data-target=".navbar-fixed-top">

    <!-- Navigation -->
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

<!--        <div id="socialmedia_wrapper">-->
<!--            <a href="--><?php //echo base_url();?><!--twitter"><img class="icon" src="--><?php //echo base_url();?><!--img/twitter.png"/></a>-->
<!--            <a href="--><?php //echo base_url();?><!--instagram"><img class="icon" src="--><?php //echo base_url();?><!--img/instagram.png"/></a>-->
<!--            <a href="--><?php //echo base_url();?><!--linkedin"><img class="icon" src="--><?php //echo base_url();?><!--img/linkedin.png"/></a>-->
<!--            <a href="--><?php //echo base_url();?><!--youtube"><img class="icon" src="--><?php //echo base_url();?><!--img/youtube.png"/></a>-->
<!--            <a href="--><?php //echo base_url();?><!--facebook"><img class="icon" src="--><?php //echo base_url();?><!--img/facebook.png"/></a>-->
<!--        </div>-->
<!---->
<!--        <a href="--><?php //echo base_url();?><!--emails"><img class="icon" src="--><?php //echo base_url();?><!--img/email.png"/></a>-->
        <script src="<?php echo base_url();?>js/jquery.js"></script>
        <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>js/jquery.easing.min.js"></script>
        <script src="<?php echo base_url();?>js/slider.js"></script>
    </body>
</html>