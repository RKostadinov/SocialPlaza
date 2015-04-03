<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">-->
<!--<html>-->
<!--	<head>-->
<!--        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
<!--		<title>SocialPlaza | Login Form</title>-->
<!--		<link rel="stylesheet" type="text/css" href="--><?php //echo base_url(); ?><!--css/style.css">-->
<!--		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>-->
<!--	</head>-->
<!--	<body>-->
<!--		--><?php
//			if (isset($logout_message)) {
//				echo "<div class='message'>";
//				echo $logout_message;
//				echo "</div>";
//			}
//		?>
<!--		--><?php
//			if (isset($message_display)) {
//				echo "<div class='message'>";
//				echo $message_display;
//				echo "</div>";
//			}
//		?>
<!--		<div id="main">-->
<!--			<div id="login">-->
<!--				<h2>Login</h2>-->
<!--				--><?php
//				 	echo form_open('user_authentication/user_login_process');
//					echo "<div class='error_msg'>";
//					if (isset($error_message)) {
//						echo $error_message;
//					}
//					echo validation_errors();
//					echo "</div>";
//					echo form_label('Username:');
//					echo form_input('username');
//					echo form_label('Password:');
//					echo form_password('password');
//					echo "<br/>";
//					echo form_submit('submit', 'Login');
//					echo form_close();
//				?>
<!--				<a href="user_registration_show">SignUp</a>-->
<!--			</div>-->
<!--		</div>-->
<!--	</body>-->
<!--</html>-->
<!---->
<!---->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SocialPlaza | Welcome</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>

            <a class="navbar-brand page-scroll" href="#page-top">
                <div class="nav-logo">SocialPlaza</div>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a class="page-scroll" href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#about">About</a>
                </li>
                <li>
                    <a class="page-scroll" href="#download">Download</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Intro Header -->
<header class="intro">
    <div class="intro-body">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="brand-heading">Socia<font color='#337ab7'>l</font>P<font color='#337ab7'>l</font>aza</h1>
                        <?php echo form_open('user_authentication/user_login_process', array('class'=>'form-signin')); ?>
                            <input type="text" name="username" class="form-control" placeholder="Username" required="" autofocus="">
                            <input type="password" name="password" class="form-control" placeholder="Password" required="">
                            <button class="btn btn-lg btn-primary btn-block" type="submit">
                                 Sign In
                            </button>
                    <p>or</p>
                        </form>
<!--                    Sign Up modal-->
                        <?php echo form_open('user_authentication/new_user_registration', array('class'=>'form-signin')); ?>
                        <button type="button" class="btn btn-lg btn-primary btn-block" data-toggle="modal" data-target=".bs-example-modal-md">Sign Up</button>
                        <div class="modal fade bs-example-modal-md" tabindex="-1" role="dialog" aria-labelledby="myMiddleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-md">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h3 class="modal-title"><font color='#337ab7'>Registration</font></h3>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-xs-6 col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" name="first_name" id="first_name" class="form-control input-md"  placeholder="First Name">
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" name="last_name" id="last_name" class="form-control input-md" placeholder="Last Name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="username" id="username" class="form-control input-md" placeholder="Create username">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" name="email_value" id="email" class="form-control input-md" placeholder="Email Address">
                                            </div>

                                            <div class="row">
                                                <div class="col-xs-6 col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <input type="password" name="password" id="password" class="form-control input-md" placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-md" placeholder="Confirm Password">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
<!--                    				--><?php
//                    				 	echo form_open('user_authentication/user_login_process');
//                    					echo "<div class='error_msg'>";
//                    					if (isset($error_message)) {
//                    						echo $error_message;
//                    					}
//                    					echo validation_errors();
//                    					echo "</div>";
//                    					echo form_label('Username:');
//                    					echo form_input('username');
//                                        echo "<br/>";
//                    					echo form_label('Password:');
//                    					echo form_password('password');
//                    					echo "<br/>";
//                    					echo form_submit('submit', 'Login');
//                    					echo form_close();
//                    				?>
                    <a href="#about" class="btn btn-circle page-scroll">
                        <i class="fa fa-angle-double-down animated"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- About Section -->
<section id="about" class="container content-section text-center">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <h2>About SocialPlaza</h2>
            <p>SocialPlaza is web app that provides the amazing opportunity to post to your favourite social website such as <a href="http://facebook.com">facebook</a>, <a href="http://twitter.com">twitter</a> and etc.</p>
            <p>An easy way to entertain your followers just with one button and not only that!</p>
            <p>You can still see your feeds from the other social website.</p>
        </div>
    </div>
</section>

<!-- Download Section -->
<section id="download" class="content-section text-center">
    <div class="download-section">
        <div class="container">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Download Grayscale</h2>
                <p>You can download Grayscale for free on the preview page at Start Bootstrap.</p>
                <a href="http://startbootstrap.com/template-overviews/grayscale/" class="btn btn-default btn-lg">Visit Download Page</a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="container content-section text-center">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <h2>Contact SocialPlaza's developers</h2>
            <p>Feel free to email us if you have troubles login or you have questions.</p>
            <p>We works for our users!</p>
            </br>
            <p><a href="mailto:admin@socialplaza.info">admin@socialplaza.info</a></p>
            </br>
            </br>
            <ul class="list-inline banner-social-buttons">
                <li>
                    <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                </li>
                <li>
                    <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                </li>
                <li>
                    <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                </li>
            </ul>
        </div>
    </div>
</section>
<hr>
<!-- Map Section -->
<!--<div id="map"></div>-->

<!-- Footer -->
<footer>
    <div class="container text-center">
        <p>Copyright &copy; SocialPlaza 2015</p>
    </div>
</footer>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="<?php echo base_url();?>js/jquery.easing.min.js"></script>

<!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
<script type="<?php echo base_url();?>text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url();?>js/grayscale.js"></script>

</body>

</html>

