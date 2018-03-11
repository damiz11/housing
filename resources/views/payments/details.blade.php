<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    </meta>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    </meta>
    <meta name="viewport" content="width=device-width">
    </meta>
    <title>Payment-Summary</title>
    <link rel="shortcut icon" href="flexport.ico">
    </link>
    <link rel="stylesheet" href="{{asset('house/details/css/bootstrap.css')}}">
    </link>
    <link rel="stylesheet" href="{{asset('house/details/css/screen.css')}}">
    </link>
    <link rel="stylesheet" href="{{asset('house/details/css/oocss.css')}}">
    </link>


    <link href='https://fonts.googleapis.com/css?family=Source+Code+Pro:400,300,500,600,700' rel='stylesheet' type='text/css'>
    </link>

    <script type="text/javascript" src=" https://du4nnals2ft9f.cloudfront.net/assets/core2-2d0db4718b125dea72216c9a239830db.js.gz"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('house/vendors/css/normalize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('house/vendors/css/grid.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('house/vendors/css/ionicons.min.CSS')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('house/resources/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('house/resources/css/queries.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('house/resources/css/sign_up.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
    <!-- <title>Excellent Houses</title> -->
</head>

<body>

<header>
    @include('components.header')
    <p></p>
    <br>
    <section class="container">
        <div class="row">
            <div class="col-xs-4">
                <div class="box bas backgroundBasic rtl rtr man mtm">
                    <div class="typeSeattle">
                        <div class="row backgroundBasic rtl rtr pvm mhn ">
                            <div class="col-xs-6 mvn typeBold phm">Details</div>
                        </div>
                        <div>
                            <div>
                                <div class="backgroundLowlight typeLooseSpacing typeMidnight typeBold typeCaps phm pvxs bts h7 mvn">basic</div>
                                <div class="row man pvs bts h6">
                                    <div class="col-md-6 typeLowlight typeCaps h7 mvn typeBold">Name of Occupant</div>
                                    <div class="col-md-6 text-right"><span>{{auth()->user()->name}}</span><span></span></div>
                                </div>
                                <div class="row man pvs bts h6">
                                    <div class="col-md-6 typeLowlight typeCaps h7 mvn typeBold">Apartment Type</div>
                                    <div class="col-md-6 text-right"><span>{{$house->type}}</span><span></span></div>
                                </div>
                            </div>
                            <div>
                                <div class="backgroundLowlight typeLooseSpacing typeMidnight typeBold typeCaps phm pvxs bts h7 mvn"> House Details</div>
                                <div class="row man pvs bts h6">
                                    <div class="col-md-6 typeLowlight typeCaps h7 mvn typeBold">House number</div>
                                    <div class="col-md-6 text-right"><span>{{$house->id}}</span><span></span></div>
                                </div>
                                <div class="row man pvs bts h6">
                                    <div class="col-md-6 typeLowlight typeCaps h7 mvn typeBold">House rent</div>
                                    <div class="col-md-6 text-right"><span>#{{$house->price}}</span><span></span></div>
                                </div>
                                <div class="row man pvs bts h6">
                                    <div class="col-md-6 typeLowlight typeCaps h7 mvn typeBold">Payment</div>
                                    <div class="col-md-6 text-right"><span>Yes</span><span></span></div>
                                </div>
                            </div>
                            <div>
                                <div class="backgroundLowlight typeLooseSpacing typeMidnight typeBold typeCaps phm pvxs bts h7 mvn">Facilities</div>
                                <div class="row man pvs bts h6">
                                    <div class="col-md-6 typeLowlight typeCaps h7 mvn typeBold">Personal Toilet</div>
                                    <div class="col-md-6 text-right"><span>{{$house->toilet}}</span><span> </span></div>
                                </div>
                                <div class="row man pvs bts h6">
                                    <div class="col-md-6 typeLowlight typeCaps h7 mvn typeBold">Personal Bathroom</div>
                                    <div class="col-md-6 text-right"><span>{{$house->bathroom}}</span><span> </span></div>
                                </div>
                                <div class="row man pvs bts h6">
                                    <div class="col-md-6 typeLowlight typeCaps h7 mvn typeBold">Personal kitchen</div>
                                    <div class="col-md-6 text-right"><span>{{$house->kitchen}}</span><span> </span></div>
                                </div>

                            </div>
                            <div>
                                <div class="backgroundLowlight typeLooseSpacing typeMidnight typeBold typeCaps phm pvxs bts h7 mvn">Dates</div>
                                <div class="row man pvs bts h6">
                                    <div class="col-md-6 typeLowlight typeCaps h7 mvn typeBold">Arrival Date</div>
                                    <div class="col-md-6 text-right"><span>{{$house->created_at}}</span><span></span></div>
                                </div>
                                <div class="row man pvs bts h6">
                                    <div class="col-md-6 typeLowlight typeCaps h7 mvn typeBold">Departure Date</div>
                                    <div class="col-md-6 text-right"><span></span><span></span></div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div align="">
            <input type="submit" value="Print Summary">
            <style>
                .btn:link,
                .btn:visited,
                input[type=submit] {
                    display: inherit;
                    padding: 10px 30px;
                    font-weight: 300;
                    text-decoration: none;
                    border-radius: 200px;
                    transition: background-color 0.2s, border 0.2s, color 0.2s;
                    text-align: right;
                }

                .btn-full:link,
                .btn-full:visited,
                input[type=submit] {
                    background-color: #e67e22;
                    border: 1px solid #e67e22;
                    color: #fff;
                    margin-right: 10px;
                    margin-left: 70px;
                }

                .btn:hover,
                .btn:active,
                input[type=submit]:hover,
                input[type=submit] :active {
                    background-color: #cf6d17;
                }

                .btn-full:hover,
                .btn-full:active,
                input[type=submit] {
                    border: 1px solid #e67e17;
                }
            </style>
        </div>
        <!-- </div> -->
    </section>

</header>



<script type="text/javascript" src="https://flexport.github.io/oocss/docs/doc_assets/js/class_click.js"></script>
<script type="text/javascript" src="https://flexport.github.io/oocss/docs/doc_assets/js/components.js"></script>






<footer>
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