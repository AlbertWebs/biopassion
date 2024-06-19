@extends('front.master')

@section('content')



<!-- Sidebar Page Container -->
<div class="sidebar-page-container left-sidebar">
    <div class="auto-container">
       <div class="row clearfix">

          <div class="content-side col-lg-10 col-md-12 col-sm-12" style="margin:0 auto">
             <div class="department-detail">
                <div class="inner-box">

                   <h3>Review your self-pay price estimate</h3>
                   <div class="bold-text">
                    At Biopassion Diagnostics, we understand the importance of knowing the cost of your healthcare services upfront. For patients who are self-paying, we offer a convenient way to review and request a price estimate for our diagnostic services. This ensures that you are fully informed and can make the best financial decisions for your healthcare needs.
                   </div>
                   {{--  --}}
                   <p>Our self-pay price estimate provides you with a detailed breakdown of the costs associated with your requested tests and services. To get started, simply fill out the form below to request your personalized estimate.</p>

                    <h3>Request Your Price Estimate</h3>
                    <div class="default-form contact-form">
                        <form method="post" action="#" id="contact-form">
                           <div class="row clearfix">
                              <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                 <input type="text" name="username" placeholder="Name" required="">
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                 <input type="text" name="email" placeholder="Email" required="">
                              </div>

                              <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                 <textarea class="" name="message" placeholder="how can i help you? Feel free to get in touch"></textarea>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
                                 <!-- Button Box -->
                                 <div class="button-box">
                                    <button class="theme-btn btn-style-one">
                                    <span class="btn-wrap">
                                    <span class="text-one">Get Estimate</span>
                                    <span class="text-two">Get Estimate</span>
                                    </span>
                                    </button>
                                 </div>
                              </div>

                           </div>
                        </form>
                        <br><br>
                     </div>

                    <p>Once we receive your request, our team will review the details and provide you with a comprehensive price estimate. This estimate will include all potential costs, so you have a clear understanding of your financial responsibility before proceeding with any tests or services.</p>

                    <p>If you have any questions or need further assistance, please do not hesitate to contact our customer service team. We are here to help you navigate your healthcare journey with ease and confidence.</p>



                   <p><strong> </strong> Get the best Laboratory Services from Biopassion Diagnosis at your very convinience</p>
                </div>
             </div>
          </div>
       </div>
    </div>
</div>



@endsection
