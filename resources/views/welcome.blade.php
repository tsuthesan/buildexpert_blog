<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Construction Press || Responsive HTML Template</title>

    <!-- Responsive Meta Tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- main stylesheet -->
    <link rel="stylesheet" href="{{ asset('../build/assets/css/style.css') }}">
    <!-- responsive stylesheet -->
    <link rel="stylesheet" href="{{asset('../build/assets/css/responsive.css')}}">


    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
<script src="{{ asset('../build/assets/js/respond.js') }}"></script>
    <![endif]-->


</head>
<body>



<!-- #topbar -->
<section id="topbar" class="construct">
    <div class="container">
        <div class="row">
            <div class="social pull-right">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>
            </div> <!-- /.social -->
            <div class="contact-info pull-left">
                <ul>
                    <li><a href="tel:+1234567890"><i class="fa fa-map-marker"></i>  56, Building- Avenue-96, New York </a></li>
                    <li><a href="mailto:info@plumberx.com"><i class="fa fa-envelope"></i> info@constructpress.com</a></li>
                    <li><a href="tel:1800654896"><i class="fa fa-phone"></i> + (1800) - 654 - 896</a></li>
                </ul>
            </div> <!-- /.contact-info -->
        </div>
    </div>
</section> <!-- /#topbar -->

<!-- header -->
<header class="construct header-curvy">
    <div class="search-box">
        <div class="container">
            <div class="pull-right search  col-lg-3 col-md-4 col-sm-5 col-xs-12">
                <form action="#">
                    <input type="text" placeholder="Search Here"> <button type="submit"><i class="icon icon-Search"></i></button>
                </form>
            </div>
        </div>
    </div>
    <div class="cart-box">
        <div class="container">
            <div class="pull-right cart col-lg-6 col-xs-12">
                <p><i class="icon icon-FullShoppingCart"></i> You Have <span>1 Item</span> in your Cart. Price is <span>$199</span></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="clearfix">
            <div class="pull-left logo">
                <a href="index.html">
                    <img src="" alt="">
                    <img src="{{ asset('../build/assets/img/resources/logo-2.png') }}" alt="Plumberx">
                </a>
            </div>
            <nav class="pull-right mainmenu-container clearfix">
                <ul class="top-icons-wrap pull-right">
                    <li class="top-icons search"><a href="#"><i class="icon icon-Search"></i></a></li>
                    <li class="top-icons cart"><a href="#"><i class="icon icon-ShoppingCart"></i></a></li>
                </ul>
                <button class="mainmenu-toggler">
                    <i class="fa fa-bars"></i>
                </button>
                <ul class="mainmenu pull-right">
                    <li class=" dropdown current"><a href="contact.html">Home</a></li>
                    <li class="dropdown">
                        <a href="">Our Services</a>
                        <ul class="submenu">
                            <li><a href="index-2.html">Estmating</a></li>
                            <li><a href="index-2.html">Drafting</a></li>
                            <li><a href="index-2.html"> 3D Rendering</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">Expert-Eye</a>
                        <ul class="submenu">
                            <li><a href="about.html">Reviews</a></li>
                            <li><a href="#"> New technology </a></li>
                            <li><a href="#"> News </a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#">Extimator</a>
                        <ul class="submenu">
                            <li><a href="search-result.html">New House</a></li>
                            <li class="dropdown">
                                <a href="about.html">Interior</a>
                                <ul class="submenu">
                                    <li><a href="team.html">Flooring</a></li>
                                    <li><a href="faq.html">Bath room</a></li>
                                    <li><a href="faq.html">Air Conditioning</a></li>
                                    <li><a href="faq.html">Lighting</a></li>
                                    <li><a href="faq.html">Curtain/Blinds</a></li>
                                    <li><a href="faq.html">Kitchen Upgrade</a></li>
                                    <li><a href="faq.html">Painting</a></li>
                                    <li><a href="faq.html"> Security System</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">

                                <a href="about.html">Exterior</a>
                                <ul class="submenu">
                                    <li><a href="team.html">Our Team</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li class="dropdown">
                        <a href="shop.html">Admin</a>
                        <ul class="submenu">
                            <li><a href="product-details.html">Product Details</a></li>
                            <li><a href="cart-page.html">Cart Page</a></li>
                            <li><a href="checkout-page.html">Checkout Page</a></li>
                        </ul>
                    </li>


                </ul>
            </nav>
        </div>
    </div>
</header> <!-- /header -->


