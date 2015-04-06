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

    <script type="text/javascript">

        /***********************************************
         * Dynamic Ajax Content- © Dynamic Drive DHTML code library (www.dynamicdrive.com)
         * This notice MUST stay intact for legal use
         * Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
         ***********************************************/

        var bustcachevar=1 //bust potential caching of external pages after initial request? (1=yes, 0=no)
        var loadedobjects=""
        var rootdomain="http://"+window.location.hostname
        var bustcacheparameter=""

        function ajaxpage(url, containerid){
            var page_request = false
            if (window.XMLHttpRequest) // if Mozilla, Safari etc
                page_request = new XMLHttpRequest()
            else if (window.ActiveXObject){ // if IE
                try {
                    page_request = new ActiveXObject("Msxml2.XMLHTTP")
                }
                catch (e){
                    try{
                        page_request = new ActiveXObject("Microsoft.XMLHTTP")
                    }
                    catch (e){}
                }
            }
            else
                return false
            page_request.onreadystatechange=function(){
                loadpage(page_request, containerid)
            }
            if (bustcachevar) //if bust caching of external page
                bustcacheparameter=(url.indexOf("?")!=-1)? "&"+new Date().getTime() : "?"+new Date().getTime()
            page_request.open('GET', url+bustcacheparameter, true)
            page_request.send(null)
        }

        function loadpage(page_request, containerid){
            if (page_request.readyState == 4 && (page_request.status==200 || window.location.href.indexOf("http")==-1))
                document.getElementById(containerid).innerHTML=page_request.responseText
        }

        function loadobjs(){
            if (!document.getElementById)
                return
            for (i=0; i<arguments.length; i++){
                var file=arguments[i]
                var fileref=""
                if (loadedobjects.indexOf(file)==-1){ //Check to see if this object has not already been added to page before proceeding
                    if (file.indexOf(".js")!=-1){ //If object is a js file
                        fileref=document.createElement('script')
                        fileref.setAttribute("type","text/javascript");
                        fileref.setAttribute("src", file);
                    }
                    else if (file.indexOf(".css")!=-1){ //If object is a css file
                        fileref=document.createElement("link")
                        fileref.setAttribute("rel", "stylesheet");
                        fileref.setAttribute("type", "text/css");
                        fileref.setAttribute("href", file);
                    }
                }
                if (fileref!=""){
                    document.getElementsByTagName("head").item(0).appendChild(fileref)
                    loadedobjects+=file+" " //Remember this object as being already added to page
                }
            }
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

    <div id="wrapper" class="active">
<!-- Sidebar -->
        <div id="sidebar-wrapper">
            <nav id="spy">
                <ul class="sidebar-nav nav">
                   <div id = "textbox">
                       <textarea type="textarea" name="message" placeholder="What do you want to post?" class="post-box"></textarea>
                   </div>
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
                                <input type="checkbox" name="facebook" id="checkbox1" />
                                <label for="checkbox1">Facebook</label>
                            </div>
                            <div class="funkyradio-primary">
                                <input type="checkbox" name="twitter" id="checkbox2" />
                                <label for="checkbox2">Twitter</label>
                            </div>
                            <div class="funkyradio-success">
                                <input type="checkbox" name="checkbox" id="checkbox3"/>
                                <label for="checkbox3">LinkedIn</label>
                            </div>
                        </div>
                    </div>
                </ul>
            </nav>
        </div>
        <div class="content-header">
            <h1 id="home">
                <a id="menu-toggle" href="#" class="glyphicon glyphicon-align-justify btn-menu toggle">
                   <i class="fa fa-bars"></i>
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
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->

                            <!-- End Carousel Inner -->

                        </div>

                        <legend id="anch1"><a href="<?php echo base_url();?>facebook">Facebook</a></legend>
                            <a href="javascript:ajaxpage('http://localhost/ci/facebook', 'contentarea');">Open Facebook Feed</a>
                        <div id="contentarea"></div>

                    </div>
                    <div class="col-md-12 well">
                        <legend id="anch2"><a href="<?php echo base_url();?>twitter">Twitter</a></legend>
                        <a href="javascript:ajaxpage('http://localhost/ci/twitter', 'contentarea');">  Open Twitter Feed</a>
                    </div>
                    <div class="col-md-12 well">
                        <legend id="anch3"><a href="<?php echo base_url();?>instagram">Instagram</a></legend>
                        <a href="javascript:ajaxpage('http://localhost/ci/instagram', 'contentarea');">  Open Instagram Feed</a>
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
<!--                <a href="--><?php //echo base_url();?><!--emails"><img class="icon" src="--><?php //echo base_url();?><!--img/email.png"/></a>-->
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