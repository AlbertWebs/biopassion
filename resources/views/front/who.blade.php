@extends('front.master')

@section('content')
      <!-- Page Title -->
      <section class="page-title" style="background-image:url('{{asset('theme/assets/images/background/eye-1.jpg')}}')">
        <div class="auto-container">
           <h2>About Us</h2>
           <ul class="bread-crumb clearfix">
              <li><a href="index.html">Home</a></li>
              <li>About Us</li>
           </ul>
        </div>
     </section>
     <!-- End Page Title -->
     <!-- About Two -->
     <section class="about-two style-two">
        <div class="about-two_pattern" style="background-image:url('{{asset('theme/assets/images/background/pattern-11.png')}}')"></div>
        <div class="auto-container">
           <div class="row clearfix">
              <!-- About Two Content Column -->
              <div class="about-two_content-column col-lg-6 col-md-12 col-sm-12">
                 <div class="about-two_content-inner">
                    <!-- Sec Title -->
                    <div class="sec-title">
                       <div class="sec-title_title">About Biopassion</div>
                       <h3 class="sec-title_heading">Honesty is our moral compass. Integrity is in our DNA.</h3>
                    </div>
                    <p class="about-two_text">
                        At Biopassion Diagnostics, we are loyal, enthusiastic and integral in all our dealings with our customers and with each other; therefore we uphold honesty and integrity above all else.
                        <br><br>
                        We believe our passion for surpassing expectations by putting the patient/clients first in everything we do and commitment to providing high quality, utmost accurate and timely medical laboratory services is one of the key reasons in our diagnostic excellence and reliability.
                    </p>

                    <div class="row clearfix">
                       <!-- About Two Feature -->
                       <div class="about-two_feature col-lg-6 col-md-6 col-sm-6">
                          <div class="about-two_feature-inner">
                             <span class="about-two_feature-icon flaticon-thumbs-up"></span>
                             <strong>Home <br>Services</strong>
                          </div>
                          We Provide convenient and efficient home services, delivering professional solutions directly to your doorstep for a seamless and personalized experience.
                       </div>
                       <!-- About Two Feature -->
                       <div class="about-two_feature col-lg-6 col-md-6 col-sm-6">
                          <div class="about-two_feature-inner">
                             <span class="about-two_feature-icon flaticon-medical-assistance"></span>
                             <strong> Online Consultation</strong>
                          </div>
                          We offers dedicated inpatient services, providing comprehensive and specialized care within a hospital setting to ensure optimal treatment, comfort, and support for our patients.
                       </div>
                    </div>
                    <div class="d-flex align-items-center flex-wrap">
                       <!-- Button Box -->
                       <a href="{{url('/')}}/who-we-are" class="theme-btn btn-style-one">
                       <span class="btn-wrap">
                       <span class="text-one">Book Appointment</span>
                       <span class="text-two">Book Appointment</span>
                       </span>
                       </a>
                       <!-- Signature -->
                       <div class="about-two_signature"><img src="assets/images/icons/signature.png" alt="" /></div>
                       <div class="about-two_author">
                          Erick Masiga<br>
                          <span>MD Biopassion Diagnostics</span>
                       </div>
                    </div>
                 </div>
              </div>
              <!-- About Two Images Column -->
              <div class="col-lg-6 col-md-12 col-sm-12">
                    <!-- About Two Video -->
                    <div>
                       <img style="width:768px" src="{{asset('uploads/about-5.jpg')}}" alt="" />
                       <a href="https://www.youtube.com/watch?v=V-JSVQxbXaA" class="lightbox-video about-two_video-box fa fa-play"><i class="ripple"></i></a>
                    </div>
              </div>
           </div>
        </div>
     </section>
     <!-- End About Two -->
     <!-- CTA One -->
     <section class="cta-one">
        <div class="cta-one_pattern" style="background-image:url('{{asset('theme/assets/images/background/pattern-12.png')}}')"></div>
        <div class="auto-container">
           <div class="cta-one_inner-container">
              <div class="d-flex justify-content-between align-items-center flex-wrap">
                 <span class="cta-one_icon flaticon-hospital"></span>
                 <div class="cta-one_content">
                    <div class="cta-one_title">Quality & Excelence</div>
                    <h2 class="cta-one_heading">Expect Nothing But The Best<br> From Biopassion Diagnostics  </h2>
                 </div>
                 <div class="cta-one_button">
                    <a href="{{url('/')}}/who-we-are" class="theme-btn btn-style-three">
                    <span class="btn-wrap">
                    <span class="text-one">Read More</span>
                    <span class="text-two">Read More</span>
                    </span>
                    </a>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- End CTA One -->

     <!-- Modern One -->
     <section class="modern-one">
        <div class="modern-one_pattern" style="background-image:url('{{asset('theme/assets/images/background/pattern-2.png')}}')"></div>
        <div class="auto-container">
           <div class="row clearfix">
              <!-- Content Column -->
              <div class="modern-one_content-column col-lg-12 col-md-12 col-sm-12">
                 <div class="modern-one_content-inner">

                    <div class="row clearfix">
                        <div class="modern-one_content-column col-lg-6 col-md-12 col-sm-12">
                            <div class="modern-one_block">
                                <div class="modern-one_block-inner">
                                    <strong class="modern-one_bold">Our Mission:</strong>
                                    To provide high quality, utmost accurate and timely medical laboratory services.
                                </div>
                            </div>
                        </div>

                        <div class="modern-one_content-column col-lg-6 col-md-12 col-sm-12">
                            <div class="modern-one_block">
                                <div class="modern-one_block-inner">
                                    <strong class="modern-one_bold">Our Vision:</strong>
                                    To be a preferred medical diagnostic center delivering the best possible customer service, high quality, utmost accurate and timely medical diagnostic laboratory services all under one roof at cost effective pricing in Kenya and beyond.
                                </div>
                            </div>
                        </div>

                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- End Modern One -->
     <!-- Faq One -->
     <section class="faq-one" style="background-image:url('{{asset('theme/assets/images/background/2.jpg')}}')">
        <div class="faq-one_pattern" data-parallax='{"y" : 50}' style="background-image:url('{{asset('theme/assets/images/background/pattern-26.png')}}')"></div>
        <div class="auto-container">
           <div class="row clearfix">
              <!-- Accordion Column -->
              <div class="faq-one_accordion-column col-lg-7 col-md-12 col-sm-12">
                 <div class="faq-one_accordion-inner">
                    <!-- Sec Title -->
                    <div class="sec-title">
                       <div class="sec-title_title">Frequently Asked Questions</div>
                       <h2 class="sec-title_heading">Get every single answers there if you want</h2>
                    </div>
                    <!-- Accordion Box -->
                    <ul class="accordion-box">
                       <!-- Block -->
                       <li class="accordion block">
                          <div class="acc-btn active">
                             <div class="icon-outer"><span class="icon fa-solid fa-angle-right fa-fw"></span></div>
                             What services does Biopassion Diagnostics offer?
                          </div>
                          <div class="acc-content current">
                             <div class="content">
                                <div class="text">
                                    Biopassion Diagnostics provides a range of diagnostic services, including but not limited to genetic testing, molecular diagnostics, and personalized healthcare solutions. Our services are designed to cater to the diverse needs of individuals seeking insights into their health and well-being.
                                </div>
                             </div>
                          </div>
                       </li>
                       <!-- Block -->
                       <li class="accordion block">
                          <div class="acc-btn">
                             <div class="icon-outer"><span class="icon fa-solid fa-angle-right fa-fw"></span></div>
                             How can I schedule a diagnostic test with Biopassion?
                          </div>
                          <div class="acc-content">
                             <div class="content">
                                <div class="text">Scheduling a diagnostic test with Biopassion Diagnostics is easy. Simply visit our website or contact our customer service. You can choose from our list of available tests, book an appointment, and receive detailed instructions on the process. We strive to make the testing experience convenient and accessible.</div>
                             </div>
                          </div>
                       </li>
                       <!-- Block -->
                       <li class="accordion block">
                          <div class="acc-btn">
                             <div class="icon-outer"><span class="icon fa-solid fa-angle-right fa-fw"></span></div>
                             Is my personal information kept confidential during the testing process?
                          </div>
                          <div class="acc-content">
                             <div class="content">
                                <div class="text">At Biopassion Diagnostics, we prioritize the confidentiality and security of your personal information. We adhere to strict privacy protocols and comply with all relevant data protection regulations. Your data is handled with the utmost care, and only authorized personnel involved in the testing process have access to the information.</div>
                             </div>
                          </div>
                       </li>
                       <!-- Block -->
                       <li class="accordion block">
                          <div class="acc-btn">
                             <div class="icon-outer"><span class="icon fa-solid fa-angle-right fa-fw"></span></div>
                             How long does it take to receive test results?
                          </div>
                          <div class="acc-content">
                             <div class="content">
                                <div class="text">
                                    The turnaround time for test results may vary depending on the type of diagnostic test. Biopassion Diagnostics is committed to delivering accurate and timely results. Once your sample is received and processed, we strive to provide you with comprehensive reports promptly. You can check the estimated turnaround time for your specific test when scheduling your appointment.
                                </div>
                             </div>
                          </div>
                       </li>
                    </ul>
                 </div>
              </div>
              <!-- Image Column -->
              <div class="faq-one_image-column col-lg-5 col-md-12 col-sm-12">
                 <div class="faq-one_image">
                    <div class="faq-image_pattern" style="background-image:url('{{asset('theme/assets/images/background/pattern-27.png')}}')"></div>
                    <img src="{{url('/')}}/uploads/2b51efd6925f5eb700e677c24d40598b.jpg" alt="" />
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- End Faq One -->
     <!-- Team One -->
     <section class="team-one">
        <div class="team-one_pattern" data-parallax='{"x" : 50}' style="background-image:url('{{asset('theme/assets/images/icons/team-icon.png')}}')"></div>
        <div class="auto-container">
           <div class="row clearfix">
              <!-- Team Content Column -->
              <div class="team-one_content-column col-lg-12 col-md-12 col-sm-12">
                 <div class="team-one_content-inner">
                    <!-- Sec Title -->
                    <div class="sec-title">
                       <div class="sec-title_title">meet our team</div>
                       <h2 class="sec-title_heading">Certified and experienced teams</h2>
                    </div>
                    <p class="team-one_text">
                        Our staff have extensive knowledge and experience in their respective areas of service. They work in rigorous quality assurance programs to assure the highest quality of care for our patients.
                        <br><br>Our highly trained medical laboratory experts are passionate about delivering healthcare of the highest quality to clients and are excited to be members of Biopassion Diagnostics. We collaborate with your personal physician and other experienced healthcare professionals, working toward the singular goal of patient satisfaction by ensuring detailed, accurate diagnoses and optimal treatment plans. Our team ensure your privacy at all stages of your treatment, including confidential transmission and distribution of reports.
                        <br><br>Our advanced technologies and skilled department members ensures that you will remain as comfortable as possible during your medical care procedure in professionally managed environment.
                        In addition to offering state-of-the-art laboratory facilities to ensure reliable and accurate services, our staff strive to provide you with immediate appointments and to keep your wait between appointments to a minimum.
                    </p>

                    <div class="team-one_buttons">
                       <a href="{{url('/')}}/make-appointment" class="theme-btn btn-style-one">
                       <span class="btn-wrap">
                       <span class="text-one">Make Appointment</span>
                       <span class="text-two">Make Appointment</span>
                       </span>
                       </a>
                       <a href="{{url('/')}}/what-we-do" class="theme-btn btn-style-two">
                       <span class="btn-wrap">
                       <span class="text-one">View all Services</span>
                       <span class="text-two">View all Services</span>
                       </span>
                       </a>
                    </div>
                    <div class="team-one_telescope">
                       <img src="assets/images/resource/telescope.png" alt="" />
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- End Team One -->
     {{--  --}}