<section class="rev_slider_wrapper construct-banner-wrapper">
    <div id="slider1" class="rev_slider"  data-version="5.0">
        <ul>
            <li data-transition="fade">
                <img src=" {{ asset('/build/assets/img/slides/image01.jpg') }}" width="1920px" height="718px"  alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                <div class="tp-caption sfb tp-resizeme construct-banner-caption"
                     data-x="right" data-hoffset="0"
                     data-y="top" data-voffset="205"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;"
                     data-transform_in="o:0"
                     data-transform_out="o:0"
                     data-start="500">
                    <h2><b>We Are Available For</b></h2>
                </div>
                <div class="tp-caption sfb tp-resizeme construct-banner-caption"
                     data-x="right" data-hoffset="20"
                     data-y="top" data-voffset="265"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;"
                     data-transform_in="o:0"
                     data-transform_out="o:0"
                     data-start="800">
                    <h2>Any Construction Work</h2>
                </div>
                <div class="tp-caption sfb tp-resizeme construct-banner-caption"
                     data-x="right" data-hoffset="15"
                     data-y="top" data-voffset="330"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;"
                     data-transform_in="o:0"
                     data-transform_out="o:0"
                     data-start="1100">
                    <ul>
                        <li><span>Domestic</span></li>
                        <li><span>Commercial</span></li>
                        <li><span>Industrial</span></li>
                    </ul>
                </div>
                <div class="tp-caption sfb tp-resizeme construct-banner-caption"
                     data-x="right" data-hoffset="0"
                     data-y="top" data-voffset="350"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;"
                     data-transform_in="o:0"
                     data-transform_out="o:0"
                     data-start="1400">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Conse <br> quatur  earum iusto tempora nesciunt enim harum architecto, <br> quis culpa ducimus deleniti, labore. Libero magnam</p>
                </div>
                <div class="tp-caption sfb tp-resizeme construct-banner-caption"
                     data-x="right" data-hoffset="315"
                     data-y="top" data-voffset="480"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;"
                     data-transform_in="o:0"
                     data-transform_out="o:0"
                     data-start="1700">
                    <a href="#" class="hvr-bounce-to-right">Learn More</a>
                </div>
            </li>
            <li data-transition="fade">
                <img src=" {{ asset('/build/assets/img/slides/image02.jpg') }}"  alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                <div class="tp-caption sfb tp-resizeme construct-banner-caption"
                     data-x="left" data-hoffset="270"
                     data-y="top" data-voffset="205"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;"
                     data-transform_in="o:0"
                     data-transform_out="o:0"
                     data-start="500">
                    <h2>We Renovate</h2>
                </div>
                <div class="tp-caption sfb tp-resizeme construct-banner-caption"
                     data-x="left" data-hoffset="280"
                     data-y="top" data-voffset="255"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;"
                     data-transform_in="o:0"
                     data-transform_out="o:0"
                     data-start="1000">
                    <h2>Your home with heart</h2>
                </div>
                <div class="tp-caption sfl tp-resizeme construct-banner-caption"
                     data-x="left" data-hoffset="290"
                     data-y="top" data-voffset="320"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;"
                     data-transform_in="o:0"
                     data-transform_out="o:0"
                     data-start="1500">
                    <span class="border"></span>
                </div>
                <div class="tp-caption sfb tp-resizeme construct-banner-caption"
                     data-x="left" data-hoffset="290"
                     data-y="top" data-voffset="315"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;"
                     data-transform_in="o:0"
                     data-transform_out="o:0"
                     data-start="2000">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed <br> do eiusmod tempor incididunt ut labore et dolore.</p>
                </div>
                <div class="tp-caption sfb tp-resizeme construct-banner-caption"
                     data-x="left" data-hoffset="290"
                     data-y="top" data-voffset="410"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;"
                     data-transform_in="o:0"
                     data-transform_out="o:0"
                     data-start="2500">
                    <a href="#" class="hvr-bounce-to-right">Learn More</a>
                </div>
            </li>
            <li data-transition="fade">
                <img src=" {{ asset('/build/assets/img/slides/image03.jpg') }}"  alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                <div class="tp-caption sfb tp-resizeme construct-banner-caption"
                     data-x="center" data-hoffset="0"
                     data-y="top" data-voffset="205"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;"
                     data-transform_in="o:0"
                     data-transform_out="o:0"
                     data-start="700">
                    <h2>We Are The Leader</h2>
                </div>
                <div class="tp-caption sfb tp-resizeme construct-banner-caption"
                     data-x="center" data-hoffset="0"
                     data-y="top" data-voffset="255"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;"
                     data-transform_in="o:0"
                     data-transform_out="o:0"
                     data-start="1000">
                    <h2>In Construction Company</h2>
                </div>
                <div class="tp-caption sfb tp-resizeme construct-banner-caption"
                     data-x="center" data-hoffset="0"
                     data-y="top" data-voffset="320"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;"
                     data-transform_in="o:0"
                     data-transform_out="o:0"
                     data-start="1300">
                    <span class="border"></span>
                </div>
                <div class="tp-caption sfb tp-resizeme construct-banner-caption"
                     data-x="center" data-hoffset="0"
                     data-y="top" data-voffset="315"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;"
                     data-transform_in="o:0"
                     data-transform_out="o:0"
                     data-start="1600">
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed <br> do eiusmod tempor incididunt ut labore et dolore.</p>
                </div>
                <div class="tp-caption sfb tp-resizeme construct-banner-caption"
                     data-x="center" data-hoffset="0"
                     data-y="top" data-voffset="410"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;"
                     data-transform_in="o:0"
                     data-transform_out="o:0"
                     data-start="1900">
                    <a href="#" class="hvr-bounce-to-right">Learn More</a>
                </div>
            </li>
        </ul>
    </div>
