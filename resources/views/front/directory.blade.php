@extends('front.master')

@section('content')

<!-- Sidebar Page Container -->
<div class="sidebar-page-container left-sidebar">
    <div class="auto-container">
       <div class="row clearfix">

          <div class="content-side col-lg-12 col-md-12 col-sm-12" style="margin:0 auto">
             <div class="department-detail">
                <div class="inner-box">

                   <h3>Test Directory</h3>
                   <div class="bold-text">
                     Welcome to the Biopassion Diagnostics Test Directory — your trusted partner in accurate and dependable medical testing. We offer a comprehensive range of laboratory services designed to support early detection, monitoring, and preventive care.
                     <br><br>

                     Each test comes with clear explanations, preparation guidelines, expected turnaround times, and professional interpretation to help you make confident health decisions. Backed by modern technology and expert laboratory professionals, we ensure quality, safety, and efficiency at every step.<br>
                     <br>
                     <strong>🌿 Reliable Results. Professional Care. Better Life.               YOUR HEALTH, OUR PASSION.</strong><br> 
                   </div>

                   <!-- Call or WhatsApp CTA -->
                   <div class="cta-section" style="margin: 30px 0; padding: 25px; background: linear-gradient(135deg, #0066cc 0%, #004499 100%); border-radius: 10px; text-align: center; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                      <h4 style="color: #fff; margin-bottom: 15px; font-size: 24px; font-weight: 600;">Need Help? Call or WhatsApp Now</h4>
                      <p style="color: #fff; margin-bottom: 20px; font-size: 16px;">Our team is ready to assist you with any questions about our tests and services.</p>
                      <div class="cta-buttons" style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                         <a href="tel:+254704150555" class="btn btn-light" style="padding: 12px 30px; font-size: 16px; font-weight: 600; border-radius: 5px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; transition: all 0.3s ease;">
                            <i class="fa fa-phone" style="font-size: 18px;"></i> Call Now: +254 704 150555
                         </a>
                         <a href="https://wa.me/254704150555?text=Hello%2C%20I%20need%20information%20about%20your%20test%20services" target="_blank" class="btn btn-success" style="padding: 12px 30px; font-size: 16px; font-weight: 600; border-radius: 5px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; background-color: #25D366; color: #fff; border: none; transition: all 0.3s ease;">
                            <i class="fab fa-whatsapp" style="font-size: 18px;"></i> WhatsApp Now
                         </a>
                      </div>
                   </div>

                   <!-- Search and Filter Section -->
                   <div class="test-search-section" style="margin: 30px 0;">
                      <form method="GET" action="{{ route('test-directory') }}" class="row g-3">
                         <div class="col-md-6">
                            <input type="text" name="search" class="form-control" placeholder="Search tests by name or category..." value="{{ request('search') }}">
                         </div>
                         <div class="col-md-4">
                            <select name="category" class="form-control">
                               <option value="">All Categories</option>
                               @foreach($categories as $category)
                                  <option value="{{ $category }}" {{ request('category') == $category ? 'selected' : '' }}>{{ $category }}</option>
                               @endforeach
                            </select>
                         </div>
                         <div class="col-md-2">
                            <button type="submit" class="btn btn-primary w-100">Search</button>
                         </div>
                      </form>
                   </div>

                   <!-- Tests List -->
                   <div class="tests-list-section">
                      @if($tests->count() > 0)
                         <div class="row">
                            @foreach($tests as $test)
                               <div class="col-md-6 col-lg-4 mb-4">
                                  <div class="test-card" style="border: 1px solid #ddd; border-radius: 8px; padding: 20px; height: 100%; background: #fff; box-shadow: 0 2px 4px rgba(0,0,0,0.1); transition: transform 0.2s; overflow: hidden;">
                                     @if($test->image_url)
                                        <div class="test-image mb-3" style="width: calc(100% + 40px); margin: -20px -20px 15px -20px; overflow: hidden; border-radius: 8px 8px 0 0;">
                                           <img src="{{ str_starts_with($test->image_url, 'http') ? $test->image_url : asset($test->image_url) }}" alt="{{ $test->title }}" style="width: 100%; height: 200px; object-fit: cover; display: block;">
                                        </div>
                                     @endif
                                     
                                     <h5 style="font-size: 16px; margin-bottom: 10px; color: #333; min-height: 48px;">
                                        <a href="{{ route('test-detail', $test->slug) }}" style="color: #0066cc; text-decoration: none;">
                                           {{ $test->title }}
                                        </a>
                                     </h5>
                                     
                                     @if($test->category)
                                        <p style="margin-bottom: 8px;">
                                           <strong style="color: #666;">Category:</strong> 
                                           <span style="color: #888;">{{ $test->category }}</span>
                                        </p>
                                     @endif
                                     
                                     <div class="test-pricing" style="margin-top: 15px; padding-top: 15px; border-top: 1px solid #eee;">
                                        @if($test->current_price)
                                           <p style="margin: 0; font-size: 20px; font-weight: bold; color: #28a745; display: flex; align-items: center; gap: 10px; flex-wrap: wrap;">
                                              <span>
                                                 KSh {{ number_format($test->current_price, 2) }}
                                                 @if($test->original_price && $test->original_price > $test->current_price)
                                                    <span style="font-size: 14px; color: #999; text-decoration: line-through; margin-left: 10px;">
                                                       KSh {{ number_format($test->original_price, 2) }}
                                                    </span>
                                                 @endif
                                              </span>
                                              @if($test->discount_percentage)
                                                 <span class="badge bg-danger" style="font-size: 12px;">Save {{ $test->discount_percentage }}%</span>
                                              @endif
                                           </p>
                                        @else
                                           <p style="margin: 0; color: #666;">Price on request</p>
                                        @endif
                                     </div>
                                     
                                     <div style="margin-top: 15px;">
                                        <a href="{{ route('test-detail', $test->slug) }}" class="btn btn-sm theme-btn" style="width: 100%;">
                                           View Details
                                        </a>
                                     </div>
                                  </div>
                               </div>
                            @endforeach
                         </div>

                         <!-- Pagination -->
                         @if($tests->hasPages())
                         <div class="test-directory-pagination">
                            {{ $tests->appends(request()->query())->links('pagination.custom') }}
                         </div>
                         @endif
                      @else
                         <div class="alert alert-info" style="margin-top: 20px;">
                            <p>No tests found. Try adjusting your search criteria.</p>
                         </div>
                      @endif
                   </div>

                   <div style="margin-top: 40px;">
                      <h5>Our Test Categories</h5>
                      <p>We offer a broad spectrum of tests across various categories to meet diverse healthcare needs:</p>
                      <p>
                          <strong>Allergy and Asthma Testing:</strong> Identify allergens and assess asthma conditions to help manage and treat allergic reactions and respiratory issues.<br>
                          <strong>Cancer Screening and Diagnostics:</strong> Early detection and monitoring of various cancers to support effective treatment plans and improve outcomes.<br>
                          <strong>Chronic Disease Management:</strong> Tests to monitor and manage chronic conditions such as diabetes, hypertension, and cardiovascular diseases.<br>
                          <strong>Digestive Health:</strong> Comprehensive testing to diagnose and manage gastrointestinal disorders and conditions.<br>
                          <strong>Heart Health:</strong> Assessments and screenings to evaluate cardiovascular health and identify risk factors.<br>
                          <strong>Hereditary Cancer Testing:</strong> Genetic tests to determine predisposition to certain types of cancer, enabling proactive health management.<br>
                          <strong>Infectious Disease Testing:</strong> Detect and diagnose infections caused by bacteria, viruses, fungi, and parasites.<br>
                          <strong>Men's Health:</strong> Specialized tests focusing on male-specific health issues, including prostate health and hormone levels.<br>
                          <strong>Neurological Testing:</strong> Assess and diagnose neurological conditions such as epilepsy, multiple sclerosis, and neuropathies.<br>
                          <strong>Women's Health:</strong> Comprehensive testing for female-specific health concerns, including reproductive health, hormone levels, and breast cancer screening.<br>
                          <strong>Drugs of Abuse Testing:</strong> Detect and monitor substance use to support treatment and recovery efforts.<br>
                      </p>

                      <h5>Find a Test</h5>
                      <p>Use our search function above to quickly locate specific tests by name or category. Each test entry provides detailed information including:</p>
                      <p>
                          <strong>Test Name:</strong> The official name of the test.<br>
                          <strong>Purpose:</strong> A brief description of what the test is used for.<br>
                          <strong>Preparation:</strong> Any special instructions you need to follow before taking the test.<br>
                          <strong>Procedure:</strong> An overview of how the test is conducted.<br>
                          <strong>Results:</strong> Information on how and when you will receive your results.<br>
                      </p>

                      <h5>Request a Test</h5>
                      <p>If you know the test you need, you can easily request it through our online form or by contacting our customer service team. Our knowledgeable staff is here to help guide you through the process and answer any questions you may have.</p>

                      <h5>Contact Us</h5>
                      <p>For any inquiries or further assistance, please do not hesitate to reach out to us. At Biopassion Diagnostics, we are committed to providing you with exceptional service and support for all your diagnostic testing needs.</p>

                      <p>Thank you for choosing Biopassion Diagnostics. Your health is our passion.</p>
                   </div>

                   <p><strong> </strong> Get the best Laboratory Services from Biopassion Diagnosis at your very convinience</p>
                </div>
             </div>
          </div>
       </div>
    </div>
