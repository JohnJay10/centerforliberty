
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Center for Liberty</title>

<!-- Stylesheets -->
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link rel="icon" href="images/CFLogo.jpg" type="image/x-icon">

</head>
<body class="boxed_wrapper">

    <!-- Main Header -->
    <header class="main-header" id="header"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <!-- header-top -->
        <!--<div class="header-top bg-box">-->
        <!--    <div class="container">-->
        <!--        <div class="row">-->
        <!--            <div class="col-lg-3 col-md-4 col-sm-12 column">-->
        <!--                <div class="top-left">-->
        <!--                    <ul class="social-content">-->
                                
        <!--                        <li><a href="https://web.facebook.com/Centerforliberty"><i class="fa fa-facebook"></i></a></li>-->
        <!--                        <li><a href="https://twitter.com/@centre4liberty"><i class="fa fa-twitter"></i></a></li>-->
        <!--                        <li><a href="https://www.youtube.com/channel/UCToZwZMJyfFjLhmLrZU83PQ?view_as=subscriber"><i class="fa fa-youtube"></i></a></li>-->
        <!--                        <li><a href="#"><i class="fa fa-facebook-p"></i></a></li>-->
        <!--                    </ul>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="col-lg-9 col-md-8 col-sm-12 column">-->
        <!--                <div class="top-right" >-->
        <!--                    <ul class="right-content" >-->
        <!--                        <li><a href="#"><i class="fa fa-phone"> +234 803 062 0882, +234 703 771 7746, +234 906 750 6889</i>  -->
        <!--                        <i class=""></i>-->
                                 
        <!--                        <i class=""></i></a></li>-->
        <!--                        <li><a href="#"><i class="fa fa-envelope"></i>info@centerforlibertyng.com</a></li>-->
        <!--                    </ul>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div> header-top end -->

 <!-- header-bottom -->
 <div class="header-bottom">
            <div class="container" style="padding-left:10px; margin:0px;">
                <div class="row ">
                    <div class="col-lg-3 col-md-12 col-sm-12 columm content d-none d-sm-block">
                        <figure class="logo-box"><a href="{{ route('homepage') }}"><img src="images/icons/newlogo.jpeg" alt="" style="width:220px; margin-left:0%"></a></figure>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 column content d-sm-none" style="padding:10px;padding-left:30px;  margin:2px;>
                        <figure class="logo-box"><a href="{{ route('homepage') }}"><img src="images/icons/newlogo.jpeg" alt="" style="width:50%; align:center;"></a></figure>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 menu-column">
                        <div class="menu-area">
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header" style="position:absolute; z-index:10; top:-70px; right:0;background:white;width:50px;">
                                    <!-- Toggle Button -->      
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li><a href="{{ route('homepage') }}">Home</a>
                                        </li>
                                        <li class="dropdown"><a href="#project">Projects</a>
                                            <ul>
                                                <li><a href="{{route('elc')}}">Electoral Reform</a></li>
                                                <li><a href="{{route('digadv')}}">Digital Freedom Advocacy</a></li>
                                                <!--<li><a href="event-details.html">Event Details</a></li>-->
                                                <!--<li><a href="team.html">Our Volunteer</a></li>-->
                                               
                                            </ul>
                                        </li>
                                        <li><a href="{{route('aboutus')}}">About Us</a>
                                     
                                        <li><a href="{{route('blog')}}">Blog</a>
                                        </li>                              
                                        <li><a href="{{route('gallery')}}">Gallery</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 clearfix column">
                        <ul class="nav-right pull-right">
                            <!-- <li class="link"><a href="shop.html"><i class="flaticon-bag"></i></a></li> -->
                            <li class="donate-box"><button class="donate-box-btn">Donate Now</button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- header-bottom end -->

         <!--Sticky Header-->
         <div class="sticky-header" style="opacity:1;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 column">
                        <figure class="logo-box"><a href="index"><img src="images/icons/newlogo.jpeg" alt="" style="width:190px; margin-left:0%"></a></figure>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 menu-column">
                        <div class="menu-area">
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->      
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li ><a href="{{ route('homepage') }}">Home</a>
                                        </li>
                                        <li class="dropdown"><a href="#project">Projects</a>
                                            <ul>
                                                <li><a href="{{ route('elc') }}">Electoral Reform</a></li>
                                                <li><a href="{{ route('digadv') }}">Digital Freedom Advocacy</a></li>
                                                <!--<li><a href="event-details.html">Event Details</a></li>-->
                                                <!--<li><a href="team.html">Our Volunteer</a></li>-->
                                               
                                            </ul>
                                        </li>
                                        <li><a href="{{route('aboutus')}}">About-Us</a>
                                        </li>
                                        
                                        <li ><a href="{{route('blog')}}">Blog</a>
                                            
                                        </li>                              
                                        <li><a href="{{route('gallery')}}">Gallery</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- sticky-header end -->
    </header>
    <!-- End Main Header -->


    
        <main >
            @yield('content')
        </main>



      <!-- brand-section -->
      <section class="brand-section">
        <div class="container">
            <div class="content-box">
                <div class="five-item-carousel">
                    <figure class=""><a href="http://www.osiwa.org/"><img src="images/mimg/osiwaa.png" alt=""></a></figure>
                    <figure class=""><a href="https://voice.global/grantees/digital-freedom-advocacy/"><img src="images/dfr/vlog.jpg" alt=""></a></figure>
                    <figure class=""><a href="#"><img src="images/mimg/osiwaa.png" alt=""></a></figure>
                    <figure class=""><a href="https://voice.global/grantees/digital-freedom-advocacy/"><img src="images/dfr/vlog.jpg" alt=""></a></figure>
                    <figure class=""><a href="#"><img src="images/mimg/osiwaa.png" alt=""></a></figure>
                    <figure class=""><a href="https://voice.global/grantees/digital-freedom-advocacy/"><img src="images/dfr/vlog.jpg" alt=""></a></figure>
                </div>
            </div>
        </div>
    </section>
    <!-- brand-section end -->



