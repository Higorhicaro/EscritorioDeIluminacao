<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Escritório de Iluminação</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/pe-icons.css" rel="stylesheet">
    <link href="assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="assets/js/jquery.js"></script>
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="assets/images/ico/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="assets/images/ico/apple-touch-icon-57x57.png">

    <script type="text/javascript">
        jQuery(document).ready(function($){
            'use strict';
            jQuery('body').backstretch([
                "assets/images/bg/bg1.jpg",
                "assets/images/bg/bg2.jpg",
                "assets/images/bg/bg3.jpg"
            ], {duration: 5000, fade: 500, centeredY: true });

            $("#mapwrapper").gMap({ controls: false,
                scrollwheel: false,
                markers: [{
                    latitude:40.7566,
                    longitude: -73.9863,
                    icon: { image: "assets/images/marker.png",
                        iconsize: [44,44],
                        iconanchor: [12,46],
                        infowindowanchor: [12, 0] } }],
                icon: {
                    image: "assets/images/marker.png",
                    iconsize: [26, 46],
                    iconanchor: [12, 46],
                    infowindowanchor: [12, 0] },
                latitude:40.7566,
                longitude: -73.9863,
                zoom: 14 });
        });
    </script>
</head><!--/head-->
<body>
<div id="preloader"></div>
<header class="navbar navbar-inverse navbar-fixed-top " role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="index.html"><h1><span class="pe-7s-gleam bounce-in"></span> DEVWEB</h1></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/">Home</a></li>
                <li><a href="about-us.html">Empresa</a></li>
                <li><a href="services.html">Projetos</a></li>
                <li><a href="/portfolio">Produtos</a></li>
                <li><a href="contact-us.html">Contato</a></li>
                <li><span class="search-trigger"><i class="fa fa-search"></i></span></li>
            </ul>
        </div>
    </div>
</header><!--/header-->

<section id="main-slider" class="no-margin">
    <div class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content center centered">
                                <span class="home-icon pe-7s-gleam bounce-in"></span>
                                <h2 class="boxed animation animated-item-1 fade-down">Escritório de Iluminação</h2><br>
                                <p class="boxed animation animated-item-2 fade-up">Soluções em iluminação para projetos urbandos e residenciais</p>
                                <br>
                                <a class="btn btn-md animation bounce-in" href="#services">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
</section><!--/#main-slider-->

