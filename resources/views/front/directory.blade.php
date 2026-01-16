@extends('front.master')

@section('content')

<!-- Sidebar Page Container -->
<div class="sidebar-page-container left-sidebar">
    <div class="auto-container">
       <div class="row clearfix">

          <div class="content-side col-lg-10 col-md-12 col-sm-12" style="margin:0 auto">
             <div class="department-detail">
                <div class="inner-box">

                   <h3>Test Directory</h3>
                   <div class="bold-text">
                    Welcome to the Biopassion Diagnostics Test Directory, your comprehensive resource for information on the wide array of diagnostic tests we offer. Our goal is to provide you with accurate, timely, and reliable testing services to support your health and well-being. Browse through our extensive list of tests to find detailed information about each one, including purpose, preparation, and what to expect.
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
                                  <div class="test-card" style="border: 1px solid #ddd; border-radius: 8px; padding: 20px; height: 100%; background: #fff; box-shadow: 0 2px 4px rgba(0,0,0,0.1); overflow: hidden;">
                                     @if($test->image_url)
                                        <div class="test-image mb-3" style="width: calc(100% + 40px); margin: -20px -20px 15px -20px; overflow: hidden; border-radius: 8px 8px 0 0;">
                                           <img src="{{ str_starts_with($test->image_url, 'http') ? $test->image_url : asset($test->image_url) }}" alt="{{ $test->title }}" style="width: 100%; height: 200px; object-fit: cover; display: block;">
                                        </div>
                                     @endif
                                     
                                     <h5 style="font-size: 16px; margin-bottom: 10px; color: #333;">
                                        <a href="{{ $test->url ?? '#' }}" target="_blank" style="color: #0066cc; text-decoration: none;">
                                           {{ Str::limit($test->title, 60) }}
                                        </a>
                                     </h5>
                                     
                                     @if($test->category)
                                        <p style="margin-bottom: 8px;">
                                           <strong style="color: #666;">Category:</strong> 
                                           <span style="color: #888;">{{ $test->category }}</span>
                                        </p>
                                     @endif
                                     
                                     <div class="test-pricing" style="margin-top: 15px;">
                                        @if($test->current_price)
                                           <p style="margin: 0; font-size: 18px; font-weight: bold; color: #28a745; display: flex; align-items: center; gap: 10px; flex-wrap: wrap;">
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
                                        @endif
                                     </div>
                                     
                                     @if($test->url)
                                        <div style="margin-top: 15px;">
                                           <a href="{{ $test->url }}" target="_blank" class="btn btn-sm theme-btn" style="width: 100%;">
                                              View Details
                                           </a>
                                        </div>
                                     @endif
                                  </div>
                               </div>
                            @endforeach
                         </div>

                         <!-- Pagination -->
                         <div class="pagination-wrapper" style="margin-top: 40px; text-align: center;">
                            {{ $tests->appends(request()->query())->links() }}
                         </div>
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

/* Pagination Styling */
.pagination-wrapper {
   margin-top: 40px;
   padding: 30px 0;
   width: 100%;
   overflow-x: auto;
}

.pagination-wrapper nav {
   display: flex;
   justify-content: center;
   width: 100%;
}

.pagination-wrapper .pagination {
   display: flex;
   justify-content: center;
   align-items: center;
   flex-wrap: nowrap;
   gap: 6px;
   list-style: none;
   padding: 0;
   margin: 0 auto;
   max-width: 100%;
}

.pagination-wrapper .pagination li {
   display: inline-flex;
   margin: 0;
   flex-shrink: 0;
}

.pagination-wrapper .pagination li a,
.pagination-wrapper .pagination li span {
   display: inline-flex;
   align-items: center;
   justify-content: center;
   padding: 10px 14px;
   min-width: 42px;
   height: 42px;
   text-align: center;
   text-decoration: none;
   color: #333;
   background-color: #fff;
   border: 1px solid #ddd;
   border-radius: 4px;
   transition: all 0.3s ease;
   font-weight: 500;
   font-size: 14px;
   white-space: nowrap;
   box-sizing: border-box;
}

.pagination-wrapper .pagination li a:hover {
   background-color: var(--main-color);
   color: #fff;
   border-color: var(--main-color);
   transform: translateY(-2px);
   box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
}

.pagination-wrapper .pagination li.active span {
   background-color: var(--main-color);
   color: #fff;
   border-color: var(--main-color);
   font-weight: 600;
}

.pagination-wrapper .pagination li.disabled {
   pointer-events: none;
}

.pagination-wrapper .pagination li.disabled span {
   color: #999;
   background-color: #f5f5f5;
   border-color: #ddd;
   cursor: not-allowed;
   opacity: 0.6;
}

.pagination-wrapper .pagination li.disabled span:hover {
   transform: none;
   box-shadow: none;
   background-color: #f5f5f5;
   color: #999;
   border-color: #ddd;
}

/* Pagination SVG Icons Styling */
.pagination-wrapper .pagination li svg {
   width: 14px !important;
   height: 14px !important;
   vertical-align: middle;
}

.pagination-wrapper .pagination li a svg,
.pagination-wrapper .pagination li span svg {
   width: 14px !important;
   height: 14px !important;
}

/* Ellipsis styling */
.pagination-wrapper .pagination li.disabled span:not([aria-hidden]) {
   padding: 10px 8px;
   min-width: auto;
}

/* Responsive Pagination */
@media (max-width: 768px) {
   .pagination-wrapper {
      padding: 20px 0;
   }
   
   .pagination-wrapper .pagination {
      gap: 4px;
      flex-wrap: wrap;
   }
   
   .pagination-wrapper .pagination li a,
   .pagination-wrapper .pagination li span {
      padding: 8px 10px;
      min-width: 36px;
      height: 36px;
      font-size: 13px;
   }
}

@media (max-width: 480px) {
   .pagination-wrapper .pagination {
      gap: 3px;
   }
   
   .pagination-wrapper .pagination li a,
   .pagination-wrapper .pagination li span {
      padding: 6px 8px;
      min-width: 32px;
      height: 32px;
      font-size: 12px;
   }
   
   /* Hide some page numbers on very small screens, keep prev/next and current */
   .pagination-wrapper .pagination li:not(.active):not(:first-child):not(:last-child):not(.disabled) {
      display: none;
   }
   
   .pagination-wrapper .pagination li.disabled:not(:first-child):not(:last-child) {
      display: none;
   }
}
</style>

@endsection