<!-- subscribe-section -->
<section class="subscribe-section">
        <div class="container">
            <div class="subscribe-content">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                        <div class="subscribe-title">Subscribe To Our Newsletter</div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                        <div class="subscribe-form">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Your Email" required="">
                                    <button type="submit" class="theme-btn">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe-section end -->




        <!-- main-footer -->
        <footer class="main-footer">
        <div class="container">
            <div class="footer-content">
                <div class="row" style="text-align:center;">
                    <div class="col-lg-4 col-md-6 col-sm-12 footer-column" >
                        <div class="logo-widget footer-widget">
                            <figure class="logo-box"><a href=""><h3 class ="footer-title">Our Vision</h3></a></figure>
                            <div class="text">
                                <p style="text-align:justify">To organize and mobilize the masses of the people towards a social and political paradigm shift in every part of Nigeria through a diligent pursuit of values reorientation, institutional reforms, social reengineering, street advocacy and non-violent direct action.
</p>
                            </div>
                            <ul class="footer-social">
                                <li><a href="https://web.facebook.com/Centerforliberty"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/@centre4liberty"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="//instagram.com/centerforliberty/"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="//www.youtube.com/channel/UCToZwZMJyfFjLhmLrZU83PQ?view_as=subscriber"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 offset-lg-2 footer-column">
                        <div class="service-widget footer-widget">
                            <div class="footer-title">PROJECTS</div>
                            <ul class="list">
                                <li><a href="{{ route('digadv') }}">Digital Freedom Advocacy</a></li>
                                <li><a href="{{ route('elc') }}">Electoral Reform Advocacy</a></li>
                                <!--<li><a href="#"></a></li>-->
                                <!--<li><a href="#">Pad a girl/lady</a></li>-->
                                <!--<li><a href="#">Help Orphan</a></li>-->
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-widget">
                        <div class="contact-widget footer-widget">
                            <div class="footer-title">CONTACT</div>
                            <div class="text">
                                <p>Nwaza Close, off Idimba Street, Off Abidan Street, Wuse Zone 3. Abuja, Nigeria</p>
                                <p>+234 803 062 0882, +234 703 771 7746, +234 906 750 6889</p>
                                <p>info@centerforliberty.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- main-footer end -->


    <!-- footer-bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 column">
                    <div class="copyright"><a href="#">Center for Liberty</a> &copy; 2020 All Right Reserved</div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 column">
                    <ul class="footer-nav">
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottome end -->


