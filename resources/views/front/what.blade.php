@extends('front.master')

@section('content')
<!-- Page Title -->
<section class="page-title" style="background-image:url('{{asset('theme/assets/images/background/eye-1.jpg')}}')">
<div class="auto-container">
    <h2>What We Do</h2>
    <ul class="bread-crumb clearfix">
        <li><a href="#">Home</a></li>
        <li>Our Services</li>
    </ul>
</div>
</section>
<!-- End Page Title -->

   <!-- Services Page -->
   <section class="services-page">
    <div class="auto-container">
       <!-- Sec Title -->
       <div class="sec-title">
          <div class="sec-title_title">WHAT WE DO</div>
          <h2 class="sec-title_heading">We Deliver Quality Lab <br>  Services</h2>
       </div>
       <div class="row clearfix">
          <?php
               $Services = DB::table('services')->where('extra','0')->get();
           ?>
           @foreach ($Services as $Services)
                <!-- Service Block -->
                <div class="service-block_two col-lg-4 col-md-4 col-sm-6">
                    <div class="service-block_two-inner">
                    <div class="service-block-two_pattern" style="background-image:url('{{asset('theme/assets/images/background/pattern-9.png')}}')"></div>
                    <div class="service-block-two_pattern-two" style="background-image:url('{{asset('theme/assets/images/background/pattern-10.')}}')"></div>
                    <span class="service-block_two-icon flaticon-research"></span>
                    <h4 class="service-block_two-heading" style="min-height:100px;"><a href="{{url('/')}}/what-we-do/{{$Services->slung}}">{{$Services->title}}</a></h4>
                    <div class="service-block_two-text">{{$Services->content}}</div>
                    <a class="service-block_two-more" href="{{url('/')}}/what-we-do/{{$Services->slung}}">Read More</a>
                    </div>
                </div>
           @endforeach
       </div>
    </div>
 </section>
 {{-- Other Services --}}
