﻿<?php
$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>
    <!DOCTYPE html>
    <html>
    <!-- [if IE 8]>			<html class="ie ie8"> <![endif]-->
    <!-- [if IE 9]>			<html class="ie ie9"> <![endif]-->
    <!-- [if gt IE 9]><html> <!-- <![endif] -->

    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta content="HTML5 Template" name="keywords" />
        <meta content="" name="description">
        <meta content="" name="author">
        <title>Darna - Responsive Multipurpose Construction Template</title>
        <!-- Mobile Metas -->
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <!-- Favicon -->
        <link href="images/favicon.ico" rel="shortcut icon">
        <!-- font-awesome -->
        <link href="css/font-awesome/css/font-awesome.css" media="screen" rel="stylesheet" type="text/css">
        <!-- bootstrap -->
        <link href="css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css">
        <!-- flaticon -->
        <link href="css/flaticon/css/flaticon.css" media="screen" rel="stylesheet" type="text/css">
        <!-- owl-carousel -->
        <link href="css/owl.carousel.css" media="screen" rel="stylesheet" type="text/css">
        <link href="css/owl.theme.css" media="screen" rel="stylesheet" type="text/css">
        <!-- sidebar on small screens -->
        <link href="css/easy-sidebar.css" media="screen" rel="stylesheet" type="text/css">
        <!-- prettyPhoto -->
        <link href="js/pp/css/prettyPhoto.css" media="screen" rel="stylesheet" type="text/css">
        <!-- isotope -->
        <link href="js/vendors/isotope/isotope.css" media="screen" rel="stylesheet" type="text/css">
        <!-- preloader CSS -->
        <link href="css/spinkit/spinkit.css" media="screen" rel="stylesheet" type="text/css">
        <!-- Main CSS -->
        <link href="css/style.css" media="screen" rel="stylesheet" type="text/css">
        <!-- rtl CSS -->
        <link href="css/style-rtl.css" media="screen" rel="stylesheet" type="text/css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!-- [if lt IE 9]>
         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
         <![endif]-->
    </head>

    <body>
        <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
         PRELOADER STARTS
         -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
        <div id="preloader">
            <div id="status">
                <div class="spinner"> </div>
            </div>
        </div>
        <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
         PRELOADER END
         -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
        <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
         TOPBAR START
         -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                  TOPBAR INFO START
                  -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                    <div class="col-md-6 tb-left">
                        <ul class="list-inline text-uppercase">
                            <li><i class="fa fa-phone"></i>Call Us Now 0100 843 1112</li>
                            <li><i class="fa fa-envelope"></i> <a href="mailto:isanka.jcmedia@gmail.com">isanka.jcmedia@gmail.com</a> </li>
                        </ul>
                    </div>
                    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                  TOPBAR INFO END
                  -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                  TOPBAR SOCIAL START
                  -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                    <div class="col-md-6 tb-right">
                        <ul class="top-social list-inline pull-right">
                            <li><a href="#" target="_blank"><i class="fa fa-facebook">
                        </i></a> </li>
                            <li><a href="#" target="_blank"><i class="fa fa-twitter">
                        </i></a> </li>
                            <li>
                                <a href="#" target="_blank"> <i class="fa fa-google-plus"></i></a>
                            </li>
                            <li><a href="#" target="_blank"><i class="fa fa-behance">
                        </i></a> </li>
                        </ul>
                    </div>
                    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                  TOPBAR SOCIAL END
                  -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                </div>
            </div>
        </div>
        <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
         TOPBAR END
         -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
        <header class="header-3">
            <div class="container">
                <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
               NAVIGATION STARTS
               -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                <div class="navbar-header">
                    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                  BURGR MENU STARTS
                  -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                    <button class=" burger-menu easy-sidebar-toggle"></button>
                    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                  BURGR MENU END
                  -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                  LOGO START
                  -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                    <a class="navbar-brand" href="home_1.html"> <img alt="" src="images/logo.png"></a>
                    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                  LOGO END
                  -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                  SHOPCART, SEARCH AND GET QUOTE AREA START
                  -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                    <div class="header-customize">
                        <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                     SEARCH START
                     -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                        <div class="search-button-wrapper header-customize-item">
                            <a class="icon-search-menu" data-search-type="standard" href="#search"> <i class="fa fa-search"></i></a>
                        </div>
                        <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                     SHOPCART START
                     -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                        <div class="shopping-cart-wrapper header-customize-item">
                            <div class="widget_shopping_cart_content">
                                <div class="widget_shopping_cart_icon"> <i class="fa fa-shopping-cart"></i><span>0</span> </div>
                                <div class="cart_list_wrapper ">
                                    <ul class="cart_list product_list_widget ">
                                        <li class="empty">
                                            <h4>An empty cart</h4>
                                            <p>You have no item in your shopping cart</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                     QUOTE AREA START
                     -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                        <div class="get-a-quote-wrapper header-customize-item">
                            <a class="get-a-quote-button" href="#quote"> <i class="fa fa-envelope"></i><span>Get a quote</span></a>
                        </div>
                    </div>
                    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                  SHOPCART, SEARCH AND GET QUOTE AREA END
                  -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                </div>
            </div>
            <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
            MENU START
            -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
            <nav class="navbar navbar-default">
                <div class="container">
                    <div id="navbar" class="navbar-collapse ">
                        <ul class="nav navbar-nav navbar-left ">
                            <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                        MENU HOME START
                        -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                            <li class="dropdown active"> <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                        home<span class="x-caret"></span></a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li class="active"><a href="home_1.html">Home 1</a></li>
                                    <li><a href="home_2.html">Home 2</a></li>
                                    <li><a href="home_3.html">Home 3</a></li>
                                    <li><a href="home_4.html">Home 4</a></li>
                                    <li><a href="home_5.html">Home 5</a></li>
                                </ul>
                            </li>
                            <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                        MENU HOME END
                        -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                            <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                        MENU PAGES START
                        -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                            <li class="dropdown"> <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                        Pages<span class="x-caret"></span></a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="countdown.html">Coming Soon</a></li>
                                    <li><a href="404.html">404 Error Page</a></li>
                                </ul>
                            </li>
                            <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                        MENU HOME END
                        -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                            <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                        MENU Projects START
                        -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                            <li class="dropdown"> <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                        Projects<span class="x-caret"></span></a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a href="projects_full_4col.html">Projects 4 columns fullwidth</a></li>
                                    <li><a href="projects_grid_4col.html">Projects 4 
                              column padding</a> </li>
                                    <li><a href="projects_full_3col.html">Project 3 
                              columns fullwidth</a> </li>
                                    <li><a href="projects_grid_3col.html">Projects 3 
                              column padding</a> </li>
                                    <li><a href="project_details.html">Single project</a></li>
                                </ul>
                            </li>
                            <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                        MENU Projects END
                        -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                            <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                        MENU SHOP START
                        -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                            <li class="dropdown "> <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                        Shop <span class="x-caret"></span></a>
                                <ul class="dropdown-menu  dropdown-menu-left">
                                    <li><a href="shop.html">shop</a></li>
                                    <li><a href="shop_item.html">Shop Single Page</a></li>
                                    <li><a href="checkout.html">Shop Checkout</a></li>
                                    <li><a href="shopcart.html">Shop Cart</a></li>
                                </ul>
                            </li>
                            <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                        MENU SHOP END
                        -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                            <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                        MENU Blog START
                        -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                            <li class="dropdown"> <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                        Blog<span class="x-caret"></span></a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a href="blog_left_side_bar.html">Left Sidebar</a></li>
                                    <li><a href="blog_left_side_bar.html">Right Sidebar</a></li>
                                    <li><a href="blog_fullwidth.html">Full Width</a></li>
                                </ul>
                            </li>
                            <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                        MENU Blog END
                        -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                            <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                        MENU ShortCodes START
                        -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                            <li class="dropdown"> <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                        ShortCodes<span class="x-caret"></span></a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a href="element_post.html">Post</a></li>
                                    <li><a href="element_team.html">Our Team</a></li>
                                    <li><a href="element_testimonials.html">Testimonials</a></li>
                                    <li><a href="element_process.html">Process</a></li>
                                    <li><a href="element_feature.html">Feature</a></li>
                                    <li><a href="element_button.html">Buttons</a></li>
                                    <li><a href="element_portfolio.html">Portfolio</a></li>
                                    <li><a href="element_counters.html">Counter</a></li>
                                </ul>
                            </li>
                            <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                        MENU ShortCodes END
                        -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                        </ul>
                        <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                     MOBILE # START
                     -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                        <div class="main-menu-custom-text"> <i class="fa fa-mobile"></i><span>19699</span> </div>
                        <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
                     MOBILE # START
                     -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
                    </div>
                </div>
            </nav>
            <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
            NAVIGATION END
            -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
        </header>
        <div class="page-head overlay-wrap">
            <div class="overlay"></div>
            <div class="container text-uppercase">
                <h1>Get in touch</h1>
                <ul class="bcrumbs">
                    <li><a href="#"><i class="fa fa-home"></i></a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
        <div class="contact-info">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="text-center"> <i class="fa fa-road"></i>
                            <h3><a href="#">Address</a></h3>
                            <p>422 1st St. Santa Rosa,t CA 94559.
                                <br> USA</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="text-center"> <i class="fa fa-phone"></i>
                            <h3><a href="#">Phone Numbers</a></h3>
                            <p>Newyork 002- 01008431112
                                <br> Miami 0100- 0156 -544</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="text-center"> <i class="fa fa-envelope"></i>
                            <h3><a href="#">e-mail</a></h3>
                            <p>isanka.jcmedia@gmail.com
                                <br> isanka.jcmedia@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d30240.146212064526!2d105.69124828453731!3d18.663175829285684!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1425006180382" style="border: 0px none; pointer-events: none;" frameborder="0" height="540" width="100%"></iframe>
        </div>
        <div class="contact-form">
            <form action="" method="POST" enctype="multipart/form-data" id="contact-form" class="contact-form">
                <input type="hidden" name="action" value="submit">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content-head text-center text-uppercase">
                                <h4>Send a message</h4>
                                <p>Always dedicated and devoted</p>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-md-push-2">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input placeholder="NAME*" type="text" id="Name" name="name"> </div>
                                            <div class="col-md-6">
                                                <input placeholder="EMAIL*" type="email" id="email" name="email"> </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea placeholder="MESSAGE*" rows="10" cols="4" name="message" id="Message"></textarea>
                                                <button type="submit" class="bttn bttn-md btn-block">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <footer class="overlay-wrap">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-push-3 text-center">
                        <div class="footer-logo ">
                            <a href="./index.html"><img src="images/logo-light.png" alt=""></a>
                            <div class="clear"></div>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. ligula eget dolor. Aenean massa. Lanorere for get cum sociis natoque penatibus et magnis.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widget">
                            <h5>Get in touch</h5>
                            <ul class="footer-contact">
                                <li><i class="fa fa-map-marker"></i> 1422 1st St. Santa Rosa,t CA 94559. USA</li>
                                <li><i class="fa fa-envelope-o"></i> isanka.jcmedia@gmail.com</li>
                                <li><i class="fa fa-phone"></i> 002- 01008431112</li>
                                <li><i class="fa fa-globe"></i> <a href="http://themes.g5plus.net/">Visit our themes</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widget">
                            <h5>Business Hours</h5>
                            <ul class="footer-contact">
                                <li>Sunday to Tuesday: 8am to 6pm</li>
                                <li>Saturday: 9am to 4pm</li>
                                <li>Friday: Closed</li>
                                <li>Support Hours is 24/7 every day</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widget">
                            <h5>Twitter Feeds</h5>
                            <div id="tweecool"></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widget">
                            <h5>Mailing List</h5>
                            <div class="footer-newsletter">
                                <p>Enter your email address for our mailing list to keep your self our lastest updated.</p>
                                <form>
                                    <input placeholder="Email Address" required="" type="email">
                                    <button type="submit"><i class="fa fa-paper-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="footer-menu list-inline text-uppercase">
                                <li class="active"><a href="index.html">Home</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <p class="pull-right text-uppercase">&copy; 2015 Darna Construction is proudly powered by <a href="#">Your company</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- -- -- -- -
