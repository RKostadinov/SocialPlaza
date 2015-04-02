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

    <title>SocialPlaza</title>

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
                <i class="fa fa-play-circle"></i>  <span class="light">Start</span> Bootstrap
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
                    <h1 class="brand-heading">SocialPlaza</h1>
<!--                    <p class="intro-text">A free, responsive, one page Bootstrap theme.<br>Created by Start Bootstrap.</p>-->
<!--                                    <div id="fullscreen_bg" class="fullscreen_bg"/>-->

<!--                                    <div class="container">-->

                        <?php echo form_open('user_authentication/user_login_process', array('class'=>'form-signin')); ?>
<!--                            <h1 class="form-signin-heading text-muted">Sign In</h1>-->
                            <input type="text" name="username" class="form-control" placeholder="Username" required="" autofocus="">
                            <input type="password" name="password" class="form-control" placeholder="Password" required="">
                            <button class="btn btn-lg btn-primary btn-block" type="submit">
                                 Sign In
                            </button>
                            <p>or</p>
                            <button class="btn btn-lg btn-primary btn-block" formaction="user_authentication/user_registration_show">
                                Sign Up
                            </button>
                        </form>

<!--                                    </div>-->
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
<!--                    				<a href="user_registration_show">SignUp</a>-->
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
            <p>Grayscale is a free Bootstrap 3 theme created by Start Bootstrap. It can be yours right now, simply download the template on <a href="http://startbootstrap.com/template-overviews/grayscale/">the preview page</a>. The theme is open source, and you can use it for any purpose, personal or commercial.</p>
            <p>This theme features stock photos by <a href="http://gratisography.com/">Gratisography</a> along with a custom Google Maps skin courtesy of <a href="http://snazzymaps.com/">Snazzy Maps</a>.</p>
            <p>Grayscale includes full HTML, CSS, and custom JavaScript files along with LESS files for easy customization.</p>
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
            <p>Feel free to email us to provide some feedback on our templates, give us suggestions for new templates and themes, or to just say hello!</p>
            <p><a href="mailto:feedback@startbootstrap.com">feedback@startbootstrap.com</a>
            </p>
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

<!-- Map Section -->
<div id="map"></div>

<!-- Footer -->
<footer>
    <div class="container text-center">
        <p>Copyright &copy; Your Website 2014</p>
    </div>
</footer>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="js/jquery.easing.min.js"></script>

<!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

<!-- Custom Theme JavaScript -->
<script src="js/grayscale.js"></script>

</body>

</html>

