<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AOE2HD</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!--  CSS -->
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

    <link href="css/myshit.css" rel="stylesheet">

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
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#download">Signup</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>


                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <i class="glyphicon glyphicon-user"></i> Sign In
                        </a>
                        <div class="dropdown-menu form-login stop-propagation" role="menu">
                            <div class="form-group">
                                <label for="exampleInputEmail1">
                                    <i class="glyphicon glyphicon-envelope"></i> Email address
                                </label> 
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">
                                    <i class="glyphicon glyphicon-lock"></i> Password
                                </label> 
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" />
                            </div>
                            <button type="submit" class="btn btn-success btn-block"><i class="glyphicon glyphicon-ok" id="subbutton"></i> Submit</button>
                        </div>
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
                        <h1 class="brand-heading">Sus Pref Mk 2</h1>
                        <p class="intro-text">A innovativeone page Bootstrap theme.<br>Created by AOE2HD</p>
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
                <h2>About Sus Pref Mk 2</h2>
                <p>Sus Pref Mk 2 aims to eliminate the use of reciepts from all stores. By signing up both small and large corperations can easily keep track of business. With a specilized QR code customers can easily view own reciepts <a href="http://startbootstrap.com/template-overviews/grayscale/">the preview page</a>. </p>
                <p>This theme features stock photos by <a href="http://gratisography.com/">Gratisography</a> along with a custom Google Maps skin courtesy of <a href="http://snazzymaps.com/">Snazzy Maps</a>.
            </div>
        </div>
    </section>

<!--     Signup Section -->
    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Sign up for Sus pref Mk 2</h2>
<!--                     <a href="http://startbootstrap.com/template-overviews/grayscale/" class="btn btn-default btn-lg">Signup</a> -->
                </div>
            </div>


            <div class="container">
    <div class="col-lg-12 well">
    <div class="row">
                <form class="sign-up">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <font color="black">Business Name</font>
                                <input type="text" placeholder="Enter Business Name Here.." class="form-control reg-business">
                            </div>
                            <div class="col-sm-6 form-group">
                                <font color="black">Email</font>
                                <input type="text" placeholder="Enter Email Here.." class="form-control reg-email">
                            </div>

                            <div class="col-sm-6 form-group">
                                <font color="black">Password</font>
                                <input type="password" placeholder="Enter Owner Name Here.." class="form-control reg-password">
                            </div>  
                            <div class="col-sm-6 form-group">
                                <font color="black">Confirm Password</font>
                                <input type="password" placeholder="Enter Password Here.." class="form-control reg-passwordc">
                            </div>      
                        </div>
                    </div>

                    <button class="btn btn-default">Submit</button>
                  
                </form> 
                </div>
    </div>
    </div>

        </div>

    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact Sus Pref Mk 2</h2>
                <p>Feel free to email us to provide some feedback on our services, give us suggestions for new feautures, or to just say hello!</p>
                <p><a href="mailto:feedback@sus_pref_mk_2.com">feedback@sus_pref_mk_2.com</a>
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
    <!-- 
    Map Section 
    <div id="map"></div>
     -->

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; Sus Pref Mk 2 2016</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

    <script src="js/index.js"></script>

</body>

</html>