<!-- Cases Section -->
    <section class="cases-section" id="clientele">
        <div class="auto-container">
            <div class="inner-container">
                <div class="cases-pattern-layer" style="background-image: url('{{asset('theme/assets/images/background/pattern-34.png')}}')"></div>
                <div class="sec-title light">
                    <div class="sec-title_title">Client Base</div>
                    <h2 class="sec-title_heading">Our Clientele</h2>
                    <div class="sec-title_text">At Biopassion Diagnostics, our list of active clientele includes:</div>
                </div>

                <!-- Case Block -->
                <div class="case-block">
                    <div class="inner-box">
                        <div class="row clearfix">

                            <!-- Content Column -->
                            <div class="content-column col-lg-12 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <h5 style="color:#ffffff">1. Multiple institutions (schools, hotels and hospitality industries, laboratories, clinics, hospitals & corporates)</h5>
                                </div>
                            </div>

                            <div class="content-column col-lg-12 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <h5 style="color:#ffffff">2. Consultant doctors in Nairobi with different specialties</h5>
                                </div>
                            </div>

                            <div class="content-column col-lg-12 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <h5 style="color:#ffffff">3. Medical officers, clinical officers and other healthcare practitioners</h5>
                                </div>
                            </div>

                            <div class="content-column col-lg-12 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <h5 style="color:#ffffff">4. Walk-in clients.</h5>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>

            </div>
        </div>
    </section>
<!-- End Cases Section -->
     {{--  --}}
     <!-- Newsletter Section -->
     <section class="newsletter-one">
        <div class="auto-container">
           <div class="newsletter-one_inner-container" style="background-image:url(assets/images/background/pattern-7.png)">
              <div class="newsletter-one_icon">
                 <img src="assets/images/icons/envelope.png" alt="" />
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
                       <form method="post" action="https://html.themerange.net/merit/merit/contact.html">
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
<br><br>
@endsection
