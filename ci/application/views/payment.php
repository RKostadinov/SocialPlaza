<html>
<head>
    <title>SocialPlaza | Feed and post</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/grayscale.css" rel="stylesheet">
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->session->all_userdata()['session']['name']; ?><b class="caret"></b></a>

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

<!--<div id="wrapper" class="active">-->
    <!--&lt;!&ndash; Sidebar &ndash;&gt;-->
    <!--<div id="sidebar-wrapper">-->
        <!--<nav id="spy">-->
            <!--&lt;!&ndash;                <ul class="nav">&ndash;&gt;-->
            <!--&lt;!&ndash;                    <li>&ndash;&gt;-->
            <!--<div id = "textbox">-->
                <!--<textarea type="textarea" name="message" placeholder="What do you want to post?" class="post-box"></textarea>-->
            <!--</div>-->
            <!--<hr>-->
            <!--<div class="col-md-6">-->
                <!--<div class="funkyradio">-->
                    <!--<div class="funkyradio-default">-->
                        <!--<input type="checkbox" name="facebook" id="checkbox1" />-->
                        <!--<label for="checkbox1">Facebook</label>-->
                    <!--</div>-->
                    <!--<div class="funkyradio-primary">-->
                        <!--<input type="checkbox" name="twitter" id="checkbox2" />-->
                        <!--<label for="checkbox2">Twitter</label>-->
                    <!--</div>-->
                    <!--<div class="funkyradio-success">-->
                        <!--<input type="checkbox" name="checkbox" id="checkbox3"/>-->
                        <!--<label for="checkbox3">LinkedIn</label>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
            <!--&lt;!&ndash;                    </li>&ndash;&gt;-->
            <!--&lt;!&ndash;                    <li>&ndash;&gt;-->

            <!--<button class="btn btn-lg btn-primary btn-block post_button" type="submit">Post</button>-->
            <!--&lt;!&ndash;                    </li>&ndash;&gt;-->
            <!--&lt;!&ndash;                </ul>&ndash;&gt;-->
        <!--</nav>-->
    <!--</div>-->
    <!--<div class="content-header">-->
        <!--<h1 id="home">-->
            <!--<div id="menu-toggle" href="#" class="col-md-12 btn-menu toggle">-->
                <!--<button class="btn btn-default orange-circle-button" href="">Post<span class="orange-circle-greater-than"></span></button>-->
            <!--</div>-->
            <!--&lt;!&ndash;                <a id="menu-toggle" href="#" class="glyphicon glyphicon-align-justify btn-menu toggle">&ndash;&gt;-->
            <!--&lt;!&ndash;                   <i class="fa fa-bars"></i>&ndash;&gt;-->
            <!--&lt;!&ndash;                </a>&ndash;&gt;-->
        <!--</h1>-->
    <!--</div>-->

    <!--The end of the side menu        -->

    <!-- Page content -->
    <section id="download" class="text-center">
        <div class="download-section">
<!--            <div class="container">-->
<!--                <div class="col-lg-8 col-lg-offset-2">-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </section>
<br><br>
<!-- Plans -->
<section id="plans">
    <div class="container">
        <div class="row">

            <div class="col-md-4 text-center">
                <div class="panel panel-danger panel-pricing">
                    <div class="panel-heading">
                        <i class="fa fa-desktop"></i>
                        <h3>Plan 1</h3>
                    </div>
                    <div class="panel-body text-center">
                        <p><strong>$8 / Month</strong></p>
                    </div>
                    <ul class="list-group text-center">
                        <li class="list-group-item"><i class="fa fa-check"></i> Personal use</li>
                        <li class="list-group-item"><i class="fa fa-check"></i> Unlimited projects</li>
                        <li class="list-group-item"><i class="fa fa-check"></i> 27/7 support</li>
                    </ul>
                    <div class="panel-footer">
                        <a class="btn btn-lg btn-block btn-danger" href="#">BUY NOW!</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 text-center">
                <div class="panel panel-warning panel-pricing">
                    <div class="panel-heading">
                        <i class="fa fa-desktop"></i>
                        <h3>Plan 2</h3>
                    </div>
                    <div class="panel-body text-center">
                        <p><strong>$20 / 3 Months</strong></p>
                    </div>
                    <ul class="list-group text-center">
                        <li class="list-group-item"><i class="fa fa-check"></i> Personal use</li>
                        <li class="list-group-item"><i class="fa fa-check"></i> Unlimited projects</li>
                        <li class="list-group-item"><i class="fa fa-check"></i> 27/7 support</li>
                    </ul>
                    <div class="panel-footer">
                        <a class="btn btn-lg btn-block btn-warning" href="#">BUY NOW!</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 text-center">
                <div class="panel panel-success panel-pricing">
                    <div class="panel-heading">
                        <i class="fa fa-desktop"></i>
                        <h3>Plan 3</h3>
                    </div>
                    <div class="panel-body text-center">
                        <p><strong>$50 / 6 Month</strong></p>
                    </div>
                    <ul class="list-group text-center">
                        <li class="list-group-item"><i class="fa fa-check"></i> Personal use</li>
                        <li class="list-group-item"><i class="fa fa-check"></i> Unlimited projects</li>
                        <li class="list-group-item"><i class="fa fa-check"></i> 27/7 support</li>
                    </ul>
                    <div class="panel-footer">
                        <a class="btn btn-lg btn-block btn-success" href="#">BUY NOW!</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<script src="<?php echo base_url();?>js/jquery.js"></script>
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>js/jquery.easing.min.js"></script>
<script src="<?php echo base_url();?>js/side_menu.js"></script>
</body>
</html>