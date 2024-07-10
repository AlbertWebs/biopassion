@extends('front.master')

@section('content')

<!-- Page Title -->
<section class="page-title" style="background-image:url('{{asset('theme/assets/images/background/3.jpg')}}')">
    <div class="auto-container">
        <h2>Home Sample Collection</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="{{url('/')}}">Home</a></li>
            <li>Home Sample Collection</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->
<section class="privacy-section">
    <div class="auto-container">
        <!-- Privacy Content -->
        <div class="privacy-content">
            <div class="privacy-content">
                <h3>How to Book a Blood Test at Home with Biopassion Diagnostics</h3>
                <p>
                    Booking a blood test at home has never been easier, thanks to Biopassion Diagnostics. We understand the importance of convenience and comfort when it comes to managing your health. Here’s a simple guide on how to book a blood test at home with us.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Process One -->
<section class="process-one" style="padding-top:80px; padding-bottom:80px;">
    <div class="auto-container">
        <div class="row clearfix">





            <!-- Process Block -->
            <div class="process-block col-lg-6 col-md-12 col-sm-12">
                <div class="process-block_inner">
                    <div class="process-block_content">
                        <div class="process-block_title">
                            <span class="process-block_number">step 01</span>
                            <h3 class="process-block_heading"> Visit Our Website</h3>
                        </div>
                        <div class="process-block_text">
                            Begin by navigating to the Biopassion Diagnostics website. Our homepage features a straightforward layout designed to help you find the services you need quickly. Look for the 'Book a Blood Test' option prominently displayed. Clicking this option will take you to our test booking section.
                        </div>
                    </div>
                    <div class="process-block_image">
                        <span class="process-block_icon flaticon-send-mail"></span>
                        <img src="{{asset('uploads/Visit Website Phone Mockup Instagram Post.png')}}" alt="" />
                    </div>
                </div>
            </div>

            <!-- Process Block -->
            <div class="process-block col-lg-6 col-md-12 col-sm-12">
                <div class="process-block_inner">
                    <div class="process-block_content">
                        <div class="process-block_title">
                            <span class="process-block_number">step 02</span>
                            <h3 class="process-block_heading">Choose Your Test and Schedule</h3>
                        </div>
                        <div class="process-block_text">
                            Browse through our extensive list of blood tests, each accompanied by a detailed description to help you understand their purpose and benefits. Select the test(s) you need based on your health requirements. After choosing your test, you’ll be prompted to schedule an appointment. Our flexible scheduling system allows you to pick a date and time that fits your lifestyle, whether it's early morning, late evening, or even on weekends.
                        </div>
                    </div>
                    <div class="process-block_image">
                        <span class="process-block_icon flaticon-medical-history"></span>
                        <img src="{{asset('uploads/Purple-Blue-Cute-Weekly-Calendar.jpg')}}" alt="" />
                    </div>
                </div>
            </div>

            <!-- Process Block -->
            <div class="process-block col-lg-6 col-md-12 col-sm-12">
                <div class="process-block_inner">
                    <div class="process-block_content">
                        <div class="process-block_title">
                            <span class="process-block_number">step 03</span>
                            <h3 class="process-block_heading">Provide Your Details and Confirm</h3>
                        </div>
                        <div class="process-block_text">
                            Enter your personal information, including your name, contact number, and home address. This ensures our phlebotomist can reach you without any issues. After entering your details, review your appointment summary to make sure everything is correct. Once you confirm your booking, you’ll receive a confirmation email containing all the necessary information, including your appointment date, time, and the selected tests.
                        </div>
                    </div>
                    <div class="process-block_image">
                        <span class="process-block_icon flaticon-ambulance"></span>
                        <img src="{{asset('theme/assets/images/resource/process-1.jpg')}}" alt="" />
                    </div>
                </div>
            </div>

            <!-- Process Block -->
            <div class="process-block col-lg-6 col-md-12 col-sm-12">
                <div class="process-block_inner">
                    <div class="process-block_content">
                        <div class="process-block_title">
                            <span class="process-block_number">step 04</span>
                            <h3 class="process-block_heading">Get Tested and Receive Results</h3>
                        </div>
                        <div class="process-block_text">
                            On the day of your appointment, a certified phlebotomist from Biopassion Diagnostics will arrive at your home at the scheduled time. They will perform the blood draw using sterile equipment, ensuring your comfort and safety throughout the process. After the blood draw, your samples will be transported to our advanced laboratory for analysis. You can expect to receive your results via email or through our secure online portal within a few days, along with a detailed report explaining your results.
                        </div>
                    </div>
                    <div class="process-block_image">
                        {{-- <span class="process-block_icon flaticon-implant"></span> --}}
                        {{-- <img src="{{asset('theme/assets/images/resource/process-4.jpg')}}" alt="" /> --}}
                    </div>
                </div>
            </div>



        </div>
    </div>
</section>
<!-- End Process One -->
<!-- Contact Form One -->
<section class="contact-form-one" id="contact">
    <div class="auto-container">
       <div class="inner-container" style="background-image:url('{{asset('theme/assets/images/background/pattern-32.png')}}')">
          <!-- Sec Title -->
          <div class="sec-title centered">
             <div class="sec-title_title">Booking Form</div>
             <h2 class="sec-title_heading">Home Sample Collections</h2>
          </div>
          <!-- Default Form -->
          <div class="default-form contact-form">
             <form method="post" action="{{route('book-home-sample-collection-post')}}" id="contact-form">
                @csrf
                <div class="row clearfix">
                   <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                      <input type="text" name="name" placeholder="Name" required="">
                   </div>
                   <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                      <input type="text" name="email" placeholder="Email" required="">
                   </div>
                   <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                    <input type="text" name="phone" placeholder="Phone" required="">
                   </div>
                   <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                    <input type="text" name="location" placeholder="Location/Estate" required="">
                 </div>
                 <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                    <input type="text" name="apartment" placeholder="Apartment Number" required="">
                 </div>
                   <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                      <textarea class="" name="message" placeholder="Some notes here"></textarea>
                   </div>
                   <div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
                      <!-- Button Box -->
                      <div class="button-box">
                         <button class="theme-btn btn-style-one">
                         <span class="btn-wrap">
                         <span class="text-one">Book Now</span>
                         <span class="text-two">Book Now</span>
                         </span>
                         </button>
                      </div>
                   </div>
                   <div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
                      <div class="check-box">
                         <input type="checkbox" name="remember-password" id="type-1">
                         <label for="type-1">I agree that my submitted data is collected and stored.</label>
                      </div>
                   </div>
                </div>
             </form>
          </div>
          <!-- End Default Form -->
       </div>
    </div>
 </section>
 <!-- End Contact Form One -->


@endsection