</div>

<style>
/* Theme Button Styling */
.theme-btn {
   background-color: var(--main-color) !important;
   border-color: var(--main-color) !important;
   color: #fff !important;
   font-weight: 500;
   transition: all 0.3s ease;
}

.theme-btn:hover {
   background-color: var(--color-eight) !important;
   border-color: var(--color-eight) !important;
   color: #fff !important;
   transform: translateY(-2px);
   box-shadow: 0 4px 8px rgba(0,0,0,0.2);
}

/* New Pagination Styles - Fresh Design */
.test-directory-pagination {
   margin: 50px 0;
   padding: 0;
   width: 100%;
}

.custom-pagination-nav {
   display: flex;
   flex-direction: column;
   align-items: center;
   gap: 20px;
}

.custom-pagination-list {
   display: flex;
   align-items: center;
   justify-content: center;
   gap: 8px;
   list-style: none;
   padding: 0;
   margin: 0;
   flex-wrap: wrap;
}

.custom-pagination-item {
   margin: 0;
   padding: 0;
}

.custom-pagination-link {
   display: inline-flex;
   align-items: center;
   justify-content: center;
   gap: 6px;
   padding: 12px 18px;
   min-width: 44px;
   height: 44px;
   background: #ffffff;
   border: 2px solid #e0e0e0;
   border-radius: 8px;
   color: #333333;
   text-decoration: none;
   font-size: 15px;
   font-weight: 500;
   transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
   cursor: pointer;
   box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
}

