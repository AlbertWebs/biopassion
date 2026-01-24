@extends('front.master')

@section('content')


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
                   @include('components.arithmetic-challenge')
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