</section>


<section id="construction-welcome">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 single-construction-welcome">
                <div class="img-holder hvr-rectangle-out">
                    <img src=" {{ asset('../build/assets/img/construction-welcome/1.jpg') }}" alt="">
                </div>
                <h2>Construction</h2>
                <p>Lorem ipsum dolor sit amet, cons ectetur elit. Ves tibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor.</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 single-construction-welcome">
                <div class="img-holder hvr-rectangle-out">
                    <img src=" {{ asset('../build/assets/img/construction-welcome/2.jpg') }}" alt="">
                </div>
                <h2>renovation</h2>
                <p>Lorem ipsum dolor sit amet, cons ectetur elit. Ves tibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor.</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-3 col-xs-offset-0 single-construction-welcome">
                <h1>Wecome to ConstructPress</h1>
                <p>Lorem ipsum dolor sit amet, cons ectetur elit. Vestib ulum nec odios Suspe ndisse cursus mal suada fact lisis. Lorem ipsum dolor sit.</p>
                <ul>
                    <li><i class="fa fa-arrow-circle-o-right"></i> Interior design Package</li>
                    <li><i class="fa fa-arrow-circle-o-right"></i> Reparing of Residentail Roof</li>
                    <li><i class="fa fa-arrow-circle-o-right"></i> Hardwood Flooring</li>
                    <li><i class="fa fa-arrow-circle-o-right"></i> Renovaion of Commercial Office</li>
                    <li><i class="fa fa-arrow-circle-o-right"></i> Make Quality Products</li>
                </ul>
            </div>
        </div>
    </div>
</section>





<!-- #service-we-provide -->
<section id="service-we-provide" class="construct">
    <div class="container">
        <div class="section-title">
            <h1>Services that we offers</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 wow slideInLeft">
                <div class="service-tab-title">
                    <ul class="clearfix">
                        <li class="active" data-tab-name="construction">Building Construction</li>
                        <li data-tab-name="renovation">Building Renovation</li>
                        <li data-tab-name="interior">Interior Design package</li>
                        <li data-tab-name="isolatoin">Isolation</li>
                        <li data-tab-name="roof">Roof Repairing</li>
                        <li data-tab-name="consluting">architecture conslulting</li>
                        <li data-tab-name="maintanance">building maintanance</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 wow slideInRight">
                <div class="row">
                    <div class="service-tab-content clearfix">
                        <div id="construction">
                            <div class="col-lg-8 col-md-7 col-sm-8">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium <br> dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent <br> ore veritatis et quasi architecto beatae vitae dict eaque ipsa quae ab illo <br> inventore veritatis et quasi architecto.</p>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <img src=" {{ asset('../build/assets/img/service-we-provide/1.jpg') }}" alt="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Natus erroroluptatem</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Accusantium doloremue</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Laudantium unde </li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Natus error sit volupta</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Accusantium dolor</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zoomIn">
                                <img src=" {{ asset('../build/assets/img/service-we-provide/2.png') }}" alt="">
                            </div>
                        </div>
                        <div id="renovation">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent ore veritatis et quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <img src=" {{ asset('../build/assets/img/service-we-provide/1.jpg') }}" alt="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Natus erroroluptatem</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Accusantium doloremue</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Laudantium unde </li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Natus error sit volupta</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Accusantium dolor</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zoomIn">
                                <img src=" {{ asset('../build/assets/img/service-we-provide/2.png') }}" alt="">
                            </div>
                        </div>
                        <div id="interior">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent ore veritatis et quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <img src=" {{ asset('../build/assets/img/service-we-provide/1.jpg') }}" alt="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Natus erroroluptatem</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Accusantium doloremue</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Laudantium unde </li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Natus error sit volupta</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Accusantium dolor</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zoomIn">
                                <img src=" {{ asset('../build/assets/img/service-we-provide/2.png') }}" alt="">
                            </div>
                        </div>
                        <div id="isolatoin">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent ore veritatis et quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <img src=" {{ asset('../build/assets/img/service-we-provide/1.jpg') }}" alt="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Natus erroroluptatem</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Accusantium doloremue</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Laudantium unde </li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Natus error sit volupta</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Accusantium dolor</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zoomIn">
                                <img src=" {{ asset('../build/assets/img/service-we-provide/2.png') }}" alt="">
                            </div>
                        </div>
                        <div id="roof">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent ore veritatis et quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <img src=" {{ asset('../build/assets/img/service-we-provide/1.jpg') }}" alt="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Natus erroroluptatem</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Accusantium doloremue</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Laudantium unde </li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Natus error sit volupta</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Accusantium dolor</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zoomIn">
                                <img src=" {{ asset('../build/assets/img/service-we-provide/2.png') }}" alt="">
                            </div>
                        </div>
                        <div id="consluting">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent ore veritatis et quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <img src=" {{ asset('../build/assets/img/service-we-provide/1.jpg') }}" alt="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Natus erroroluptatem</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Accusantium doloremue</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Laudantium unde </li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Natus error sit volupta</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Accusantium dolor</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zoomIn">
                                <img src=" {{ asset('../build/assets/img/service-we-provide/2.png') }}" alt="">
                            </div>
                        </div>
                        <div id="maintanance">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent ore veritatis et quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <img src=" {{ asset('../build/assets/img/service-we-provide/1.jpg') }}" alt="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Natus erroroluptatem</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Accusantium doloremue</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Laudantium unde </li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Natus error sit volupta</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Accusantium dolor</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zoomIn">
                                <img src=" {{ asset('../build/assets/img/service-we-provide/2.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!-- /#service-we-provide -->


