@extends('front.master')

@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image:url('{{asset('theme/assets/images/background/eye-1.jpg')}}')">
        <div class="auto-container">
           <h2>Contact Us</h2>
           <ul class="bread-crumb clearfix">
              <li><a href="index.html">Home</a></li>
              <li>Contact Us</li>
           </ul>
        </div>
     </section>
     <!-- End Page Title -->
     <!-- Contact One -->
     <section class="contact-one">
        <div class="auto-container">
           <!-- Sec Title -->
           <div class="sec-title centered">
              <div class="sec-title_title">CONTACT INFO</div>
              <h2 class="sec-title_heading">Get in touch!</h2>
              <div class="sec-title_text">
                We believe our passion for surpassing expectations by putting
                <br>
                the patient/clients first in everything we do and commitment to providing high quality,
                <br>
                utmost accurate and timely medical laboratory services is one of the key reasons in our diagnostic excellence and reliability.
            </div>
           </div>
           <div class="row clearfix">
              <!-- Contact Info Block -->
              <div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
                 <div class="contact-info-block_inner">
                    <span class="contact-info-block_icon flaticon-placeholder"></span>
                    <h4 class="contact-info-block_heading"> Address</h4>
                    <div class="contact-info-block_text">Nairobi, Kenya Location: Gachie, Riva at Sunset stage</div>
                 </div>
              </div>
              <!-- Contact Info Block -->
              <div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
                 <div class="contact-info-block_inner">
                    <span class="contact-info-block_icon flaticon-send-mail"></span>
                    <h4 class="contact-info-block_heading">Email</h4>
                    <div class="contact-info-block_text"><a href="mailto:info@biopassiondiagnostics.co.ke">info@biopassiondiagnostics.co.ke</a><br> <a href="mailto:info@biopassiondiagnostics.co.ke">info@biopassiondiagnostics.co.ke</a></div>
                 </div>
              </div>
              <!-- Contact Info Block -->

              <!-- Contact Info Block -->
              <div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
                 <div class="contact-info-block_inner">
                    <span class="contact-info-block_icon flaticon-telephone"></span>
                    <h4 class="contact-info-block_heading">Phone</h4>
                    <div class="contact-info-block_text"><a href="tel:+254 704 150 555">+254 704 150 555</a><br> <a href="tel:0202 150 555">0202 150 555</a></div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- End Contact One -->
     <!-- Map One -->
     <section class="map-one">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.542536602135!2d36.72797!3d-1.238903!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f18ee77efc9d9%3A0x392d8ef2b51a3708!2sBIOPASSION%20DIAGNOSTICS%20MEDICAL%20LABORATORY%20CENTER!5e0!3m2!1sen!2ske!4v1707915385452!5m2!1sen!2ske" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     </section>
     <!-- End Map One -->
     <!-- Contact Form One -->
     <section class="contact-form-one" id="contact">
        <div class="auto-container">
           <div class="inner-container" style="background-image:url(assets/images/background/pattern-32.png)">
              <!-- Sec Title -->
              <div class="sec-title centered">
                 <div class="sec-title_title">CONTACT US</div>
                 <h2 class="sec-title_heading">Have questions? <br> Get in touch!</h2>
              </div>
              <!-- Default Form -->
              <div class="default-form contact-form">
                 <form method="post" action="https://html.themerange.net/merit/merit/sendemail.php" id="contact-form">
                    <div class="row clearfix">
                       <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                          <input type="text" name="username" placeholder="Name" required="">
                       </div>
                       <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                          <input type="text" name="email" placeholder="Email" required="">
                       </div>
                       <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                          <input type="text" name="phone" placeholder="Phone" required="">
                       </div>
                       <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                          <select>
                            <option value="Customer Care">Customer Care</option>
                            <option value="Billing">Billing</option>
                            <option value="Sale and marketing">Sale and marketing</option>

                            <option value="Research and development (R&D)">Research and development (R&D)</option>
                            <option value="Main Laborator">Main Laborator</option>
                            <option value="Sale and marketing">Sale and marketing</option>
                            <option value="Admin">Admin</option>
                            <option value="Lead Specialist">Lead Specialist</option>
                            <option value="Quality Assurance">Quality Assurance</option>
                            <option value="Human Resource">Human Resource</option>
                            <option value="Information technology (IT)">Information technology (IT)</option>
                            <option value="Procurement">Procurement</option>
                          </select>
                       </div>
                       <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                          <textarea class="" name="message" placeholder="how can i help you? Feel free to get in touch"></textarea>
                       </div>
                       <div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
                          <!-- Button Box -->
                          <div class="button-box">
                             <button class="theme-btn btn-style-one">
                             <span class="btn-wrap">
                             <span class="text-one">get in touch</span>
                             <span class="text-two">get in touch</span>
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
<br><br>
@endsection
