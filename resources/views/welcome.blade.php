<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agency - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Custom Fonts -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
        <![endif]-->

    </head>

    <body id="page-top" class="index">

        <!-- Navigation -->
        <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top">Football Test</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#features">Features</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#screenshots">Screenshots</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#testimonials">Testimonials</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact">Contact</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="{{ url('main-test') }}">Try it now</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <!-- Header -->
        <header>
            <div class="container">
                <div class="intro-text">
                    <div class="intro-lead-in">Football Test</div>
                    <div class="intro-heading">Data-driven <br> football innovation</div>
                    <a href="#features" class="page-scroll btn btn-xl">Tell Me More</a>
                </div>
            </div>
        </header>

        <!-- Services Section -->
        <section id="features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Features</h2>
                        <h3 class="section-subheading text-muted">We believe that better players result in better teams and better outcomes</h3>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-tasks fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="service-heading">Test</h4>
                        <p class="text-muted"> We developed a test with professionals to measure the physical, mental and technical abilities of your players.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-tachometer fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="service-heading">Dashboard</h4>
                        <p class="text-muted">Our dashboard will provide you with objective insights of over 40 different skills and abilities.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-trophy fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="service-heading">Custom training program</h4>
                        <p class="text-muted">Based on our FootballTest algorithm we generate custom training programs so your players will reach their potential.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Screenshot Grid Section -->
        <section id="screenshots" class="bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Screenshots</h2>
                        <h3 class="section-subheading text-muted">Here are a few screenshots of our application</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <span class="portfolio-link">
                            <img src="img/portfolio/1.png" class="img-responsive" alt="">
                        </span>
                        <div class="portfolio-caption">
                            <h4>Round Icons</h4>
                            <p class="text-muted">Graphic Design</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <span class="portfolio-link">
                            <img src="img/portfolio/2.png" class="img-responsive" alt="">
                        </span>
                        <div class="portfolio-caption">
                            <h4>Startup Framework</h4>
                            <p class="text-muted">Website Design</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <span class="portfolio-link">
                            <img src="img/portfolio/3.png" class="img-responsive" alt="">
                        </span>
                        <div class="portfolio-caption">
                            <h4>Treehouse</h4>
                            <p class="text-muted">Website Design</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Testimonials</h2>
                        <h3 class="section-subheading text-muted">Still not convinced ? They are already using it !</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-5">
                        <strong>Jean-Pierre Collet, trainer at Paris FC</strong>
                        <p>
                            Our players are improving tremendously, three players will soon make their debut in the first team 
                        </p>
                    </div>
                    <div class="col-lg-5">
                        <strong>Jean-Baptiste Poivre, Amiens SC</strong>
                        <p>
                            We discovered that one of our players was playing on the wrong position and now he became the star player in the youth league
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <!-- Clients Aside -->
        <aside class="clients">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <a href="#">
                            <img src="http://footballdatabase.com/logos/club/80px/338.png" class="img-responsive img-centered greyPicture" alt="">
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="#">
                            <img src="http://footballdatabase.com/logos/club/80px/140.png" class="img-responsive img-centered greyPicture" alt="">
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="#">
                            <img src="http://footballdatabase.com/logos/club/80px/39.png" class="img-responsive img-centered greyPicture" alt="">
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="#">
                            <img src="http://footballdatabase.com/logos/club/80px/414.png" class="img-responsive img-centered greyPicture" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Contact Section -->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Contact Us</h2>
                        <h3 class="section-subheading text-muted">Feel free to contact us if you want more informations !</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form name="sentMessage" id="contactForm" novalidate>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <button type="submit" class="btn btn-xl">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <span class="copyright">Copyright &copy; FootballTest.nl 2017</span>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <img height="26px" style="margin-top: 10px;" src="https://www.w3.org/Icons/WWW/w3c_home_nb">
                    </div>
                </div>
            </div>
        </footer>




        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- Custom Javascript -->
        <script src="js/front.js"></script>

        <!-- Plugin JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>


    </body>

    </html>
