@extends('front.master')

@section('content')
         <!-- Slider One -->
         <section class="slider-two">
            <div class="main-slider-carousel owl-carousel owl-theme">
               <!-- Slide 01 -->
               <div class="slider-two_slide" style="background-image:url('{{asset('theme/assets/images/main-slider/pexels-karolina-grabowska-4226921.jpg')}}')">
                  <div class="auto-container">
                     <!-- Content Column -->
                     <div class="slider-two_content">
                        <div class="slider-two_content-inner">
                           <div class="slider-two_pattern" style="background-image:url('{{asset('theme/assets/images/background/pattern-23.png')}}')"></div>
                           <div class="slider-two_title">Biopassion Diagnostics Limited</div>
                           <h2 class="slider-two_heading">Show your health some love with 20% off lab tests. Terms apply. </h2>
                           <div class="slider-two_buttons">
                              <a href="#" class="theme-btn btn-style-four">
                              <span class="btn-wrap">
                              <span class="text-one">Make Appointment</span>
                              <span class="text-two">Make Appointment</span>
                              </span>
                              </a>
                              <a href="about.html" class="theme-btn btn-style-five">
                              <span class="btn-wrap">
                              <span class="text-one">Learn More</span>
                              <span class="text-two">Learn More</span>
                              </span>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- End Slide 01 -->


            </div>
         </section>
         <!-- End Main Slider Section -->
         <!-- LiveChat -->
         <section class="livechat">
            <div class="auto-container">
               <div class="inner-container d-flex align-items-center flex-wrap justify-content-between">
                  <div class="text"><span>Honesty is our moral compass. Integrity is in our DNA.</span> </div>
                  <div class="livechat_button">
                     <a href="{{url('/')}}/make-an-appointment" class="theme-btn btn-style-one">
                     <span class="btn-wrap">
                     <span class="text-one">make an appointment</span>
                     <span class="text-two">make an appointment</span>
                     </span>
                     </a>
                  </div>
               </div>
            </div>
         </section>
         <!-- End LiveChat -->
         <!-- Modern One -->
         <section class="modern-one">
            <div class="modern-one_pattern" style="background-image:url('{{('theme/assets/images/background/pattern-2.png')}}')"></div>
            <div class="auto-container">
               <div class="row clearfix">
                  <!-- Content Column -->
                  <div class="modern-one_content-column col-lg-6 col-md-12 col-sm-12">
                     <div class="modern-one_content-inner">
                        <!-- Sec Title -->
                        <div class="sec-title">
                           <div class="sec-title_title">Welcome to Our Labs</div>
                           {{-- <h2 class="sec-title_heading">We offer specialized orthopedics to meet your needs</h2> --}}
                           <div class="sec-title_text">
                            At Biopassion Diagnostics, we are loyal, enthusiastic and integral in all our dealings with our customers and with each other; therefore we uphold honesty and integrity above all else.
                            <br><br>
                            We believe our passion for surpassing expectations by putting the patient/clients first in everything we do and commitment to providing high quality, utmost accurate and timely medical laboratory services is one of the key reasons in our diagnostic excellence and reliability.
                           </div>
                        </div>
                        <div class="modern-one_block">
                           <div class="modern-one_block-inner">
                              <span class="modern-one_icon flaticon-check"><i class="fa fa-check"></i></span>
                              <strong class="modern-one_bold">Our Mission</strong>
                              To provide high quality, utmost accurate and timely medical laboratory services.
                           </div>
                        </div>
                        <br><br>
                        <div class="modern-one_block">
                            <div class="modern-one_block-inner">
                               <span class="modern-one_icon flaticon-binoculus"><i class="fa fa-briefcase"></i></span>
                               <strong class="modern-one_bold">Our Vision</strong>
                               To be a preferred medical diagnostic center delivering the best possible customer service, high quality, utmost accurate and timely medical diagnostic laboratory services all under one roof at cost effective pricing in Kenya and beyond.
                            </div>
                         </div>
                         <div class="modern-one_block">
                         </div>

                        <div class="modern-one_button">
                           <a href="about.html" class="theme-btn btn-style-two">
                           <span class="btn-wrap">
                           <span class="text-one">Learn More</span>
                           <span class="text-two">Learn More</span>
                           </span>
                           </a>
                        </div>
                     </div>
                  </div>
                  <!-- Image Column -->

                  <div class="modern-one_image-column col-lg-6 col-md-12 col-sm-12">
                     <div class="modern-one_image-inner">
                        <div class="modern-one_image">
                           <img src="{{asset('uploads/about-5.jpg')}}" alt="" />
                        </div>
                        <div class="counter-one" style="background-image:url('{{('theme/assets/images/background/pattern-5.png')}}')">
                           <div class="row clearfix">
                              <!-- Counter Column -->
                              <div class="counter-one_block col-lg-4 col-md-6 col-sm-6">
                                 <div class="counter-one_inner">
                                    <span class="counter-one_icon flaticon-doctor"></span>
                                    <div class="counter-one_counter d-flex">+<span class="odometer" data-count="10"></span></div>
                                    <div class="counter-one_text">Mobile Team</div>
                                 </div>
                              </div>
                              <!-- Counter Column -->
                              <div class="counter-one_block col-lg-4 col-md-6 col-sm-6">
                                 <div class="counter-one_inner">
                                    <span class="counter-one_icon fa fa-smile"></span>
                                    <div class="counter-one_counter d-flex"><span class="odometer" data-count="1890"></span></div>
                                    <div class="counter-one_text">Hapy Customers</div>
                                 </div>
                              </div>
                              <!-- Counter Column -->
                              <div class="counter-one_block col-lg-4 col-md-6 col-sm-6">
                                 <div class="counter-one_inner">
                                    <span class="counter-one_icon flaticon-medical-team"></span>
                                    <div class="counter-one_counter d-flex">+<span class="odometer" data-count="2225"></span></div>
                                    <div class="counter-one_text">Successfull Diagnostics</div>
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
         <!-- Services Five -->
         <section class="services-five">
            <div class="auto-container">
               <div class="row clearfix">
                  <!-- Service Block Five -->
                  <div class="service-block_five col-lg-4 col-md-6 col-sm-12">
                     <div class="service-block_five-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="service-block_five-icon flaticon-medical-report"></div>
                        <h4 style="height:66px;"><a href="#">Hematology</a></h4>
                        <div class="text">
                            Hematology services at our company encompass comprehensive diagnostic assessments, personalized treatment plans, and expert care for blood-related disorders and conditions, ensuring optimal health outcomes for our clients.
                        </div>
                     </div>
                  </div>
                  <!-- Service Block Five -->
                  <div class="service-block_five col-lg-4 col-md-6 col-sm-12">
                     <div class="service-block_five-inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="service-block_five-icon flaticon-medical-report"></div>
                        <h4 style="height:66px;"><a href="#">Microbiology & parasitology</a></h4>
                        <div class="text">
                            We excel in Microbiology and Parasitology services, delivering precise diagnostic analyses, innovative solutions, and tailored treatments for infections and diseases caused by microorganisms and parasites.
                        </div>
                     </div>
                  </div>
                  <!-- Service Block Five -->
                  <div class="service-block_five col-lg-4 col-md-6 col-sm-12">
                     <div class="service-block_five-inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="service-block_five-icon flaticon-medical-report"></div>
                        <h4 style="height:66px;"><a href="#">Clinical Biochemistry</a></h4>
                        <div class="text">
                            Our Clinical Biochemistry services focus on advanced diagnostic testing and analysis of biochemical markers, providing crucial insights for disease detection, management, and personalized healthcare solutions
                        </div>
                     </div>
                  </div>
                  <!-- Service Block Five -->
                  <div class="service-block_five col-lg-4 col-md-6 col-sm-12">
                     <div class="service-block_five-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="service-block_five-icon flaticon-medical-report"></div>
                        <h4 style="height:66px;"><a href="#">Serology</a></h4>
                        <div class="text">
                            We specialize in the precise detection of antibodies and antigens, offering advanced diagnostics crucial for infectious disease assessment and immune system evaluation
                        </div>
                     </div>
                  </div>
                  <!-- Service Block Five -->
                  <div class="service-block_five col-lg-4 col-md-6 col-sm-12">
                     <div class="service-block_five-inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="service-block_five-icon flaticon-medical-report"></div>
                        <h4 style="height:66px;"><a href="#">Histopathology & Cytopathology</a></h4>
                        <div class="text">Experience excellence in Histopathology & Cytopathology services at our company, where meticulous examination of tissues and cells ensures accurate diagnostics, guiding effective treatment plans for optimal patient care</div>
                     </div>
                  </div>
                  <!-- Service Block Five -->
                  <div class="service-block_five col-lg-4 col-md-6 col-sm-12">
                     <div class="service-block_five-inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="service-block_five-icon flaticon-medical-report"></div>
                        <h4 style="height:66px;"><a href="#">Immunology</a></h4>
                        <div class="text">We Employ cutting-edge diagnostics and personalized solutions, focusing on the study of the immune system to address and manage various health conditions effectively.</div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- End Services Five -->

         <!-- CTA One -->
         <section class="cta-one">
            <div class="cta-one_pattern" style="background-image:url('{{('theme/assets/images/background/pattern-12.png')}}')"></div>
            <div class="auto-container">
               <div class="cta-one_inner-container">
                  <div class="d-flex justify-content-between align-items-center flex-wrap">
                     <span class="cta-one_icon flaticon-orthopedics"></span>
                     <div class="cta-one_content">
                        <div class="cta-one_title">we uphold honesty and integrity above all else.</div>
                        <h2 class="cta-one_heading">Expect Nothing But The Best <br> From Biopassion Diagnostics</h2>
                     </div>
                     <div class="cta-one_button">
                        <a href="appointment.html" class="theme-btn btn-style-three">
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
         <!-- Appointment Section -->
         <section class="appointment-section" style="background-image: url('{{asset('theme/assets/images/background/10.jpg')}}'')">
            <div class="auto-container">
               <div class="inner-container">
                  <div class="appointment-box">
                     <!-- Sec Title -->
                     <div class="sec-title centered">
                        <div class="title">Book Now</div>
                        <h2>Make An Appointment</h2>
                     </div>
                     <!-- Appointment Form -->
                     <div class="appointment-form">
                        <!-- Appointment Form -->
                        <form method="post" action="https://html.themerange.net/merit/merit/blog.html">
                           <div class="row clearfix">
                              <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                 <input type="text" name="username" placeholder="Patient Name*" required="">
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                 <input type="text" name="phone" placeholder="Phone Number*" required="">
                              </div>
                              <div class="col-lg-12 col-md-6 col-sm-12 form-group">
                                 <input type="email" name="email" placeholder="Email Address" required="">
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                 <select class="custom-select-box">
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

                              <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                 <input type="text" class="datepicker" name="date" placeholder="Booking Date" required="">
                                 <span class="icon far fa-calendar-check"></span>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                 <textarea class="" name="message" placeholder="Shortly describe the deases"></textarea>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
                                 <button type="submit" class="theme-btn btn-style-one">
                                 <span class="btn-wrap">
                                 <span class="text-one">Get Appointment</span>
                                 <span class="text-two">Get Appointment</span>
                                 </span>
                                 </button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- End Appointment Section -->
         <!-- Testimonial Two -->
         <section class="testimonial-two style-three">
            <div class="testimonial-two_pattern" style="background-image:url('{{('theme/assets/images/background/pattern-15.png')}}')"></div>
            <div class="auto-container">
               <!-- Sec Title -->
               <div class="sec-title light centered">
                  <div class="sec-title_title">Customer says</div>
                  {{-- <h2 class="sec-title_heading">Testimonials</h2> --}}
               </div>

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

         <!-- News Section -->
         <section class="news-section style-two" style="margin:0 auto">
            <div class="auto-container" style="margin:0 auto">
               <div class="row clearfix" style="margin:0 auto">
                  <!-- Title Column -->

                  <?php
                      $Blogs = DB::table('blogs')->get();
                  ?>
                  @foreach ($Blogs as $blogs)
                  <!-- Blocks Column -->
                  <div class="blocks-column col-lg-5 col-md-12 col-sm-12" >
                     <div class="inner-column">
                        <div class="pattern-image" style="background-image: url('{{asset('theme/assets/images/resource/tablet.png')}}')"></div>
                        <!-- News Block -->
                        <div class="news-block">
                           <div class="inner-box">
                              <div class="image">
                                 <a href="{{url('/')}}/articles/{{$blogs->slung}}"><img src="{{asset('theme/assets/images/resource/news-25.jpg')}}" alt="" /></a>
                              </div>
                              <div class="lower-content">
                                 <h4 style="min-height:94px;"><a href="{{url('/')}}/articles/{{$blogs->slung}}">{{$blogs->title}}</a></h4>
                                 <div class="text">{{$blogs->meta}}</div>
                                 <a href="{{url('/')}}/articles/{{$blogs->slung}}" class="read-more">Continue Reading</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Blocks Column -->
                  @endforeach
               </div>
            </div>
         </section>
         <!-- End News Section -->
@endsection
