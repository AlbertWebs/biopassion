@extends('front.master')

@section('content')

<!-- Page Title -->
<section class="page-title" style="background-image:url('{{asset('theme/assets/images/background/eye-1.jpg')}}')">
<div class="auto-container">
    <h2>Testing for conditions</h2>
    <ul class="bread-crumb clearfix">
       <a href="#">Home</a><br>
       Patients<br>
       Get Tested<br>
       Testing for conditions<br>
    </ul>
</div>
</section>
<!-- End Page Title -->

<!-- Sidebar Page Container -->
<div class="sidebar-page-container left-sidebar">
    <div class="auto-container">
       <div class="row clearfix">

          <div class="content-side col-lg-10 col-md-12 col-sm-12" style="margin:0 auto">
             <div class="department-detail">
                <div class="inner-box">
                   <div class="image">
                      <img style="border-radius:15px" src="{{asset('uploads/pexels-artempodrez-5726789.jpg')}}" alt="" />
                   </div>
                   <h3>Testing For Conditions</h3>
                   <div class="bold-text">
                       Gain confidence and clarity through our comprehensive testing services, which offer valuable insights into your preventive and treatment options.
                   </div>
                   {{--  --}}
                   <p>
                        Taking proactive steps for your health by getting tested is one of the smartest decisions you can make. At Biopassion Diagnostics, we are here to provide you with the essential information and reassurance needed to make informed health choices. Gain confidence and clarity through our comprehensive testing services, which offer valuable insights into your preventive and treatment options.

                        Biopassion Diagnostics offers a wide range of tests, including:<br><br>



                           Allergy and asthma<br>
                           Cancer<br>
                           Chronic disease<br>
                           Digestive health<br>
                           Heart health<br>
                           Hereditary cancer<br>
                           Infectious disease<br>
                           Men's health<br>
                           Neurological disease<br>
                           Women's health<br>

                    </p>

                   {{--  --}}


                   <p><strong> </strong> Get the best Laboratory Services from Biopassion Diagnosis at your very convinience</p>
                </div>
             </div>
          </div>
       </div>
    </div>
</div>









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
              <span class="icon fa-solid fa-phone fa-fw"></span>Medical Laboratory Center, Nairobi Kenya, Lower Kabete, At Gacio Stage<br>
              <span class="icon fa-solid fa-envelope fa-fw"></span> <a href="mailto:info@biopassiondiagnostics.com">info@biopassiondiagnostics.com</a><br>
              <span class="icon fa-solid fa-clock fa-fw"></span>Mon - Fri  8:00 - 6:30, <br> Sunday - CLOSED<br>
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
                     @include('components.arithmetic-challenge')
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
                     @include('components.arithmetic-challenge')
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