Search popup start
-- -- -- -- -->
        <div id="search">
            <button class="close" type="button"> <i aria-hidden="true" class="fa fa-times"></i></button>
            <form>
                <input placeholder="Type keyword(s) Here" type="search" value="" />
                <button class="btn btn-primary" type="submit"> <i aria-hidden="true" class="fa fa-search"></i></button>
            </form>
        </div>
        <!-- -- -- -- -
Search popup end
-- -- -- -- -->
        <!-- -- -- -- -
Search quote start
-- -- -- -- -->
        <div id="quote">
            <button class="close" type="button"> <i aria-hidden="true" class="fa fa-times"></i></button>
            <form>
                <textarea placeholder="Type message here"></textarea>
                <button class="btn btn-primary" type="submit"> <i aria-hidden="true" class="fa fa-envelope"></i></button>
            </form>
        </div>
        <!-- -- -- -- -
Search quote end
-- -- -- -- -->
        <!-- -- -- -- -
back-to-top start
-- -- -- -- -->
        <a class="back-to-top" href=".top-bar"> <i aria-hidden="true" class="fa fa-chevron-up"></i></a>
        <!-- -- -- -- -
back-to-top end
-- -- -- -- -->
        <!-- -- -- -- -
overlay div start
-- -- -- -- -->
        <div class="overlay hided"></div>
        <!-- -- -- -- -