<!-- donate popup -->
<div id="donate-popup" class="donate-popup">
        <div class="close-donate"><span class="fa fa-close"></span></div>
        <div class="popup-inner">
            <div class="container">
                <div class="donate-form-area">
                    <h2>Donation Information</h2>
                    <h4>You can transfer to these account:</h4>
                    <form  action="" class="donate-form default-form">
                        <ul class="chicklet-list clearfix">
                        <li>
                                <input type="radio" id="donate-amount-4" name="donate-amount" />
                                <label for="donate-amount-4">GTBank Naira<br>Acc Name: Center for Liberty <br>Acc Number: 0555309857</label>
                            </li>
                            <li>
                                <input type="radio" id="donate-amount-4" name="donate-amount" />
                                <label for="donate-amount-4">GTBank Dollar<br>Acc Name: Center for Liberty <br>Acc Number: 0555309864</label>
                            </li>
                            <li>
                                <input type="radio" id="donate-amount-4" name="donate-amount" />
                                <label for="donate-amount-4">GTBank Pounds<br>Acc Name: Center for Liberty <br>Acc Number: 0555309871</label>
                            </li>
                            <li>
                                <input type="radio" id="donate-amount-4" name="donate-amount" />
                                <label for="donate-amount-4">GTBank Euro<br>Acc Name: Center for Liberty <br>Acc Number: 0555309888</label>
                            </li>
                        </ul>
                        <h3>Donor Information</h3>
                        <div class="form-bg">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12">           
                                    <div class="form-group">
                                        <p>Your Name*</p>
                                        <input type="text" name="name" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <p>Email*</p>
                                        <input type="text" name="email" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <p>Address*</p>
                                        <input type="text" name="address" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <p>Phn Num*</p>
                                        <input type="text" name="phone" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="payment-option">
                            <li>
                                <h4>Choose your payment method:</h4>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <label>
                                        <input name="pay-us" type="checkbox">
                                        <span>Paypal</span>
                                    </label>
                                </div>
                            </li>
                            <li>
                               <div class="checkbox">
                                    <label>
                                        <input name="pay-us" type="checkbox">
                                        <span>Offline Donation</span>
                                    </label>
                                </div> 
                            </li>
                            <li>
                                <div class="checkbox">
                                    <label>
                                        <input name="pay-us" type="checkbox">
                                        <span>Credit Card</span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <label>
                                        <input name="pay-us" type="checkbox">
                                        <span>Debit Card</span>
                                    </label>
                                </div>
                            </li>
                        </ul>
                        <div class="center"><button class="theme-btn" type="submit">Donate Now</button></div>          
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- donate popup -->



    <!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fa fa-long-arrow-up"></span>
</button>





</body>

<!--jquery js -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/wow.js"></script>
<script src="js/validation.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZQiiFTOGpm2qHVZmZY1s-aEnmHDhqKgk"></script>
<script src="js/html5lightbox/html5lightbox.js"></script>
<script src="js/gmaps.js"></script>
<script src="js/map-helper.js"></script>
<script src="js/isotope.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/jquery.countTo.js"></script>
<!-- main-js -->
<script src="js/script.js"></script>

</body><!-- End of .page_wrapper -->

</html>