.custom-pagination-link:hover:not(.disabled-link):not(.active-link):not(.dots) {
   background: #0066cc;
   border-color: #0066cc;
   color: #ffffff;
   transform: translateY(-2px);
   box-shadow: 0 4px 12px rgba(0, 102, 204, 0.3);
}

.custom-pagination-link.active-link {
   background: linear-gradient(135deg, #0066cc 0%, #004499 100%);
   border-color: #0066cc;
   color: #ffffff;
   font-weight: 600;
   box-shadow: 0 4px 12px rgba(0, 102, 204, 0.4);
   transform: scale(1.05);
}

.custom-pagination-link.disabled-link {
   background: #f5f5f5;
   border-color: #e0e0e0;
   color: #999999;
   cursor: not-allowed;
   opacity: 0.6;
   pointer-events: none;
}

.custom-pagination-link.dots {
   background: transparent;
   border: none;
   color: #666666;
   cursor: default;
   box-shadow: none;
   min-width: auto;
   padding: 12px 8px;
}

.custom-pagination-link.dots:hover {
   transform: none;
   box-shadow: none;
   background: transparent;
   border: none;
   color: #666666;
}

.pagination-text {
   font-size: 15px;
   font-weight: 500;
}

.custom-pagination-link svg {
   width: 16px;
   height: 16px;
   flex-shrink: 0;
}

.pagination-info {
   margin-top: 15px;
   text-align: center;
}

.pagination-info p {
   margin: 0;
   color: #666666;
   font-size: 14px;
   font-weight: 400;
}

.pagination-info strong {
   color: #333333;
   font-weight: 600;
}

/* Responsive Design */
@media (max-width: 768px) {
   .custom-pagination-list {
      gap: 6px;
   }
   
   .custom-pagination-link {
      padding: 10px 14px;
      min-width: 40px;
      height: 40px;
      font-size: 14px;
   }
   
   .pagination-text {
      display: none;
   }
   
   .custom-pagination-link svg {
      width: 18px;
      height: 18px;
   }
}

@media (max-width: 480px) {
   .custom-pagination-list {
      gap: 4px;
   }
   
   .custom-pagination-link {
      padding: 8px 12px;
      min-width: 36px;
      height: 36px;
      font-size: 13px;
   }
   
   .custom-pagination-item:not(.active):not(:first-child):not(:last-child):not(.disabled) {
      display: none;
   }
   
   .custom-pagination-link.dots {
      display: none;
   }
   
   .pagination-info {
      margin-top: 10px;
   }
   
   .pagination-info p {
      font-size: 13px;
   }
}
</style>

@endsection