overlay div end
-- -- -- -- -->
        <!-- jquery -->
        <script src="js/jquery.js"></script>
        <!-- bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- owl-carousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- twitter -->
        <script src="js/twitter.js"></script>
        <!-- counterup -->
        <script src="js/waypoints.min.js"></script>
        <script src="js/vendors/jquery.counterup.min.js"></script>
        <!-- isotope -->
        <script src="js/vendors/isotope/isotope.pkgd.js"></script>
        <!-- isotope main -->
        <script src="js/vendors/isotope/main.js"></script>
        <!-- cookie js -->
        <script src="js/jquery.cookie.js"></script>
        <!-- pretty Photo -->
        <script src="js/pp/js/jquery.prettyPhoto.js"></script>
        <!-- For demo purposes only styleswitcher ( You may delete this anytime ) -->
        <script src="js/jquery.style.switcher.js"></script>
        <!-- Main Javascript -->
        <!-- For demo purposes only styleswitcher ( You may delete this anytime ) -->
    <script src="js/jquery.style.switcher.js"></script>
<script src="js/main.js"></script>	 
<!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
        !!WARINING THIS IS FOR DEMO ONLY YOU CAN DELETE IT 
         COLOR SWITCHER AND BOXED/WIDE VIEW STARTS
         -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
