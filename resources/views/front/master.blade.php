<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Merit Medical Business HTML-5 Template | Homepage 09</title>
      <!-- Stylesheets -->
      <link href="{{asset('theme/assets/css/bootstrap.css')}}" rel="stylesheet">
      <link href="{{asset('theme/assets/css/style.css')}}" rel="stylesheet">
      <link href="{{asset('theme/assets/css/responsive.css')}}" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
      <!--Color Switcher Mockup-->
      <link href="{{asset('theme/assets/css/color-switcher-design.css')}}" rel="stylesheet">
      <!-- Color Themes -->
      <link id="theme-color-file" href="{{asset('theme/assets/css/color-themes/default-color.css')}}" rel="stylesheet">
      <link rel="shortcut icon" href="{{asset('uploads/logo/logo.png')}}" type="image/x-icon">
      <link rel="icon" href="{{asset('uploads/logo/logo.png')}}" type="image/x-icon">
      <!-- Responsive -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
      <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js')}}"></script><![endif]-->
      <!--[if lt IE 9]><script src="js/respond.js')}}"></script><![endif]-->
   </head>
   <body class="hidden-bar-wrapper">
      <div class="page-wrapper">
         <!-- Preloader -->
         <div class="preloader"></div>
         <!-- End Preloader -->
         <!-- Header Style One -->
         <header class="main-header header-style-two">
            <!-- Header Top -->
            <div class="header-top">
               <div class="auto-container">
                  <div class="inner-container">
                     <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <ul class="header_info-list">
                           <li><span class="icon fa-solid fa-phone fa-fw"></span>Call Anytime: <a href="tel:+254 704 150555">+254 704 150555</a></li>
                           <li><span class="icon fa-solid fa-envelope fa-fw"></span><a href="mailto:info@biopassiondiagnostics.com">info@biopassiondiagnostics.com</a></li>
                        </ul>
                        <!-- Social Box -->
                        <ul class="header-social_box-two">
                           <li><a href="https://www.linkedin.com/" class="fa-brands fa-linkedin fa-fw"></a></li>
                           <li><a href="https://www.facebook.com/" class="fa-brands fa-facebook-f fa-fw"></a></li>
                           <li><a href="https://www.twitter.com/" class="fa-brands fa-twitter fa-fw"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <!-- End Header Top -->
            <!-- Header Upper -->
            <div class="header-upper">
               <div class="auto-container">
                  <div class="inner-container clearfix">
                     <!-- Logo Box -->
                     <div class="logo-box">
                        <div class="logo"><a href="{{url('/')}}"><img  src="{{asset('uploads/logo/logo.png')}}" alt="" title=""></a></div>
                     </div>
                     <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="nav-outer">
                           <!-- Main Menu -->
                           <nav class="main-menu navbar-expand-md">
                              <div class="navbar-header">
                                 <!-- Toggle Button -->
                                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                 <span class="icon-bar"></span>
                                 <span class="icon-bar"></span>
                                 <span class="icon-bar"></span>
                                 </button>
                              </div>
                              <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                 <ul class="navigation clearfix">
                                    <li class="current">
                                       <a href="#">Home</a>
                                    </li>


                                    <li class="dropdown">
                                    <a href="#">Who we are</a>
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Our Team</a></li>
                                        <li><a href="#">Our Values</a></li>
                                    </ul>
                                    </li>

                                    <li class="dropdown">
                                       <a href="#">What We Do</a>
                                       <ul>
                                          <li><a href="#">Service 1</a></li>
                                          <li><a href="#">Service 1</a></li>
                                          <li><a href="#">Service 1</a></li>
                                       </ul>
                                    </li>
                                    <li>
                                        <a href="#">Our Clientele</a>
                                     </li>
                                     <li>
                                        <a href="{{route('contact-us')}}">Contact Us</a>
                                     </li>
                                 </ul>
                              </div>
                           </nav>
                        </div>
                        <!-- Main Menu End-->
                        <div class="outer-box d-flex align-items-center flex-wrap">
                           <div class="appointmeny_button-box">
                              <a href="#" class="theme-btn btn-style-one">
                              <span class="btn-wrap">
                              <span class="text-one">Schedule Appointment</span>
                              <span class="text-two">Schedule Now</span>
                              </span>
                              </a>
                           </div>
                           <!-- Search Btn -->
                           <div class="search-box-btn search-box-outer"><span class="icon fa fa-search"></span></div>
                           <!-- Nav Btn -->
							<div class="nav-btn navSidebar-button fa-regular fa-user fa-fw"></div>

                           <span class="hamburger">
                           <span class="top-bun"></span>
                           <span class="meat"></span>
                           <span class="bottom-bun"></span>
                           </span>
                        </div>
                        <!-- Mobile Navigation Toggler -->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                     </div>
                  </div>
               </div>
            </div>
            <!--End Header Upper-->
            <!-- Sticky Header  -->
            <div class="sticky-header">
               <div class="auto-container">
                  <div class="inner-container d-flex justify-content-between align-items-center flex-wrap">
                     <!-- Logo -->
                     <div class="logo">
                        <a href="{{url('/')}}" title=""><img style="width:80px; height:100%" src="{{asset('uploads/logo/logo.png')}}" alt="" title=""></a>
                     </div>
                     <!-- Right Box -->
                     <div class="right-box">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                           <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                        <!-- Main Menu End-->
                        <!-- Mobile Navigation Toggler -->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                     </div>
                  </div>
               </div>
               <!-- End Sticky Menu -->
            </div>
            <!-- Mobile Menu  -->
            <div class="mobile-menu">
               <div class="menu-backdrop"></div>
               <div class="close-btn"><span class="icon flaticon-close"></span></div>
               <nav class="menu-box">
                  <div class="nav-logo"><a href="{{url('/')}}"><img src="assets/images/logo-small.png" alt="" title=""></a></div>
                  <div class="menu-outer">
                     <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                  </div>
               </nav>
            </div>
            <!-- End Mobile Menu -->
         </header>
         <!-- End Main Header -->

         @yield('content')
{{--
         <section class="footer-style-two">
            <div class="auto-container">
               <div class="widget-content">
                  <div class="main-footer_logo">
                     <a href="{{url('/')}}"><img src="assets/images/footer-logo.png" alt="" /></a>
                  </div>
                  <div class="main-footer_text">It helps designers plan out where the content will sit, the content <br> to be written and approved.</div>
                  <ul class="footer-three_nav">
                     <li><a href="#">Emergency</a></li>
                     <li><a href="#">Psychotherapy</a></li>
                     <li><a href="#">Hourly Care</a></li>
                     <li><a href="#">Respite Home</a></li>
                     <li><a href="#">Advanced Care</a></li>
                     <li><a href="#">Laboratory</a></li>
                  </ul>
               </div>
               <div class="footer-three_copyright">Copyright 2024 merit All Rights Reserved</div>
            </div>
         </section> --}}
         <footer class="main-footer" style="background-image: url('{{asset('theme/assets/images/background/pattern-8.png')}}')">
            <!-- Vector One -->
            <span class="footer-vector_one">
            <img style="max-width:300px" src="{{url('/')}}/uploads/microscope.png" alt="" />
            </span>
            <!-- Vector Two -->
            <span class="footer-vector_two">
            <img src="{{asset('theme/assets/images/resource/footer-vector-2.png')}}" alt="" />
            </span>
            <div class="auto-container">
               <!--Widgets Section-->
               <div class="main-footer_widgets">
                  <div class="row clearfix">
                     <!--big column-->
                     <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
                           <!--Footer Column-->
                           <div class="main-footer_column col-lg-12 col-md-6 col-sm-12">
                              <div class="footer-widget logo-widget">
                                <h4 class="main-footer_title">About Us</h4>
                                 <div class="main-footer_text">
                                    We believe our passion for surpassing expectations by putting the patient/clients first in everything we do and commitment to providing high quality, utmost accurate and timely medical laboratory services is one of the key reasons in our diagnostic excellence and reliability.
                                 </div>
                                 <!-- Social Box -->
                                 <ul class="footer-social_box">
                                    <li><a href="https://www.twitter.com/" class="fa-brands fa-twitter fa-fw"></a></li>
                                    <li><a href="https://www.facebook.com/" class="fa-brands fa-facebook-f fa-fw"></a></li>
                                    <li><a href="https://dribbble.com/" class="fa-brands fa-dribbble fa-fw"></a></li>
                                    <li><a href="https://www.linkedin.com/" class="fa-brands fa-linkedin fa-fw"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <!--Footer Column-->
                        </div>
                     </div>
                     <!--big column-->
                     <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
                           <!--Footer Column-->
                           <div class="main-footer_column col-lg-5 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                               <h4 class="main-footer_title">Service</h4>
                               <ul class="main-footer_list">
                                  <li><a href="#">Emergency</a></li>
                                  <li><a href="#">Psychotherapy</a></li>
                                  <li><a href="#">Hourly Care</a></li>
                                  <li><a href="#">Respite Home</a></li>
                                  <li><a href="#">Advanced Care</a></li>
                                  <li><a href="#">Laboratory</a></li>
                               </ul>
                            </div>
                         </div>
                           <!--Footer Column-->
                           <div class="main-footer_column col-lg-7 col-md-6 col-sm-12">
                              <div class="footer-widget contact-widget">
                                 <h4 class="main-footer_title">Contact Info</h4>
                                 <ul class="main-footer_contact-list">
                                    <li><span class="icon fa-solid fa-map-marker fa-fw"></span><a href="https://maps.app.goo.gl/c8aBRXgMcjZepZeB9">Medical Laboratory Center, Nairobi Kenya, Lower Kabete, At Gacio Stage </a> </li>
                                    <li><span class="icon fa-solid fa-envelope fa-fw"></span> <a href="mailto:info@biopassiondiagnostics.com">info@biopassiondiagnostics.com</a></li>
                                    <li><span class="icon fa-solid fa-clock fa-fw"></span>Mon - Sat 8:00 - 6:30, <br> Sunday - CLOSED</li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Footer Bottom -->
               <div class="main-footer_bottom">
                  <div class="d-flex justify-content-between align-items-center flex-wrap">
                     <div class="footer_copyright">Copyright &copy; {{date('Y')}} Biopassion Diagnostics Company | All Rights Reserved | Powered By <a href="https://designekta.com">Designekta Studios</a> </div>
                     <!-- Scroll To Top -->
                     <div class="footer-scroll_top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>
                  </div>
               </div>
            </div>
         </footer>
         <!-- Search Popup -->
         <div class="search-popup">
            <div class="color-layer"></div>
            <button class="close-search"><span class="fa fa-solid fa-xmark fa-fw"></span></button>
            <form method="post" action="https://html.themerange.net/merit/merit/blog.html">
               <div class="form-group">
                  <input type="search" name="search-field" value="" placeholder="Search Here" required="">
                  <button class="fa fa-solid fa-magnifying-glass fa-fw" type="submit"></button>
               </div>
            </form>
         </div>
         <!-- End Search Popup -->
      </div>
      <!-- End PageWrapper -->

      <!-- Scroll To Top -->
      <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>
      <script src="{{asset('theme/assets/js/jquery.js')}}"></script>
      <script src="{{asset('theme/assets/js/popper.min.js')}}"></script>
      <script src="{{asset('theme/assets/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('theme/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{asset('theme/assets/js/appear.js')}}"></script>
      <script src="{{asset('theme/assets/js/parallax.min.js')}}"></script>
      <script src="{{asset('theme/assets/js/tilt.jquery.min.js')}}"></script>
      <script src="{{asset('theme/assets/js/jquery.paroller.min.js')}}"></script>
      <script src="{{asset('theme/assets/js/owl.js')}}"></script>
      <script src="{{asset('theme/assets/js/wow.js')}}"></script>
      <script src="{{asset('theme/assets/js/odometer.js')}}"></script>
      <script src="{{asset('theme/assets/js/touchspin.js')}}"></script>
      <script src="{{asset('theme/assets/js/parallax-scroll.js')}}"></script>
      <script src="{{asset('theme/assets/js/validate.js')}}"></script>
      <script src="{{asset('theme/assets/js/magnific-popup.min.js')}}"></script>
      <script src="{{asset('theme/assets/js/nav-tool.js')}}"></script>
      <script src="{{asset('theme/assets/js/jquery-ui.js')}}"></script>
      <script src="{{asset('theme/assets/js/main.js')}}"></script>
      <script src="{{asset('theme/assets/js/script.js')}}"></script>
      <script src="{{asset('theme/assets/js/color-settings.js')}}"></script>
   </body>
</html>