<div id="content-wrapper">
    <section id="services" class="white">
        <div class="container">
            <div class="gap"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="center gap fade-down section-heading">
                        <h2 class="main-title">Stuff We Do</h2>
                        <hr>
                        <p>Of an or game gate west face shed. ﻿no great but music too old found arose.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="service-block">
                        <div class="pull-left bounce-in">
                            <i class="fa fa-camera fa fa-md"></i>
                        </div>
                        <div class="media-body fade-up">
                            <h3 class="media-heading">Photography</h3>
                            <p>Nay middleton him admitting consulted and behaviour son household. Recurred advanced he oh together entrance speedily suitable. Ready tried gay state fat could boy its among shall.</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="service-block">
                        <div class="pull-left bounce-in">
                            <i class="fa fa-thumbs-o-up fa fa-md"></i>
                        </div>
                        <div class="media-body fade-up">
                            <h3 class="media-heading">Marketing</h3>
                            <p>Unfeeling agreeable suffering it on smallness newspaper be. So come must time no as. Do on unpleasing possession as of unreserved.</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="service-block">
                        <div class="pull-left bounce-in">
                            <i class="fa fa-ticket fa fa-md"></i>
                        </div>
                        <div class="media-body fade-up">
                            <h3 class="media-heading">Event Management</h3>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
            </div><!--/.row-->
            <div class="gap"></div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="service-block">
                        <div class="pull-left bounce-in">
                            <i class="fa fa-star fa fa-md"></i>
                        </div>
                        <div class="media-body fade-up">
                            <h3 class="media-heading">Star Gazing</h3>
                            <p>Yet joy exquisite put sometimes enjoyment perpetual now. Behind lovers eat having length horses vanity say had its</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="service-block">
                        <div class="pull-left bounce-in">
                            <i class="fa fa-cogs fa fa-md"></i>
                        </div>
                        <div class="media-body fade-up">
                            <h3 class="media-heading">Software Support</h3>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="service-block">
                        <div class="pull-left bounce-in">
                            <i class="fa fa-google-plus fa fa-md"></i>
                        </div>
                        <div class="media-body fade-up">
                            <h3 class="media-heading">SEO Services</h3>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
            </div><!--/.row-->
        </div>
        <div class="gap"></div>
    </section>

    <section id="about-us" class="white">
        <div class="container">
            <div class="gap"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="center gap fade-down section-heading">
                        <h2 class="main-title">A Little About Us</h2>
                        <hr>
                        <p>Of an or game gate west face shed. ﻿no great but music too old found arose.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1 fade-up">
                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>

                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
                </div>
                <div class="col-md-4 fade-up">

                </div>
            </div>

            <div class="gap"></div>
            <div class="center gap fade-down section-heading">
                <h2 class="main-title">Representantes</h2>
                <hr>
                <p>Of an or game gate west face shed. ﻿no great but music too old found arose.</p>
            </div>
            <div class="gap"></div>

            <div id="meet-the-team" class="row">
                @foreach($representantes as $p)
                <div class="col-md-3 col-xs-6">
                    <div class="center team-member">
                        <div class="team-image">
                            <img class="img-responsive img-thumbnail bounce-in" src="assets/images/representantes/{{ $p->foto }}" alt="">
                            <div class="overlay">
                                <a class="preview btn btn-outlined btn-primary" href="assets/images/representantes/{{ $p->foto }}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="team-content fade-up">
                            <h5>{{ $p->nome }}<small class="role muted">{{ $p->cidade }} / {{ $p->estado }}</small></h5>
                            <p class="text-left"><i class="fa fa-phone"></i> {{ $p->telefone }}</p>
                            <p class="text-left"><i class="fa fa-envelope"></i> {{ $p->email }}</p>
                            <a class="btn btn-social btn-facebook" href="#"><i class="fa fa-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="fa fa-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="fa fa-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div><!--/#meet-the-team-->
            <div class="gap"></div>
            <div class="gap"></div>
        </div>
    </section>

    <section id="stats" class="divider-section">
        <div class="gap"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <div class="center bounce-in">
                        <span class="stat-icon"><span class="pe-7s-timer bounce-in"></span></span>
                        <h1><span class="counter">246000</span></h1>
                        <h3>HOURS SAVED</h3>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="center bounce-in">
                        <span class="stat-icon"><span class="pe-7s-light bounce-in"></span></span>
                        <h1><span class="counter">16875</span></h1>
                        <h3>FRESH IDEAS</h3>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="center bounce-in">
                        <span class="stat-icon"><span class="pe-7s-graph1 bounce-in"></span></span>
                        <h1><span class="counter">99999999</span></h1>
                        <h3>HUGE PROFIT</h3>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="center bounce-in">
                        <span class="stat-icon"><span class="pe-7s-box2 bounce-in"></span></span>
                        <h1><span class="counter">54875</span></h1>
                        <h3>THINGS IN BOXES</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="gap"></div>
    </section>

    <section id="portfolio" class="white">
        <div class="container">
            <div class="gap"></div>
            <div class="center gap fade-down section-heading">
                <h2 class="main-title">Examples Of Excellence</h2>
                <hr>
                <p>She evil face fine calm have now. Separate screened he outweigh of distance landlord.</p>
            </div>
            <ul class="portfolio-filter fade-down center">
                <li><a class="btn btn-outlined btn-primary active" href="#" data-filter="*">All</a></li>
                <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".apps">Apps</a></li>
                <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".nature">Nature</a></li>
                <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".design">Design</a></li>
            </ul><!--/#portfolio-filter-->

            <ul class="portfolio-items col-3 isotope fade-up">
                <li class="portfolio-item apps isotope-item">
                    <div class="item-inner">
                        <img src="assets/images/portfolio/folio01.jpg" alt="">
                        <h5>Portfolio Project</h5>
                        <div class="overlay">
                            <a class="preview btn btn-outlined btn-primary" href="assets/images/portfolio/folio01.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </li><!--/.portfolio-item-->
                <li class="portfolio-item joomla nature isotope-item">
                    <div class="item-inner">
                        <img src="assets/images/portfolio/folio02.jpg" alt="">
                        <h5>Portfolio Project</h5>
                        <div class="overlay">
                            <a class="preview btn btn-outlined btn-primary" href="assets/images/portfolio/folio02.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </li><!--/.portfolio-item-->
                <li class="portfolio-item bootstrap design isotope-item">
                    <div class="item-inner">
                        <img src="assets/images/portfolio/folio03.jpg" alt="">
                        <h5>Portfolio Project</h5>
                        <div class="overlay">
                            <a class="preview btn btn-outlined btn-primary" href="assets/images/portfolio/folio03.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </li><!--/.portfolio-item-->
                <li class="portfolio-item joomla design apps isotope-item">
                    <div class="item-inner">
                        <img src="assets/images/portfolio/folio04.jpg" alt="">
                        <h5>Portfolio Project</h5>
                        <div class="overlay">
                            <a class="preview btn btn-outlined btn-primary" href="assets/images/portfolio/folio04.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </li><!--/.portfolio-item-->
                <li class="portfolio-item joomla apps isotope-item">
                    <div class="item-inner">
                        <img src="assets/images/portfolio/folio05.jpg" alt="">
                        <h5>Portfolio Project</h5>
                        <div class="overlay">
                            <a class="preview btn btn-outlined btn-primary" href="assets/images/portfolio/folio05.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </li><!--/.portfolio-item-->
                <li class="portfolio-item wordpress nature isotope-item">
                    <div class="item-inner">
                        <img src="assets/images/portfolio/folio06.jpg" alt="">
                        <h5>Portfolio Project</h5>
                        <div class="overlay">
                            <a class="preview btn btn-outlined btn-primary" href="assets/images/portfolio/folio06.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </li><!--/.portfolio-item-->
                <li class="portfolio-item joomla design apps isotope-item">
                    <div class="item-inner">
                        <img src="assets/images/portfolio/folio07.jpg" alt="">
                        <h5>Portfolio Project</h5>
                        <div class="overlay">
                            <a class="preview btn btn-outlined btn-primary" href="assets/images/portfolio/folio07.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </li><!--/.portfolio-item-->
                <li class="portfolio-item joomla nature isotope-item">
                    <div class="item-inner">
                        <img src="assets/images/portfolio/folio08.jpg" alt="">
                        <h5>Portfolio Project</h5>
                        <div class="overlay">
                            <a class="preview btn btn-outlined btn-primary" href="assets/images/portfolio/folio08.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </li><!--/.portfolio-item-->
                <li class="portfolio-item wordpress design isotope-item">
                    <div class="item-inner">
                        <img src="assets/images/portfolio/folio09.jpg" alt="">
                        <h5>Portfolio Project</h5>
                        <div class="overlay">
                            <a class="preview btn btn-outlined btn-primary" href="assets/images/portfolio/folio09.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </li><!--/.portfolio-item-->
            </ul>
        </div>
    </section>




    <section id="contact" class="white">
        <div class="container">
            <div class="gap"></div>
            <div class="center gap fade-down section-heading">
                <h2 class="main-title">Get In Touch</h2>
                <hr>
                <p>Of an or game gate west face shed. ﻿no great but music too old found arose.</p>
            </div>
            <div class="gap"></div>
            <div class="row">
                <div class="col-md-4 fade-up">
                    <h3>Contact Information</h3>
                    <p><span class="icon icon-home"></span>Time Square, New York<br/>
                        <span class="icon icon-phone"></span>+36 65984 405<br/>
                        <span class="icon icon-mobile"></span>+36 65984 405<br/>
                        <span class="icon icon-envelop"></span> <a href="#">email@infinityteam.com</a> <br/>
                        <span class="icon icon-twitter"></span> <a href="#">@infinityteam.com</a> <br/>
                        <span class="icon icon-facebook"></span> <a href="#">Infinity Agency</a> <br/>
                    </p>
                </div><!-- col -->

                <div class="col-md-8 fade-up">
                    <h3>Drop Us A Message</h3>
                    <br>
                    <br>
                    <div id="message"></div>
                    <form method="post" action="sendemail.php" id="contactform">
                        <input type="text" name="name" id="name" placeholder="Name" />
                        <input type="text" name="email" id="email" placeholder="Email" />
                        <input type="text" name="website" id="website" placeholder="Website" />
                        <textarea name="comments" id="comments" placeholder="Comments"></textarea>
                        <input class="btn btn-outlined btn-primary" type="submit" name="submit" value="Submit" />
                    </form>
                </div><!-- col -->
            </div><!-- row -->
            <div class="gap"></div>
        </div>
    </section>