<section id="project-version-one" class="construct home">
    <div class="container">
        <div class="section-title">
            <h1>our latest projects</h1>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <ul class="gallery-filter">
                    <li data-filter="all">
                        <span>All</span>
                    </li>
                    <li data-filter=".kitchen">
                        <span>Indoor Furniture</span>
                    </li>
                    <li data-filter=".bathroom">
                        <span>Renovaion of house</span>
                    </li>
                    <li data-filter=".drain">
                        <span>hardwood flooring</span>
                    </li>
                    <li data-filter=".plumbing">
                        <span>wood supply</span>
                    </li>
                    <li data-filter=".outside">
                        <span>furniture manufacturing</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row normal-gallery gallery-v4" id="image-gallery-mix">
            <div class="single-project-item mix  tank outside">
                <div class="img-wrap">
                    <img src=" {{ asset('../build/assets/img/project-v4/1.jpg') }}" alt="">
                    <div class="content-wrapper hvr-sweep-to-right">
                        <div class="content">
                            <div class="button-box">
                                <a class="fancybox" data-fancybox-group="home-gallery" title="Building Construction" href="img/project-v4/1.jpg"><i class="fa fa-search-plus"></i></a>
                            </div>
                            <div class="text-box">
                                <h4>Building Construction</h4>
                                <span>Lorem ipsum dolor sit amet, cons ctetur adipisicing.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-project-item mix plumbing outside">
                <div class="img-wrap">
                    <img src=" {{ asset('../build/assets/img/project-v4/2.jpg') }}" alt="">
                    <div class="content-wrapper hvr-sweep-to-right">
                        <div class="content">
                            <div class="button-box">
                                <a class="fancybox" data-fancybox-group="home-gallery" title="Building Renovation" href="img/project-v4/2.jpg"><i class="fa fa-search-plus"></i></a>
                            </div>
                            <div class="text-box">
                                <h4>Building Renovation</h4>
                                <span>Lorem ipsum dolor sit amet, cons ctetur adipisicing.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-project-item mix drain plumbing bathroom">
                <div class="img-wrap">
                    <img src="{{ asset('../build/assets/img/project-v4/3.jpg') }}" alt="">
                    <div class="content-wrapper hvr-sweep-to-right">
                        <div class="content">
                            <div class="button-box">
                                <a class="fancybox" data-fancybox-group="home-gallery" title="Interior Design package" href="img/project-v4/3.jpg"><i class="fa fa-search-plus"></i></a>
                            </div>
                            <div class="text-box">
                                <h4>Interior Design package</h4>
                                <span>Lorem ipsum dolor sit amet, cons ctetur adipisicing.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-project-item mix kitchen outside drain bathroom">
                <div class="img-wrap">
                    <img src="{{ asset('../build/assets/img/project-v4/4.jpg') }}" alt="">
                    <div class="content-wrapper hvr-sweep-to-right">
                        <div class="content">
                            <div class="button-box">
                                <a class="fancybox" data-fancybox-group="home-gallery" title="Isolation" href="img/project-v4/4.jpg"><i class="fa fa-search-plus"></i></a>
                            </div>
                            <div class="text-box">
                                <h4>Isolation</h4>
                                <span>Lorem ipsum dolor sit amet, cons ctetur adipisicing.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-project-item mix kitchen  bathroom">
                <div class="img-wrap">
                    <img src="{{ asset('../build/assets/img/project-v4/5.jpg') }}" alt="">
                    <div class="content-wrapper hvr-sweep-to-right">
                        <div class="content">
                            <div class="button-box">
                                <a class="fancybox" data-fancybox-group="home-gallery" title="Roof Repairing" href="img/project-v4/5.jpg"><i class="fa fa-search-plus"></i></a>
                            </div>
                            <div class="text-box">
                                <h4>Roof Repairing</h4>
                                <span>Lorem ipsum dolor sit amet, cons ctetur adipisicing.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-project-item mix kitchen drain ">
                <div class="img-wrap">
                    <img src="{{ asset('../build/assets/img/project-v4/6.jpg') }}" alt="">
                    <div class="content-wrapper hvr-sweep-to-right">
                        <div class="content">
                            <div class="button-box">
                                <a class="fancybox" data-fancybox-group="home-gallery" title="Architecture Conslulting" href="img/project-v4/6.jpg"><i class="fa fa-search-plus"></i></a>
                            </div>
                            <div class="text-box">
                                <h4>Architecture Conslulting</h4>
                                <span>Lorem ipsum dolor sit amet, cons ctetur adipisicing.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-project-item mix kitchen drain bathroom">
                <div class="img-wrap">
                    <img src="{{ asset('../build/assets/img/project-v4/7.jpg') }}" alt="">
                    <div class="content-wrapper hvr-sweep-to-right">
                        <div class="content">
                            <div class="button-box">
                                <a class="fancybox" data-fancybox-group="home-gallery" title="Building Maintanance" href="img/project-v4/7.jpg"><i class="fa fa-search-plus"></i></a>
                            </div>
                            <div class="text-box">
                                <h4>Building Maintanance</h4>
                                <span>Lorem ipsum dolor sit amet, cons ctetur adipisicing.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-project-item mix kitchen drain bathroom">
                <div class="img-wrap">
                    <img src="{{ asset('../build/assets/img/project-v4/8.jpg') }}" alt="">
                    <div class="content-wrapper hvr-sweep-to-right">
                        <div class="content">
                            <div class="button-box">
                                <a class="fancybox" data-fancybox-group="home-gallery" title="Building Construction" href="img/project-v4/8.jpg"><i class="fa fa-search-plus"></i></a>
                            </div>
                            <div class="text-box">
                                <h4>Building Construction</h4>
                                <span>Lorem ipsum dolor sit amet, cons ctetur adipisicing.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-project-item mix kitchen drain bathroom">
                <div class="img-wrap">
                    <img src="{{ asset('../build/assets/img/project-v4/9.jpg') }}" alt="">
                    <div class="content-wrapper hvr-sweep-to-right">
                        <div class="content">
                            <div class="button-box">
                                <a class="fancybox" data-fancybox-group="home-gallery" title="Building Renovation" href="img/project-v4/9.jpg"><i class="fa fa-search-plus"></i></a>
                            </div>
                            <div class="text-box">
                                <h4>Building Renovation</h4>
                                <span>Lorem ipsum dolor sit amet, cons ctetur adipisicing.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-project-item mix kitchen drain bathroom">
                <div class="img-wrap">
                    <img src="{{ asset('../build/assets/img/project-v4/10.jpg') }}" alt="">
                    <div class="content-wrapper hvr-sweep-to-right">
                        <div class="content">
                            <div class="button-box">
                                <a class="fancybox" data-fancybox-group="home-gallery" title="Interior Design package" href="img/project-v4/10.jpg"><i class="fa fa-search-plus"></i></a>
                            </div>
                            <div class="text-box">
                                <h4>Interior Design package</h4>
                                <span>Lorem ipsum dolor sit amet, cons ctetur adipisicing.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="view-all-btn text-center"><a href="project-v1.html" class="view-all hvr-bounce-to-right">view all</a></div>
    </div>