<!-- Services Section Two -->
<section class="services-section-two">
    <div class="section-text variable-text"></div>
    <div class="auto-container">
        <div class="row clearfix">
        <!-- Sec Title -->
        <div class="sec-title">
            <div class="sec-title_title">More Services</div>
        </div>

          <!-- Blocks Column -->
            <div class="blocks-column col-lg-12 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="row clearfix">

                        <?php
                            $Services = DB::table('services')->where('extra','1')->get();
                            $Order = 1;
                        ?>
                        @foreach ($Services as $Services)
                        <!-- Service Block Two -->
                        <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="number-box">
                                    <div class="number">0{{$Order}}</div>
                                </div>
                                <h4><a href="#">{{$Services->title}}</a></h4>

                            </div>
                        </div>
                        <?php $Order == $Order++ ?>
                        @endforeach


                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Services Section Two -->
 {{--  --}}
 <!-- Testimonial Two -->
 <section class="testimonial-two style-two">
    <div class="testimonial-two_pattern" style="background-image:url('{{asset('theme/assets/images/background/pattern-15.png')}}')"></div>
    <div class="auto-container">
       <!-- Sec Title -->
       <div class="sec-title light centered">
          <div class="sec-title_title">Customer says</div>
          <h2 class="sec-title_heading">Testimonials</h2>
       </div>
       <a class="testimonial-two-reviews" href="https://maps.app.goo.gl/PsmQ2SyEhUHegEDS8">Read More Reviews</a>
       <div class="testimonial-outer">
        <!-- Client Testimonial Carousel -->
        <div class="client-testimonial-carousel owl-carousel owl-theme">
           <!-- Testimonial Two -->
           <div class="testimonial-block_two">
              <div class="testimonial-block_two-inner">

                 <div class="testimonial-block_two-text" style="max-width:600px; margin:0px auto;">Biopassion diagnostics has Quality lab tests with high standard of professionalism and work ethics by the staffs</div>
              </div>
           </div>
           <!-- Testimonial Two -->
        </div>
        <!--Product Thumbs Carousel-->
        <div class="client-thumb-outer">
           <div class="client-thumbs-carousel owl-carousel owl-theme">
              <div class="thumb-item">
                 {{-- <figure class="thumb-box"><img src="{{asset('theme/assets/images/resource/author-1.jpg')}}" alt=""></figure> --}}
                 <div class="author-info">
                    <div class="author-name">Lucy Kwamboka – Client</div>
                    <div class="location">Westlands Nairobi</div>
                 </div>
              </div>
           </div>
        </div>
     </div>
    </div>
 </section>
 <!-- End Testimonial Two -->
 <!-- Question One -->
 <section class="question-one style-two">
    <div class="auto-container">
       <div class="question-one-inner_container" style="background-image:url('{{asset('theme/assets/images/background/pattern-14.png')}}')">
          <div class="row clearfix">
             <!-- Title Column -->
             <div class="question-one_title-column col-lg-5 col-md-12 col-sm-12">
                <!-- Sec Title -->
                <div class="sec-title">
                   <div class="sec-title_title">CONTACT US</div>
                   <h2 class="sec-title_heading">Have questions? Get in touch!</h2>
                   <div class="sec-title_text">
                    We Provide convenient and efficient home services, delivering professional solutions directly to your doorstep for a seamless and personalized experience.
                   </div>
                </div>
                <ul class="question-one_contact-list">
                   <li><span class="icon fa-solid fa-phone fa-fw"></span>Medical Laboratory Center, Nairobi Kenya, Lower Kabete, At Gacio Stage</li>
                   <li><span class="icon fa-solid fa-envelope fa-fw"></span> <a href="mailto:info@biopassiondiagnostics.com">info@biopassiondiagnostics.com</a></li>
                   <li><span class="icon fa-solid fa-clock fa-fw"></span>Mon - Fri  8:00 - 6:30, <br> Sunday - CLOSED</li>
                </ul>
             </div>
             <!-- Form Column -->
             <div class="question-one_form-column col-lg-7 col-md-12 col-sm-12">
                <!-- Default Form -->
                <div class="default-form">
                   <form method="post" action="#">
                      <div class="row clearfix">
                         <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="username" placeholder="Name" required="">
                         </div>
                         <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="email" placeholder="Email" required="">
                         </div>
                         <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                            <input type="text" name="phone" placeholder="Phone" required="">
                         </div>
                         <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="department" placeholder="Department" required="">
                         </div>
                         <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <textarea class="" name="message" placeholder="how can i help you? Feel free to get in touch"></textarea>
                         </div>
                         <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <!-- Button Box -->
                            <div class="button-box align-items-center flex-wrap d-flex">
                               <button class="theme-btn btn-style-one">
                               <span class="btn-wrap">
                               <span class="text-one">get in touch</span>
                               <span class="text-two">get in touch</span>
                               </span>
                               </button>
                               <div class="check-box">
                                  <input type="checkbox" name="remember-password" id="type-1">
                                  <label for="type-1">I agree that my submitted data is collected and stored.</label>
                               </div>
                            </div>
                         </div>
                      </div>
                   </form>
                </div>
                <!-- End Default Form -->
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- End Question One -->
 <!-- Newsletter Section / Style Two -->
 <section class="newsletter-one style-two">
    <div class="auto-container">
       <div class="newsletter-one_inner-container" style="background-image:url('{{asset('theme/assets/images/background/pattern-7.png')}}')">
          <div class="newsletter-one_icon">
             <img src="{{asset('theme/assets/images/icons/envelope.png')}}" alt="" />
          </div>
          <div class="row clearfix">
             <!-- Title Column -->
             <div class="newsletter-one_title-column col-lg-6 col-md-12 col-sm-12">
                <h3 class="newsletter-one_title">Latest update <br> subscribe to our newsletter</h3>
             </div>
             <!-- Form Column -->
             <div class="newsletter-one_form-column col-lg-6 col-md-12 col-sm-12">
                <!-- Subscribe Form -->
                <div class="subscribe-form">
                   <form method="post" action="#">
                      <div class="form-group">
                         <input type="email" name="email" value="" placeholder="Your Email Address" required>
                         <button type="submit" class="theme-btn fa-solid fa-paper-plane fa-fw"></button>
                      </div>
                   </form>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- End Newsletter Section -->

@endsection
