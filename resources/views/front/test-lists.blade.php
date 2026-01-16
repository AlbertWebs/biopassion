@extends('front.master')

@section('content')

<!-- Sidebar Page Container -->
<div class="sidebar-page-container left-sidebar">
    <div class="auto-container">
       <div class="row clearfix">

          <div class="content-side col-lg-12 col-md-12 col-sm-12" style="margin:0 auto">
             <div class="department-detail">
                <div class="inner-box">

                   <h3>Complete Test List</h3>
                   <div class="bold-text">
                    Browse our complete catalog of diagnostic tests. We offer a comprehensive range of tests to meet all your healthcare needs. Use the search and filter options below to find the test you're looking for.
                   </div>

                   <!-- Search and Filter Section -->
                   <div class="test-search-section" style="margin: 30px 0; background: #f8f9fa; padding: 20px; border-radius: 8px;">
                      <form method="GET" action="{{ route('test-lists') }}" class="row g-3">
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
                         @if(request('search') || request('category'))
                            <div class="col-12">
                               <a href="{{ route('test-lists') }}" class="btn btn-secondary btn-sm">Clear Filters</a>
                            </div>
                         @endif
                      </form>
                   </div>

                   <!-- Results Count -->
                   <div style="margin-bottom: 20px;">
                      <p><strong>Showing {{ $tests->firstItem() ?? 0 }} - {{ $tests->lastItem() ?? 0 }} of {{ $tests->total() }} tests</strong></p>
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
                                        <a href="{{ $test->url ?? '#' }}" target="_blank" style="color: #0066cc; text-decoration: none;">
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
                                     
                                     @if($test->url)
                                        <div style="margin-top: 15px;">
                                           <a href="{{ $test->url }}" target="_blank" class="btn btn-sm theme-btn" style="width: 100%;">
                                              View Details & Book
                                           </a>
                                        </div>
                                     @endif
                                  </div>
                               </div>
                            @endforeach
                         </div>

                         <!-- Custom Pagination -->
                         @if($tests->hasPages())
                         <div class="custom-pagination">
                            <div class="pagination-info">
                               <span>Showing {{ $tests->firstItem() }} to {{ $tests->lastItem() }} of {{ $tests->total() }} results</span>
                            </div>
                            <div class="pagination-controls">
                               @if($tests->onFirstPage())
                                  <span class="page-btn disabled">Previous</span>
                               @else
                                  <a href="{{ $tests->previousPageUrl() }}" class="page-btn">Previous</a>
                               @endif
                               
                               <div class="page-numbers">
                                  @foreach($tests->getUrlRange(1, $tests->lastPage()) as $page => $url)
                                     @if($page == $tests->currentPage())
                                        <span class="page-number active">{{ $page }}</span>
                                     @else
                                        <a href="{{ $url }}" class="page-number">{{ $page }}</a>
                                     @endif
                                  @endforeach
                               </div>
                               
                               @if($tests->hasMorePages())
                                  <a href="{{ $tests->nextPageUrl() }}" class="page-btn">Next</a>
                               @else
                                  <span class="page-btn disabled">Next</span>
                               @endif
                            </div>
                         </div>
                         @endif
                      @else
                         <div class="alert alert-info" style="margin-top: 20px; padding: 20px;">
                            <h5>No tests found</h5>
                            <p>Try adjusting your search criteria or <a href="{{ route('test-lists') }}">view all tests</a>.</p>
                         </div>
                      @endif
                   </div>

                   <!-- Additional Information -->
                   <div style="margin-top: 50px; padding-top: 30px; border-top: 2px solid #eee;">
                      <h4>About Our Tests</h4>
                      <p>At Biopassion Diagnostics, we provide comprehensive diagnostic testing services across multiple categories. Our tests are designed to provide accurate, timely results to support your healthcare decisions.</p>
                      
                      <h5 style="margin-top: 20px;">Test Categories Available:</h5>
                      <ul>
                         @foreach($categories as $category)
                            <li>{{ $category }}</li>
                         @endforeach
                      </ul>
                      
                      <h5 style="margin-top: 20px;">Need Help?</h5>
                      <p>If you have questions about any of our tests or need assistance finding the right test for your needs, please <a href="{{ route('contact-us') }}">contact us</a>. Our team is here to help.</p>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
</div>

<style>
.test-card:hover {
   transform: translateY(-5px);
   box-shadow: 0 4px 8px rgba(0,0,0,0.15) !important;
}

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

/* Custom Pagination Styling */
.custom-pagination {
   margin-top: 50px;
   padding: 30px 0;
   border-top: 1px solid #eee;
}

.pagination-info {
   text-align: center;
   margin-bottom: 20px;
   color: #666;
   font-size: 14px;
}

.pagination-controls {
   display: flex;
   justify-content: center;
   align-items: center;
   gap: 8px;
   flex-wrap: wrap;
}

.page-btn {
   display: inline-block;
   padding: 10px 20px;
   background-color: #fff;
   border: 1px solid #ddd;
   border-radius: 4px;
   color: #333;
   text-decoration: none;
   font-weight: 500;
   font-size: 14px;
   transition: all 0.3s ease;
   cursor: pointer;
}

.page-btn:hover:not(.disabled) {
   background-color: var(--main-color);
   color: #fff;
   border-color: var(--main-color);
   transform: translateY(-2px);
   box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
}

.page-btn.disabled {
   background-color: #f5f5f5;
   color: #999;
   border-color: #ddd;
   cursor: not-allowed;
   opacity: 0.6;
}

.page-numbers {
   display: flex;
   gap: 6px;
   flex-wrap: wrap;
   justify-content: center;
}

.page-number {
   display: inline-flex;
   align-items: center;
   justify-content: center;
   min-width: 40px;
   height: 40px;
   padding: 0 12px;
   background-color: #fff;
   border: 1px solid #ddd;
   border-radius: 4px;
   color: #333;
   text-decoration: none;
   font-weight: 500;
   font-size: 14px;
   transition: all 0.3s ease;
}

.page-number:hover {
   background-color: var(--main-color);
   color: #fff;
   border-color: var(--main-color);
   transform: translateY(-2px);
   box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
}

.page-number.active {
   background-color: var(--main-color);
   color: #fff;
   border-color: var(--main-color);
   font-weight: 600;
   cursor: default;
}

.page-number.active:hover {
   transform: none;
   box-shadow: none;
}

/* Responsive Pagination */
@media (max-width: 768px) {
   .pagination-controls {
      gap: 6px;
   }
   
   .page-btn {
      padding: 8px 16px;
      font-size: 13px;
   }
   
   .page-number {
      min-width: 36px;
      height: 36px;
      padding: 0 10px;
      font-size: 13px;
   }
}

@media (max-width: 480px) {
   .pagination-controls {
      gap: 4px;
   }
   
   .page-btn {
      padding: 8px 12px;
      font-size: 12px;
   }
   
   .page-numbers {
      gap: 4px;
   }
   
   .page-number {
      min-width: 32px;
      height: 32px;
      padding: 0 8px;
      font-size: 12px;
   }
}
</style>

@endsection