</section>


<section id="video-section-construction">
    <div class="container">
        <div class="clearfix">
            <div class="video-preview">
                <a href="http://www.youtube.com/watch?v=hMHAcYsvxHE" class="video-fancybox">
                    <img src="{{ asset('../build/assets/img/video-construction/1.jpg') }}" alt="">
                </a>
            </div>
            <div class="video-text">
                <h2>Checkout our video for featured work</h2>
                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia conseq uuntur magnirt dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quis quam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. Neque porro quis quam qui dolorem ipsu quiat dolor sit amet, consectetur, adipisci velit.</p>
                <a href="contact.html" class="contact-us hvr-bounce-to-right">Contact Us</a>
            </div>
        </div>
    </div>
</section>


<section id="welcome-to-construct">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="img-holder hvr-rectangle-out pull-right">
                    <img src="{{ asset('../build/assets/img/welcome-to-construct/1.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                <h2>Welcome to construct press</h2>
                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliq uam quae rat voluptatem. Ut enim ad minima veniam, quis nostrum.</p>
                <h3>We are available for 24/7 for you requirements</h3>
                <div class="list-box clearfix">
                    <ul>
                        <li><i class="fa fa-hand-o-right"></i> COMPLETE SAFETY ANALYSIS</li>
                        <li><i class="fa fa-hand-o-right"></i> DRIVABILITY PROBLEMS</li>
                    </ul>
                    <ul>
                        <li><i class="fa fa-hand-o-right"></i> COMPLETE SAFETY ANALYSIS</li>
                        <li><i class="fa fa-hand-o-right"></i> DRIVABILITY PROBLEMS</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="testimonials-construct-home">
    <div class="container">
        <div class="section-title">
            <h1>testimonials</h1>
        </div>

        <div class="clearfix">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="single-testimonial-construct clearfix">
                        <div class="img-holder hvr-rectangle-out">
                            <img src="{{ asset('../build/assets/img/testimonials-construct/1.jpg') }}" alt="">
                        </div>
                        <div class="content">
                            <h3>John Michale</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-testimonial-construct clearfix">
                        <div class="img-holder hvr-rectangle-out">
                            <img src="{{ asset('../build/assets/img/testimonials-construct/2.jpg') }}" alt="">
                        </div>
                        <div class="content">
                            <h3>John Michale</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-testimonial-construct clearfix">
                        <div class="img-holder hvr-rectangle-out">
                            <img src="{{ asset('../build/assets/img/testimonials-construct/1.jpg') }}" alt="">
                        </div>
                        <div class="content">
                            <h3>John Michale</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-testimonial-construct clearfix">
                        <div class="img-holder hvr-rectangle-out">
                            <img src="{{ asset('../build/assets/img/testimonials-construct/2.jpg') }}" alt="">
                        </div>
                        <div class="content">
                            <h3>John Michale</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-testimonial-construct clearfix">
                        <div class="img-holder hvr-rectangle-out">
                            <img src="{{ asset('../build/assets/img/testimonials-construct/1.jpg') }}" alt="">
                        </div>
                        <div class="content">
                            <h3>John Michale</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-testimonial-construct clearfix">
                        <div class="img-holder hvr-rectangle-out">
                            <img src="{{ asset('../build/assets/img/testimonials-construct/2.jpg') }}" alt="">
                        </div>
                        <div class="content">
                            <h3>John Michale</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-testimonial-construct clearfix">
                        <div class="img-holder hvr-rectangle-out">
                            <img src="{{ asset('../build/assets/img/testimonials-construct/1.jpg') }}" alt="">
                        </div>
                        <div class="content">
                            <h3>John Michale</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-testimonial-construct clearfix">
                        <div class="img-holder hvr-rectangle-out">
                            <img src="{{ asset('../build/assets/img/testimonials-construct/2.jpg') }}" alt="">
                        </div>
                        <div class="content">
                            <h3>John Michale</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section id="our-team-construct">
    <div class="container">
        <div class="section-title">
            <h1>Our dedicated team</h1>
        </div>
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="single-construct-member">
                    <div class="img-holder">
                        <img src="{{ asset('../build/assets/img/our-team-construct/1.png') }}" alt="">
                    </div>
                    <div class="content hvr-bounce-to-bottom">
                        <h2>Hendrick jack</h2>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-construct-member">
                    <div class="img-holder">
                        <img src="{{ asset('../build/assets/img/our-team-construct/2.png') }}" alt="">
                    </div>
                    <div class="content hvr-bounce-to-bottom">
                        <h2>Hendrick jack</h2>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-construct-member">
                    <div class="img-holder">
                        <img src="{{ asset('../build/assets/img/our-team-construct/3.png') }}" alt="">
                    </div>
                    <div class="content hvr-bounce-to-bottom">
                        <h2>Hendrick jack</h2>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-construct-member">
                    <div class="img-holder">
                        <img src="{{ asset('../build/assets/img/our-team-construct/4.png') }}" alt="">
                    </div>
                    <div class="content hvr-bounce-to-bottom">
                        <h2>Hendrick jack</h2>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-construct-member">
                    <div class="img-holder">
                        <img src="{{ asset('../build/assets/img/our-team-construct/1.png') }}" alt="">
                    </div>
                    <div class="content hvr-bounce-to-bottom">
                        <h2>Hendrick jack</h2>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-construct-member">
                    <div class="img-holder">
                        <img src="{{ asset('../build/assets/img/our-team-construct/2.png') }}" alt="">
                    </div>
                    <div class="content hvr-bounce-to-bottom">
                        <h2>Hendrick jack</h2>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-construct-member">
                    <div class="img-holder">
                        <img src="{{ asset('../build/assets/img/our-team-construct/3.png') }}" alt="">
                    </div>
                    <div class="content hvr-bounce-to-bottom">
                        <h2>Hendrick jack</h2>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-construct-member">
                    <div class="img-holder">
                        <img src="{{ asset('../build/assets/img/our-team-construct/4.png') }}" alt="">
                    </div>
                    <div class="content hvr-bounce-to-bottom">
                        <h2>Hendrick jack</h2>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-construct-member">
                    <div class="img-holder">
                        <img src="{{ asset('../build/assets/img/our-team-construct/1.png') }}" alt="">
                    </div>
                    <div class="content hvr-bounce-to-bottom">
                        <h2>Hendrick jack</h2>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-construct-member">
                    <div class="img-holder">
                        <img src="{{ asset('../build/assets/img/our-team-construct/2.png') }}" alt="">
                    </div>
                    <div class="content hvr-bounce-to-bottom">
                        <h2>Hendrick jack</h2>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-construct-member">
                    <div class="img-holder">
                        <img src="{{ asset('../build/assets/img/our-team-construct/3.png') }}" alt="">
                    </div>
                    <div class="content hvr-bounce-to-bottom">
                        <h2>Hendrick jack</h2>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-construct-member">
                    <div class="img-holder">
                        <img src="{{ asset('../build/assets/img/our-team-construct/4.png') }}" alt="">
                    </div>
                    <div class="content hvr-bounce-to-bottom">
                        <h2>Hendrick jack</h2>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-construct-member">
                    <div class="img-holder">
                        <img src="{{ asset('../build/assets/img/our-team-construct/1.png') }}" alt="">
                    </div>
                    <div class="content hvr-bounce-to-bottom">
                        <h2>Hendrick jack</h2>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="blog-construct">
    <div class="container">
        <div class="section-title">
            <h1>Blogs</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 single-blog-post">
                <div class="img-holder hvr-rectangle-out">
                    <img src="{{ asset('../build/assets/img/blog-construct/1.jpg') }}" alt="">
                    <div class="date">
                        <b>05</b> <br> Aug
                    </div>
                </div>
                <a href="#"><h2>Heading of Blog</h2></a>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa nt ium dolorem que laudantium totam rem aperiam</p>
                <ul>
                    <li><span><b>By: </b> Anjori Meyami</span></li>
                    <li><a href="#">Comments 6</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 single-blog-post">
                <div class="img-holder hvr-rectangle-out">
                    <img src="{{ asset('../build/assets/img/blog-construct/2.jpg') }}" alt="">
                    <div class="date">
                        <b>05</b> <br> Aug
                    </div>
                </div>
                <a href="#"><h2>Heading of Blog</h2></a>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa nt ium dolorem que laudantium totam rem aperiam</p>
                <ul>
                    <li><span><b>By: </b> Anjori Meyami</span></li>
                    <li><a href="#">Comments 6</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 single-blog-post">
                <div class="img-holder hvr-rectangle-out">
                    <img src="{{ asset('../build/assets/img/blog-construct/3.jpg') }}" alt="">
                    <div class="date">
                        <b>05</b> <br> Aug
                    </div>
                </div>
                <a href="#"><h2>Heading of Blog</h2></a>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa nt ium dolorem que laudantium totam rem aperiam</p>
                <ul>
                    <li><span><b>By: </b> Anjori Meyami</span></li>
                    <li><a href="#">Comments 6</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>


