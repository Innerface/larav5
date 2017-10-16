<!DOCTYPE html>
<html>
<head>
    <title>KUMAMOTO'S</title>
    <link rel="shortcut icon" href="{{ URL::asset('images/kumamotos_s.ico') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="6cors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <!--theme-style-->
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <!--fonts-->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!--//fonts-->
    <script type="text/javascript" src="{{ URL::asset('js/jquery-1.11.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/move-top.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/easing.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
</head>
<body>
<!--start-banner-->
<div class="header" id="home">
    <div class="header-top">
        <a href=""><img src="{{ URL::asset('images/kumamotos.ico') }}" alt=""/></a>
        <h1>KUMAMOTO'S</h1>
        <h1>We create beautiful world</h1>
        <div class="header-top-bottom">
            <a href="#about" class="scroll"><img src="{{ URL::asset('images/logo-3.png') }}" alt=""/></a>
        </div>
    </div>
    <div class="header-home">
        <div class="fixed-header">
            <div class="h_menu4"><!-- start h_menu4 -->
                <div class="header-left">
                    <div class="header-left-logo">
                        <a href=""><img src="{{ URL::asset('images/kumamotos_m.ico') }}" alt=""/></a>
                    </div>
                    <div class="header-left-text">
                        <a class="toggleMenu" href="#"><img src="{{ URL::asset('images/menu-icon.png') }}" alt=""/></a>
                        <ul class="nav">
                            <li><a href="#about" class="scroll">ABOUT</a></li>
                            <li><a href="#services" class="scroll">SERVICES</a></li>
                            <li><a href="#work" class="scroll">WORKS</a></li>
                            <li><a href="#pricing" class="scroll">PRICING</a></li>
                            <li><a href="#blogs" class="scroll">BLOGS</a></li>
                            <li><a href="#contact" class="scroll">CONTACT</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <script type="text/javascript" src="{{ URL::asset('js/nav.js') }}"></script>
                    <script type="text/javascript">
                        jQuery(document).ready(function($) {
                            $(".scroll").click(function(event){
                                event.preventDefault();
                                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                            });
                        });
                    </script>
                    <!--script-->
                    <script>
                        $(document).ready(function(){
                            $(".nav li a").click(function(){
                                $(this).parent().addClass("active");
                                $(this).parent().siblings().removeClass("active");
                            });
                        });
                    </script>
                    <!--script-for-sticky-nav-->
                    <script>
                        $(document).ready(function() {
                            var navoffeset=$(".header-home").offset().top;
                            $(window).scroll(function(){
                                var scrollpos=$(window).scrollTop();
                                if(scrollpos >=navoffeset){
                                    $(".header-home").addClass("fixed");
                                }else{
                                    $(".header-home").removeClass("fixed");
                                }
                            });

                        });
                    </script>
                    <!--/script-for-sticky-nav-->
                </div>
                <div class="header-right">
                    <ul>
                        <li><a href="{{ route('login') }}"><span class="qq"> </span></a></li>
                        <li><a href="{{ route('login') }}"><span class="wechat"> </span></a></li>
                        <li><a href="{{ route('login') }}"><span class="weibo"> </span></a></li>
                        <li><a href="{{ route('login') }}"><span class="baidu"> </span></a></li>
                        <li><a href="{{ route('login') }}"><span class="kuma"> </span></a></li>
                        {{--<li><a href="#"><span class="kuma"> </span></a></li>--}}
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div><!-- end h_menu4 -->
        </div>
    </div>