<link href="css/color.css" rel="stylesheet" id="theme-switch" ><div id="colour-variations" class="sleep"> <a class="option-toggle"><i class="fa fa fa-cog  fa-spin" aria-hidden="true"></i></a> <h3>Preset Colors</h3> <ul> <li><a data-theme="basic " href="javascript: void(0);"></a></li><li><a data-theme="red" href="javascript: void(0);"></a></li><li><a data-theme="turquoise" href="javascript: void(0);"></a></li><li><a data-theme="blue" href="javascript: void(0);"></a></li><li><a data-theme="orange" href="javascript: void(0);"></a></li><li><a data-theme="yellow" href="javascript: void(0);"></a></li><li><a data-theme="pink" href="javascript: void(0);"></a></li><li>
                <a data-theme="purple" href="javascript: void(0);"></a>
            </li>
        </ul>
        <!-- <h3>Preset Colors</h3>
        <ul>
            <li> <a data-theme="purple" href="javascript: void(0);">Boxed</a></li>
            <li> <a data-theme="purple" href="javascript: void(0);">Full Width</a></li>
        </ul>-->
        <h3>Direction</h3>
        <ul>
            <li> <a data-theme="style-rtl" href="javascript: void(0);">RTL</a></li>
            <li> <a data-theme="ltr" href="javascript: void(0);">LTR</a></li>
        </ul>
    </div><style>#colour-variations li a[data-theme=style-rtl],#colour-variations li a[data-theme=ltr]{    border: 1px solid #ccc;
    padding: 10px;
    width: auto;
    height: auto;}#colour-variations{padding: 10px; -webkit-transition: 0.5s; -o-transition: 0.5s; transition: 0.5s; width: 140px; position: fixed; left: 0; top: 160px; z-index: 999999; background: #fff; border-radius: 4px; border-top-right-radius: 4px; border-bottom-right-radius: 4px; -webkit-box-shadow: 0 0 9px 0 rgba(0,0,0,.1); -moz-box-shadow: 0 0 9px 0 rgba(0,0,0,.1); -ms-box-shadow: 0 0 9px 0 rgba(0,0,0,.1); box-shadow: 0 0 9px 0 rgba(0,0,0,.1);}#colour-variations.sleep{margin-left: -140px;}#colour-variations h3{text-align: center;; font-size: 11px; letter-spacing: 2px; text-transform: uppercase; color: #777; margin: 0 0 10px 0; padding: 0;;}#colour-variations ul, #colour-variations ul li{padding: 0; margin: 0;}#colour-variations ul{margin-bottom: 20px; float: left;}#colour-variations li{list-style: none; display: inline;}#colour-variations li a{width: 20px; height: 20px; position: relative; float: left; margin: 5px;}#colour-variations li a[data-theme=style]{background: #fff; border: 1px solid #ccc}#colour-variations li a[data-theme=red]{background: #FA5555;}#colour-variations li a[data-theme=turquoise]{background: #27E1CE;}#colour-variations li a[data-theme=blue]{background: #2772DB;}#colour-variations li a[data-theme=orange]{background: #FF7844;}#colour-variations li a[data-theme=yellow]{background: #FCDA05;}#colour-variations li a[data-theme=pink]{background: rgb(251, 137, 155);}#colour-variations li a[data-theme=purple]{background: #7045FF;}#colour-variations a[data-layout=boxed], #colour-variations a[data-layout=wide]{padding: 2px 0; width: 48%; border: 1px solid #ededed; text-align: center; color: #777; display: block;}#colour-variations a[data-layout=boxed]:hover, #colour-variations a[data-layout=wide]:hover{border: 1px solid #777;}#colour-variations a[data-layout=boxed]{float: left;}#colour-variations a[data-layout=wide]{float: right;}.option-toggle{position: absolute; right: 0; top: 0; margin-top: 5px; margin-right: -30px; width: 30px; height: 30px; background: #8dc63f; text-align: center; border-top-right-radius: 4px; border-bottom-right-radius: 4px; color: #fff; cursor: pointer; -webkit-box-shadow: 0 0 9px 0 rgba(0,0,0,.1); -moz-box-shadow: 0 0 9px 0 rgba(0,0,0,.1); -ms-box-shadow: 0 0 9px 0 rgba(0,0,0,.1); box-shadow: 0 0 9px 0 rgba(0,0,0,.1);}.option-toggle i{top: 5px; position: relative; font-size: 20px;}.option-toggle:hover, .option-toggle:focus, .option-toggle:active{color: #fff; text-decoration: none; outline: none;}</style>
<script>jQuery(function(){jQuery('#colour-variations ul').styleSwitcher({defaultThemeId: 'theme-switch', hasPreview: false, cookie:{expires: 30, isManagingLoad: true}}); jQuery('.option-toggle').click(function(){jQuery('#colour-variations').toggleClass('sleep');}); if ( jQuery.cookie('layoutCookie') !='' ){jQuery('body').addClass(jQuery.cookie('layoutCookie'));}});</script>
    <!-- -- -- - -- -- -- - -- -- -- - -- -- -- -- -
        !!WARINING THIS IS FOR DEMO ONLY YOU CAN DELETE IT 
         COLOR SWITCHER AND BOXED/WIDE VIEW END
    -- -- -- - -- -- -- - -- -- -- - -- -- -- -- -->
    </body>

    </html>
    <?php
    } 
else                /* send the submitted data */
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
        	echo "<script>javascript: alert('You left important field empty please check')></script>";


	    }
    else{		
	    $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Messege";
		mail("isanka.jcmedia@gmail.com, $subject, $message, $from);
echo "<script>javascript: alert('Well done!')></script>";	    }
    }  
?>