<!-- #clients -->
<section id="clients" class="construct">
    <div class="container">
        <div class="section-title">
            <h1>we worked wityh awesome clients</h1>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="{{ asset('../build/assets/img/clients/1.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('../build/assets/img/clients/2.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('../build/assets/img/clients/2.png') }}x" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('../build/assets/img/clients/4.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('../build/assets/img/clients/5.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('../build/assets/img/clients/3.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('../build/assets/img/clients/4.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('../build/assets/img/clients/5.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!-- /#clients -->


<section id="great-construct-team">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Great Construction Company</h2>
                <p>If you have any construction and renovation work  need, simply <br>call our 24 hour emergecny number.</p>
                <p class="has-btn"><b>01865 524 8503</b> or <a href="#" class="hvr-bounce-to-right">Contact Us</a></p>
            </div>
        </div>
    </div>
</section>




<!-- footer -->
<footer class="construct">
    <div class="container">
        <div class="row">
            <!-- .widget -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 widget">
                <img class="positioned wow slideInUp " src="{{ asset('../build/assets/img/resources/footer-crane.png') }}" alt="">
            </div> <!-- /.widget -->
            <!-- .widget -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 widget">
                <h3>About Us</h3>
                <p>Lorem ipsum dolor sit amet, consect- <br>etur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali qua. Ut enim ad minim veniam, quis no strud exercitation ullamco. Ut enim ad minim.</p>
                <a href="#" class="read-more">Read More <i class="fa fa-angle-double-right"></i></a>
                <ul class="social">
                    <li><a href="#" class="hvr-radial-out"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="hvr-radial-out"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="hvr-radial-out"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" class="hvr-radial-out"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div> <!-- /.widget -->
            <!-- .widget -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 widget clearboth-tab clearboth-480">
                <h3>popular Posts</h3>
                <ul class="our-services">
                    <li><a href="#">Building Construction</a></li>
                    <li><a href="#">Hardwood Flooring</a></li>
                    <li><a href="#">Home Renovation</a></li>
                    <li><a href="#">Repairing of Roof</a></li>
                    <li><a href="#">Commercial Construction</a></li>
                </ul>
            </div> <!-- /.widget -->
            <!-- .widget -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 widget">
                <h3>Get in Touch</h3>
                <ul class="contact-info">
                    <li><i class="fa fa-map-marker"></i> <span class="text">Lorance Road 542B, Tailstoi Town <br>5248 MT, Wordwide Country</span></li>
                    <li><i class="fa fa-phone"></i> <span class="text">01865 524 8503</span></li>
                    <li><i class="fa fa-envelope-o"></i> <span class="text">contact@plumberx.com</span></li>
                    <li><i class="fa fa-globe"></i> <span class="text">http://plumberx.com</span></li>
                </ul>
            </div> <!-- /.widget -->

        </div>
    </div>
</footer> <!-- /footer -->

<!-- #bottom-bar -->
<section id="bottom-bar" class="construct">
    <div class="container">
        <div class="row">
            <!-- .copyright -->
            <div class="copyright pull-left">
                <p>Copyright &copy; Plumberx 2015. All rights reserved. </p>
            </div> <!-- /.copyright -->
            <!-- .credit -->
            <div class="credit pull-right">
                <p>Created by: DesignArc</p>
            </div> <!-- /.credit -->
        </div>
    </div>
</section><!-- /#bottom-bar -->



<script src="{{asset('../build/assets/js/jquery-1.11.3.min.js')}}"></script> <!-- jQuery JS -->
<script src="{{asset('../build/assets/js/bootstrap.min.js')}}"></script> <!-- BootStrap JS -->
<script src="http://maps.google.com/maps/api/js"></script> <!-- Gmap Helper -->
<script src="{{asset('../build/assets/js/gmap.js')}}"></script> <!-- gmap JS -->
<script src="{{asset('../build/assets/js/wow.js')}}"></script> <!-- WOW JS -->
<script src="{{asset('../build/assets/js/isotope.pkgd.min.js')}}"></script> <!-- iSotope JS -->
<script src="{{asset('../build/assets/js/owl.carousel.min.js')}}"></script> <!-- OWL Carousle JS -->
<script src="{{asset('../build/assets/js/revolution-slider/jquery.themepunch.tools.min.js')}}"></script> <!-- Revolution Slider Tools -->
<script src="{{asset('../build/assets/js/revolution-slider/jquery.themepunch.revolution.min.js')}}"></script> <!-- Revolution Slider -->
<script type="text/javascript" src="{{asset('../build/assets/js/revolution-slider/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{asset('../build/assets/js/revolution-slider/extensions/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('../build/assets/js/revolution-slider/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript" src="{{asset('../build/assets/js/revolution-slider/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('../build/assets/js/revolution-slider/extensions/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript" src="{{asset('../build/assets/js/revolution-slider/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('../build/assets/js/revolution-slider/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{asset('../build/assets/js/revolution-slider/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{asset('../build/assets/js/revolution-slider/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('../build/assets/js/jquery.fancybox.pack.js')}}"></script> <!-- FancyBox -->
<script src="{{asset('../build/assets/js/validate.js')}}"></script> <!-- Form Validator JS -->
<script src="{{asset('../build/assets/js/jquery.easing.min.js')}}"></script> <!-- jquery easing JS -->
<script src="{{asset('../build/assets/js/jquery.mixitup.min.js')}}"></script> <!-- MixIt UP JS -->
<script src="{{asset('../build/assets/js/custom.js')}}"></script> <!-- Custom JS -->



</body>
</html>