</div>

<div id="footer-wrapper">
    <section id="bottom" class="">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 about-us-widget">
                    <h4>Global Coverage</h4>
                    <p>Was drawing natural fat respect husband. An as noisy an offer drawn blush place. These tried for way joy wrote witty. In mr began music weeks after at begin.</p>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <h4>Company</h4>
                    <div>
                        <ul class="arrow">
                            <li><a href="#">Company Overview</a></li>
                            <li><a href="#">Meet The Team</a></li>
                            <li><a href="#">Our Awesome Partners</a></li>
                            <li><a href="#">Our Services</a></li>
                        </ul>
                    </div>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <h4>Latest Articles</h4>
                    <div>
                        <div class="media">
                            <div class="pull-left">
                                <img class="widget-img" src="assets/images/portfolio/folio01.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">Blog Post A</a></span>
                                <small class="muted">Posted 14 April 2014</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img class="widget-img" src="assets/images/portfolio/folio02.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">Blog Post B</a></span>
                                <small class="muted">Posted 14 April 2014</small>
                            </div>
                        </div>
                    </div>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <h4>Come See Us</h4>
                    <address>
                        <strong>Ace Towers</strong><br>
                        New York Ave,<br>
                        New York, 215648<br>
                        <abbr title="Phone"><i class="fa fa-phone"></i></abbr> 546 840654 05
                    </address>
                </div> <!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer" class="">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    &copy; 2019 Your Site Name. All Rights Reserved. <a href="https://templatemag.com/bootstrap-templates/">Bootstrap templates</a> by TemplateMag.
                </div>
                <div class="col-sm-4">
                    <ul class="pull-right">
                        <li><a id="gototop" class="gototop" href="#"><i class="fa fa-chevron-up"></i></a></li><!--#gototop-->
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
</div>


<script src="assets/js/plugins.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWDPCiH080dNCTYC-uprmLOn2mt2BMSUk&amp;sensor=true"></script>
<script src="assets/js/init.js"></script>
</body>
</html>