</div>
<!--end-banner-->
<!--start-about-->
<div class="about" id="about">
    <div class="container">
        <div class="about-main">
            <h3>ABOUT US</h3>
            <div class="about-top">
                <div class="col-md-4 about-left">
                    <img src="{{ URL::asset('images/abt-1.png') }}" alt=""/>
                    <h4>YuYuE</h4>
                    <h5>WEB ENGINEER</h5>
                    <ul>
                        <li><a href="#"><span class="kuma"> </span></a></li>
                        <li><a href="#"><span class="wechat"> </span></a></li>
                        <li><a href="#"><span class="weibo"> </span></a></li>
                    </ul>
                </div>
                {{--<div class="col-md-4 about-left">--}}
                    {{--<img src="{{ URL::asset('images/abt-1.png') }}" alt=""/>--}}
                    {{--<h4>Johnny Vaw</h4>--}}
                    {{--<h5>GRAPHICS DESIGNER</h5>--}}
                    {{--<ul>--}}
                        {{--<li><a href="#"><span class="drbl"> </span></a></li>--}}
                        {{--<li><a href="#"><span class="sap"> </span></a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
                {{--<div class="col-md-4 about-left">--}}
                    {{--<img src="{{ URL::asset('images/abt-1.png') }}" alt=""/>--}}
                    {{--<h4>Jermy Cole</h4>--}}
                    {{--<h5>ARTIST</h5>--}}
                    {{--<ul>--}}
                        {{--<li><a href="#"><span class="fb"> </span></a></li>--}}
                        {{--<li><a href="#"><span class="sap"> </span></a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!--end-about-->
<!--start-what-->
<div class="what" id="work">
    <div class="container">
        <div class="what-main">
            <h3>What We Do?</h3>
            <div class="what-top">
                <div class="col-md-6 what-top-left">
                    <h4><span>We Do</span> Profession Graphics Design</h4>
                    <h5>LAYOUT, STORYBOARD,...</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                </div>
                <div class="col-md-6 what-top-right">
                    <img src="{{ URL::asset('images/service-1.png') }}" alt=""/>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="what-middle">
                <div class="col-md-6 what-middle-left">
                    <img src="{{ URL::asset('images/service-2.png') }}" alt=""/>
                </div>
                <div class="col-md-6 what-middle-right">
                    <h4><span>We Do</span> Profession Web Development</h4>
                    <h5>WORDPRESS,MAGENTO,...</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="what-top">
                <div class="col-md-6 what-top-left">
                    <h4><span>We Do</span> Profession Branding Design</h4>
                    <h5>LOGO, PACKAGING,...</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                </div>
                <div class="col-md-6 what-top-right">
                    <img src="{{ URL::asset('images/service-3.png') }}" alt=""/>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!--end-what-->
<!--start-project-->
<div class="project" id="services">
    <div class="col-md-3 project-left">
        <img src="{{ URL::asset('images/project-1.jpg') }}" alt=""/>
        <span> </span>
        <div class="project-bottom">
            <h4>FIRST PROJECT</h4>
            <label> </label>
            <p>Category 1,Category 2</p>
            <div class="p-btn">
                <a href="#">VIEW PROJECT</a>
            </div>
        </div>
    </div>
    <div class="col-md-3 project-left">
        <img src="{{ URL::asset('images/project-2.jpg') }}" alt=""/>
        <span> </span>
        <div class="project-bottom">
            <h4>SECOND PROJECT</h4>
            <label> </label>
            <p>Category 1,Category 2</p>
            <div class="p-btn">
                <a href="#">VIEW PROJECT</a>
            </div>
        </div>
    </div>
    <div class="col-md-3 project-left">
        <img src="{{ URL::asset('images/project-3.jpg') }}" alt=""/>
        <span> </span>
        <div class="project-bottom">
            <h4>THIRD PROJECT</h4>
            <label> </label>
            <p>Category 1,Category 2</p>
            <div class="p-btn">
                <a href="#">VIEW PROJECT</a>
            </div>
        </div>
    </div>
    <div class="col-md-3 project-left">
        <img src="{{ URL::asset('images/project-4.jpg') }}" alt=""/>
        <span> </span>
        <div class="project-bottom">
            <h4>FOURTH PROJECT</h4>
            <label> </label>
            <p>Category 1,Category 2</p>
            <div class="p-btn">
                <a href="#">VIEW PROJECT</a>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!--end-project-->
<!--start-price-->
<div class="price" id="pricing">
    <div class="container">
        <div class="price-main">
            <h3>The Good Price</h3>
            <div class="price-top">
                <div class="col-md-4 price-left">
                    <div class="price-left-one" id="hexagon">
                        <div class="price-left-two">
                            <h5>SAVING PACK</h5>
                            <p><sup>$</sup><span>15.99</span>/MO</p>
                            <a href="#"> </a>
                        </div>
                        <ul>
                            <li><a href="#">First Service</a></li>
                            <li><a href="#">Second Service</a></li>
                            <li><a href="#">Third Service</a></li>
                            <li><a href="#">Fourth Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 price-left">
                    <div class="price-left-middle" id="hexagon2">
                        <div class="price-left-top">
                            <h5>STANDARD PACK</h5>
                            <p><sup>$</sup><span>25.99</span>/MO</p>
                            <a href="#"> </a>
                        </div>
                        <ul>
                            <li><a href="#">First Service</a></li>
                            <li><a href="#">Second Service</a></li>
                            <li><a href="#">Third Service</a></li>
                            <li><a href="#">Fourth Service</a></li>
                            <li class="fth"><a href="#">Fifth Service</a></li>
                            <li class="fth"><a href="#">6th Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 price-left">
                    <div class="price-left-middle" id="hexagon1">
                        <div class="price-left-two">
                            <h5>ULTRA PACK</h5>
                            <p><sup>$</sup><span>35.99</span>/MO</p>
                            <a href="#"> </a>
                        </div>
                        <ul>
                            <li><a href="#">First Service</a></li>
                            <li><a href="#">Second Service</a></li>
                            <li><a href="#">Third Service</a></li>
                            <li><a href="#">Fourth Service</a></li>
                            <li class="fth"><a href="#">Fifth Service</a></li>
                            <li class="fth"><a href="#">6th+7th Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!--end-price-->
<!--start-quality-->
<div class="quality">
    <div class="container">
        <div class="quality-main">
            <h3>..With Good Quality</h3>
            <p>SEE OUR PROCESS</p>
            <div class="quality-top">
                <div class="quality-top-one">
                    <span> </span>
                    <div class="quality-bottom quality-bottom-rsh">
                        <label class="rsh"> </label>
                        <p>RESEARCH</p>
                    </div>
                </div>
                <div class="quality-top-one">
                    <span class="one"> </span>
                    <div class="quality-bottom quality-bottom-dsg">
                        <label class="dsg"> </label>
                        <p>DESIGN</p>
                    </div>
                </div>
                <div class="quality-top-one">
                    <span> </span>
                    <div class="quality-bottom quality-bottom-pro">
                        <label class="pro"> </label>
                        <p>PROTOTYPE</p>
                    </div>
                </div>
                <div class="quality-top-one">
                    <span class="one"> </span>
                    <div class="quality-bottom quality-bottom-imp">
                        <label class="imp"> </label>
                        <p>IMPLEMENT</p>
                    </div>
                </div>
                <div class="quality-top-one">
                    <span> </span>
                    <div class="quality-bottom quality-bottom-luh">
                        <label class="luh"> </label>
                        <p>LAUNCH</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!--end-quality-->
<!--start-clients-->
<div class="clients">
    <div class="container">
        <div class="clients-mian">
            <h3>Our Happy Clients</h3>
            <div  id="top" class="callbacks_container">
                <ul class="rslides" id="slider4">
                    <li>
                        <div class="clients-top">
                            <div class="clients-left">
                                <img src="{{ URL::asset('images/clients-1.png') }}" alt=""/>
                                <img src="{{ URL::asset('images/clients-1.png') }}" alt=""/>
                            </div>
                            <div class="clients-left">
                                <img src="{{ URL::asset('images/clients-2.png') }}" alt=""/>
                                <img src="{{ URL::asset('images/clients-2.png') }}" alt=""/>
                            </div>
                            <div class="clients-left">
                                <img src="{{ URL::asset('images/clients-3.png') }}" alt=""/>
                                <img src="{{ URL::asset('images/clients-3.png') }}" alt=""/>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </li>
                    <li>
                        <div class="clients-top">
                            <div class="clients-left">
                                <img src="{{ URL::asset('images/clients-3.png') }}" alt=""/>
                                <img src="{{ URL::asset('images/clients-3.png') }}" alt=""/>
                            </div>
                            <div class="clients-left">
                                <img src="{{ URL::asset('images/clients-2.png') }}" alt=""/>
                                <img src="{{ URL::asset('images/clients-2.png') }}" alt=""/>
                            </div>
                            <div class="clients-left">
                                <img src="{{ URL::asset('images/clients-1.png') }}" alt=""/>
                                <img src="{{ URL::asset('images/clients-1.png') }}" alt=""/>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </li>
                    <li>
                        <div class="clients-top">
                            <div class="clients-left">
                                <img src="{{ URL::asset('images/clients-3.png') }}" alt=""/>
                                <img src="{{ URL::asset('images/clients-3.png') }}" alt=""/>
                            </div>
                            <div class="clients-left">
                                <img src="{{ URL::asset('images/clients-1.png') }}" alt=""/>
                                <img src="{{ URL::asset('images/clients-1.png') }}" alt=""/>
                            </div>
                            <div class="clients-left">
                                <img src="{{ URL::asset('images/clients-2.png') }}" alt=""/>
                                <img src="{{ URL::asset('images/clients-2.png') }}" alt=""/>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="clients-bottom">
            <p>AND THEY SAYS</p>
            <div class="clients-bottom-top">
                <div class="clients-btm">
                    <div  id="top" class="callbacks_container">
                        <ul class="rslides" id="slider5">
                            <li>
                                <div class="clients-btm-one">
                                    <img src="{{ URL::asset('images/clients-4.png') }}" alt=""/>
                                    <h4>ANNA DOE</h4>
                                    <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</P>
                                </div>
                            </li>
                            <li>
                                <div class="clients-btm-one">
                                    <img src="{{ URL::asset('images/clients-5.png') }}" alt=""/>
                                    <h4>INGA NORTH</h4>
                                    <P>Magna aliquadolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</P>
                                </div>
                            </li>
                            <li>
                                <div class="clients-btm-one">
                                    <img src="{{ URL::asset('images/clients-6.png') }}" alt=""/>
                                    <h4>JACOB PARKER</h4>
                                    <P>Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</P>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end-clients-->
<!--Slider-Starts-Here-->
<script src="{{ URL::asset('js/responsiveslides.min.js') }}"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider4").responsiveSlides({
            auto: true,
            pager: true,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider5").responsiveSlides({
            auto: true,
            pager: true,
            nav: false,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
<!--End-slider-script-->
<!--start-blog-->
<div class="blog" id="blogs">
    <div class="container">
        <div class="blog-main">
            <h3>Our Blogs</h3>
            <div class="blog-top">
                <div class="col-md-4 blog-left">
                    <img src="{{ URL::asset('images/blog-1.png') }}" alt="">
                    <span> </span>
                    <h4>WHAT TO WRITE?</h4>
                </div>
                <div class="col-md-4 blog-left">
                    <img src="{{ URL::asset('images/blog-2.png') }}" alt="">
                    <span> </span>
                    <h4>WHAT TO WRITE?</h4>
                </div>
                <div class="col-md-4 blog-left">
                    <img src="{{ URL::asset('images/blog-3.png') }}" alt="">
                    <span> </span>
                    <h4>WHAT TO WRITE?</h4>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="b-btn">
                <a href="#">Read More!</a>
            </div>
        </div>
    </div>
</div>
<!--end-blog-->
<!--start-contact-->
<div class="touch" id="contact">
    <div class="container">
        <div class="touch-main">
            <h3>Get In Touch</h3>
            <div class="touch-top">
                <div class="col-md-6 touch-left">
                    <p>DROP US A LINE</p>
                    <form>
                        <input type="text" class="active" placeholder="Name" required="">
                        <input type="text" placeholder="Email" required="">
                        <input type="text" placeholder="Subject" required="">
                        <textarea placeholder="Message" required=""></textarea>
                        <div class="sub-button">
                            <input type="submit" value="SEND IT">
                        </div>
                    </form>
                </div>
                <div class="col-md-6 touch-right">
                    <div class="touch-right-bottom">
                        <div class="touch-right-top">
                            <span class="add"> </span>
                            <h4>123 MAIN STREET,<label>CITY, COUNTRY</label></h4>
                        </div>
                        <div class="touch-right-top">
                            <span class="mail"> </span>
                            <p><a href="emainto:example@email.com">kumamotos@163.com</a></p>
                        </div>
                        <div class="touch-right-top">
                            <span class="num"> </span>
                            <p>+86 137 1534 7194</p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!--end-contact-->
<!--start-footer-->
<div class="footer">
    <div class="container">
        <div class="footer-text">
            <p>TEMPLATE BY <a href="http://inkz.space"> KUMAMOTO'S</a></p>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            /*
             var defaults = {
             containerID: 'toTop', // fading element id
             containerHoverID: 'toTopHover', // fading element hover id
             scrollSpeed: 1200,
             easingType: 'linear'
             };
             */

            $().UItoTop({ easingType: 'easeOutQuart' });

        });
    </script>
    <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</div>
<!--end-footer-->
</body>
</html>