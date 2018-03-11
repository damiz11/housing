<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('house/vendors/css/normalize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('house/vendors/css/grid.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('house/vendors/css/ionicons.min.CSS')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('house/resources/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('house/resources/css/queries.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('house/resources/css/sign_up.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
    <!-- <title>Excellent Houses</title> -->
    <!-- <meta charset="utf-8"> -->
    <title>Property Details</title>
    <!-- Stylesheets -->
    <link href="{{asset('house/details/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('house/details/css/style.css')}}" rel="stylesheet">
    <!-- <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"> -->
    <!-- <link rel="icon" href="images/favicon.ico" type="image/x-icon"> -->
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="{{asset('house/details/css/responsive.css')}}" rel="stylesheet">
</head>

<body>

<header>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            background-color: #fff;
            color: #555;
            font-family: 'Lato', 'Arial', 'sans-serif';
            font-weight: 300;
            font-size: 20px;
            text-rendering: optimizeLegibility;
        }

        .clearfix {
            zoom: 1
        }

        .clearfix:after {
            content: '.';
            clear: both;
            display: block;
            height: 0;
            visibility: hidden;
        }
        /* ......reusable code .......*/

        .row {
            max-width: 1140px;
            margin: 0 auto 0 auto;
            /*  margin: 0 auto; */
            /* both codes with actually do the same thing */
        }

        section {
            padding: 80px 0;
        }

        .box {
            padding: 1%;
        }
        /* ......header...... */

        header {
            background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(img/banner.jpg);
            background-size: cover;
            background-position: center;
            height: 100vh;
            background-attachment: fixed;
        }

        .hero-text-box {
            position: absolute;
            width: 1140px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .fields {
            display: inline-block;
            position: relative;
            margin: 10px;
            width: 700px;
            background: rgba(19, 22, 25, 0.40);
        }

        .logo {
            height: 100px;
            width: auto;
            float: left;
            margin-top: 20px;
        }

        .main-nav {
            float: right;
            list-style: none;
            margin-top: 55px;
        }

        .main-nav li {
            display: inline-block;
            margin-left: 40px;
        }

        .main-nav li a:link,
        .main-nav li a:visited {
            padding: 8px 0;
            color: #fff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 90%;
            border-bottom: 2px solid transparent;
            transition: border-bottom 0.2s;
            /* letter-spacing: 1px; */
            /* word-spacing: 4px; */
        }

        .main-nav li a:hover,
        .main-nav li a:active {
            border-bottom: 2px solid#e67e22;
        }
        /* sticky  navi */

        .sticky {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.98);
        }

        .sticky .main-nav li a:link,
        .sticky .main-nav li a:visited {
            padding: 8px 0;
            color: #555;
        }

        .sticky .logo-black {
            display: block;
        }

        .sticky-features .long-copy {
            margin-bottom: 30px;
        }

        header {
            background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(img/banner.jpg);
            background-size: cover;
            background-position: center;
            height: 100vh;
            background-attachment: fixed;
        }

        .hero-text-box {
            position: absolute;
            width: 1140px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .fields {
            display: inline-block;
            position: relative;
            margin: 10px;
            width: 700px;
            background: rgba(19, 22, 25, 0.40);
        }

        .logo {
            height: 100px;
            width: auto;
            float: left;
            margin-top: 20px;
        }

        .main-nav {
            float: right;
            list-style: none;
            margin-top: 55px;
        }

        .main-nav li {
            display: inline-block;
            margin-left: 40px;
        }

        .main-nav li a:link,
        .main-nav li a:visited {
            padding: 8px 0;
            color: #fff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 90%;
            border-bottom: 2px solid transparent;
            transition: border-bottom 0.2s;
            /* letter-spacing: 1px; */
            /* word-spacing: 4px; */
        }

        .main-nav li a:hover,
        .main-nav li a:active {
            border-bottom: 2px solid#e67e22;
        }

        a:link,
        a:visited {
            color: #e67e22;
            text-decoration: none;
            padding-bottom: 1px;
            border-bottom: 1px solid #e67e22;
            transition: border_bottom 0.2s, color 0.2s;
        }

        a:hover,
        a:active {
            color: #555;
            border-bottom: 1px solid transparent;
        }
    </style>
    <nav class="sticky">
        <div class="row">
            <img src="resources/images/huz1.jpg" alt="huz-tinz" class="logo">
            <ul class="main-nav">
                <li> <a href="index.html"> Home </a> </li>
                <li> <a href="about_us.html"> About_Us </a> </li>
                <li> <a href="accommodation.html"> Accommodation </a> </li>
                <li> <a href="sign_up.html"> Sign_Up</a> </li>
                <li> <a href="log_in.html"> Log_in</a> </li>
            </ul>
        </div>
    </nav>

    <p>
        <!-- <section class="inner-page-banner style-two" style="background-image:url(images/background/bg-page-title.jpg);"> -->
    <div class="auto-container">
        <!-- <h1>Property Details</h1>
        <div class="text">We offer you nothing but the best.</div> -->
    </div>
    </section>


    <!--Sidebar Page-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <!--Property DEtails-->
                    <section class="property-details">
                        <div class="prop-header">
                            <h3>Self_Contain <span class="prop-label">For Rent</span></h3>
                            <div class="info clearfix">
                                <div class="location"><span class="fa fa-map-marker"></span>&ensp; Mayfair.</div>
                            </div>
                        </div>

                        <!--Product Carousel-->
                        <div class="product-carousel-outer">

                            <!--Product image Carousel-->
                            <ul class="prod-image-carousel owl-theme owl-carousel">
                                <li>
                                    <figure class="image">
                                        <a class="lightbox-image option-btn" data-fancybox-group="example-gallery" href="/house/gallery/duplex.jpg" title="Image Title Here"><img src="/house/gallery/duplex.jpg" alt=""></a>
                                    </figure>
                                </li>
                                <li>
                                    <figure class="image">
                                        <a class="lightbox-image option-btn" data-fancybox-group="example-gallery" href="/house/gallery/duplex.jpg" title="Image Title Here"><img src="/house/gallery/duplex.jpg" alt=""></a>
                                    </figure>
                                </li>
                                <li>
                                    <figure class="image">
                                        <a class="lightbox-image option-btn" data-fancybox-group="example-gallery" href="{{asset('/house/gallery/duplex.jpg')}}" title="Image Title Here"><img src="/house/gallery/duplex.jpg" alt=""></a>
                                    </figure>
                                </li>
                                <li>
                                    <figure class="image">
                                        <a class="lightbox-image option-btn" data-fancybox-group="example-gallery" href="/house/gallery/duplex.jpg" title="Image Title Here"><img src="/house/gallery/duplex.jpg" alt=""></a>
                                    </figure>
                                </li>
                                <li>
                                    <figure class="image">
                                        <a class="lightbox-image option-btn" data-fancybox-group="example-gallery" href="/house/gallery/duplex.jpg" title="Image Title Here"><img src="/house/gallery/duplex.jpg" alt=""></a>
                                    </figure>
                                </li>
                                <li>
                                    <figure class="image">
                                        <a class="lightbox-image option-btn" data-fancybox-group="example-gallery" href="/house/gallery/duplex.jpg" title="Image Title Here"><img src="/house/gallery/duplex.jpg" alt=""></a>
                                    </figure>
                                </li>
                                <li>
                                    <figure class="image">
                                        <a class="lightbox-image option-btn" data-fancybox-group="example-gallery" href="/house/gallery/duplex.jpg" title="Image Title Here"><img src="/house/gallery/duplex.jpg" alt=""></a>
                                    </figure>
                                </li>
                                <li>
                                    <figure class="image">
                                        <a class="lightbox-image option-btn" data-fancybox-group="example-gallery" href="/house/gallery/duplex.jpg" title="Image Title Here"><img src="/house/gallery/duplex.jpg" alt=""></a>
                                    </figure>
                                </li>
                            </ul>

                            <!--Product Thumbs Carousel-->
                            <div class="prod-thumbs-carousel owl-theme owl-carousel">
                                <div class="thumb-item">
                                    <figure class="thumb-box"><img src="{{asset('/house/gallery/gallery-thumb-1.jpg')}}" alt=""></figure>
                                </div>
                                <div class="thumb-item">
                                    <figure class="thumb-box"><img src="/house/gallery/gallery-thumb-2.jpg" alt=""></figure>
                                </div>
                                <div class="thumb-item">
                                    <figure class="thumb-box"><img src="/house/gallery/houcsxz.jpg" alt=""></figure>
                                </div>
                                <div class="thumb-item">
                                    <figure class="thumb-box"><img src="/house/gallery/gallery-thumb-1.jpg" alt=""></figure>
                                </div>
                                <div class="thumb-item">
                                    <figure class="thumb-box"><img src="/house/gallery/gallery-thumb-2.jpg" alt=""></figure>
                                </div>
                                <div class="thumb-item">
                                    <figure class="thumb-box"><img src="/house/gallery/gallery-thumb-3.jpg" alt=""></figure>
                                </div>
                            </div>

                        </div>
                        <!--End Product Carousel-->

                        <div class="detail-content">
                            <div class="medium-title">
                            </div>

                    </section>
                </div>
                <!--Content Side-->

                <!--Sidebar-->
                <div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar">

                        <!-- Request Quote Form -->
                        <div class="sidebar-widget request-quote">
                            <div class="widget-inner">


                                <!-- <div class="detail-content"> -->
                                <!-- <div class="medium-title"> -->
                                <h3>PROPERTY DESCRIPTION</h3>
                                <!-- </div> -->
                                <div class="info">
                                    <ul>
                                        <li>Price : &ensp;<span class="price">#70,000</span></li>
                                        <li>Area : &ensp;&ensp;<span class="area">Mayfair</span></li>
                                    </ul>
                                </div>
                                <div class="text-content">
                                    <p>We LOVE our new home and constantly tell people that if they are going to build, they need to use Excellent houses! Mike and Carl made the whole experience wonderful! I've never said that about a home building
                                        experience before. They were trustworthy and FUN to work with! Price: #70,000.</p>
                                    <!-- <p>We LOVE our new home and constantly tell people that if they are going to build, they need to use Excellent houses! Mike and Carl made the whole experience wonderful! I've never said that about a home building experience
                                before. They were trustworthy and FUN to work with!</p> -->
                                </div>
                                <div class="property-specs">
                                    <ul class="specs-list">
                                        <li>
                                            <div class="icon"><span class="flaticon-double-king-size-bed"></span></div> 1 Bedroom</li>
                                        <li>
                                            <div class="icon"><span class="flaticon-vintage-bathtub"></span></div> 1 Bathroom & 1 Toilet</li>
                                        <li>
                                            <div class="icon"><span class="flaticon-private-garage"></span></div> 02 Car Parking</li>
                                        <!-- <li> -->
                                        <!-- <div class="icon"><span class="flaticon-copy"></span></div> 1040 sq ft</li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                </div>

                <!--Scroll to top-->
                <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>


                <script src="{{asset('house/details/js/jquery.js')}}"></script>
                <script src="{{asset('house/details/js/bootstrap.min.js')}}"></script>
                <script src="{{asset('house/details/js/jquery-ui.js')}}"></script>
                <script src="{{asset('house/details/js/jquery.fancybox.pack.js')}}"></script>
                <script src="{{asset('house/details/js/jquery.fancybox-media.js')}}"></script>
                <script src="{{asset('house/details/js/mixitup.js')}}"></script>
                <script src="{{asset('house/details/js/owl.js')}}"></script>
                <script src="{{asset('house/details/js/owl.js')}}"></script>
                <script src="{{asset('house/details/js/appear.js')}}"></script>
                <script src="{{asset('house/details/js/script.js')}}"></script>
</header>

<footer>
    <style>
        footer {
            background-color: #333;
            padding: 50px;
            font-size: 80%;
        }

        .footer-nav {
            list-style: none;
            float: left;
        }

        .social-links {
            list-style: none;
            float: right;
        }

        .footer-nav li,
        .social-links li {
            display: inline-block;
            margin-right: 20px;
        }

        .footer-nav li:last-child,
        .social-links li:last-child {
            margin-right: 0;
        }

        .footer-nav li a:link,
        .footer-nav li a:visited,
        .social-links a:link,
        .social-links a:visited {
            text-decoration: none;
            border: 0;
            color: #888;
            transition: color 0.2s;
        }

        .footer-nav li a:hover,
        .footer-nav li a:active {
            color: #ddd;
        }

        footer p {
            color: #888;
            text-align: center;
            margin-top: 20px;
        }

        .social-links li a:link,
        .social-links li a:visited {
            font-size: 160%;
        }

        .ion-social-facebook,
        .ion-social-twitter,
        .ion-social-googleplus,
        .ion-social-instagram {
            transition: color 0.2s;
        }

        .ion-social-facebook:hover {
            color: #3b5998;
        }

        .ion-social-twitter:hover {
            color: #00aced;
        }

        .ion-social-googleplus:hover {
            color: #dd4b39;
        }

        .ion-social-instagram:hover {
            color: #517fa4;
        }

        .row {
            max-width: 1140px;
            margin: 0 auto 0 auto;
            /*  margin: 0 auto; */
            /* both codes with actually do the same thing */
        }

        a:link,
        a:visited {
            color: #e67e22;
            text-decoration: none;
            padding-bottom: 1px;
            border-bottom: 1px solid #e67e22;
            transition: border_bottom 0.2s, color 0.2s;
        }

        a:hover,
        a:active {
            color: #555;
            border-bottom: 1px solid transparent;
        }

        .span-2-of-2 {
            width: 100%;
        }

        .span-1-of-2 {
            width: 49.2%;
        }
    </style>
    <div class="row">
        <div class="col span-1-of-2">
            <ul class="footer-nav">
                <li>
                    <a href="#">About us</a></li>
                <li> <a href="#">Blog</a></li>
                <li><a href="#">Press</a></li>
                <li><a href="#">Ios App</a></li>
                <li><a href="#">Android app</a></li>
            </ul>
        </div>
        <div class="col span-1-of-2"></div>
        <ul class="social-links">
            <li>
                <a href="#"><i class="ion-social-facebook"></i></a>
            </li>
            <li>
                <a href="#"><i class="ion-social-twitter"></i></a>
            </li>
            <li>
                <a href="#"><i class="ion-social-googleplus"></i></a>
            </li>
            <li>
                <a href="#"><i class="ion-social-instagram"></i></a>
            </li>
        </ul>
    </div>
    <div class="row">
        <p>Copyright &copy; 2018 by David. &nbsp; All rights reserved &reg; . </p>
    </div>
</footer>






</body>


</html>