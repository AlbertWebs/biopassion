@extends('front.master')

@section('content')

<!-- Page Title -->
<section class="page-title" style="background-image:url('{{asset('theme/assets/images/background/eye-1.jpg')}}')">
<div class="auto-container">
    <h2>Health Checkup</h2>
    <ul class="bread-crumb clearfix">
        <li><a href="#">Home</a></li>
        <li>Patients</li>
        <li>Biopassion OnDemand Tests</li>
        <li>Health Checkup</li>
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

                   <h3>Health Checkup</h3>
                   <div class="bold-text">
                    Welcome to Biopassion Diagnostics, where your health and comfort are our top priorities. Our goal is to provide you with a seamless and supportive experience from start to finish. Whether you're visiting us for the first time or you're a returning patient, we are here to ensure your visit is smooth and efficient. Read on to learn how you can prepare for your appointment and make the most of our services.
                   </div>
                   {{--  --}}
                   <p>
                    Arrive prepared for a smoother visit at Biopassion Diagnostics Patient Service Center to call/WhatsApp us at <a href="tel:+254704150556">0704 150 555</a> for enquiry about your specimen collection.

                    <br><br>
                    For our visually impaired patients, we offer accessible check-in options. You can use your mobile device to complete the check-in process. Alternatively, when you arrive, simply swipe three fingers in any direction across our kiosk screen to check in. Our staff is also available to assist you with any additional needs to ensure a seamless experience.
                    <br><br>
                    At Biopassion Diagnostics, we are committed to making your visit as smooth and comfortable as possible. Arriving prepared can significantly enhance your experience. If your test requires fasting or you are bringing a child for a lab visit, please review our specific preparation guidelines to ensure everything goes smoothly. Our detailed instructions will help you know exactly what to expect, minimizing any potential delays or discomfort.
                    <br><br>
                    We're here to support you every step of the way. Whether it's your first visit or a routine check, Biopassion Diagnostics is dedicated to providing exceptional care and ensuring you have the best experience possible.
                    </p>

                   {{--  --}}


                   <p><strong> </strong> Get the best Laboratory Services from Biopassion Diagnosis at your very convinience</p>
                </div>
             </div>
          </div>
       </div>
    </div>
</div>



@endsection
