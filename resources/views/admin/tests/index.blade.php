@extends('admin.master')

@push('styles')
<style>
   /* Enhanced Card Styling */
   .card.card-table {
      border: none;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
      border-radius: 12px;
      overflow: hidden;
      transition: all 0.3s ease;
   }
   
   .card.card-table:hover {
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
      transform: translateY(-2px);
   }
   
   .page-table-header {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      padding: 20px;
      margin: -20px -20px 20px -20px;
      border-radius: 12px 12px 0 0;
   }
   
   .page-table-header h3 {
      color: #fff;
      margin: 0;
      font-weight: 600;
   }
   
   .page-table-header .btn-primary {
      background: rgba(255, 255, 255, 0.2);
      border: 2px solid rgba(255, 255, 255, 0.3);
      color: #fff;
      backdrop-filter: blur(10px);
      transition: all 0.3s ease;
   }
   
   .page-table-header .btn-primary:hover {
      background: rgba(255, 255, 255, 0.3);
      border-color: rgba(255, 255, 255, 0.5);
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
   }
   
   /* Enhanced Table Styling */
   .table.custom-table {
      border-collapse: separate;
      border-spacing: 0;
   }
   
   .table.custom-table thead th {
      background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
      color: #333;
      font-weight: 600;
      text-transform: uppercase;
      font-size: 12px;
      letter-spacing: 0.5px;
      padding: 15px;
      border: none;
      border-bottom: 3px solid #667eea;
   }
   
   .table.custom-table tbody tr {
      transition: all 0.3s ease;
      border-bottom: 1px solid #e9ecef;
   }
   
   .table.custom-table tbody tr:hover {
      background: linear-gradient(90deg, rgba(102, 126, 234, 0.05) 0%, rgba(118, 75, 162, 0.02) 100%);
      transform: scale(1.01);
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
   }
   
   .table.custom-table tbody td {
      padding: 15px;
      vertical-align: middle;
   }
   
   .badge.bg-danger {
      background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%) !important;
      padding: 6px 12px;
      border-radius: 20px;
      font-weight: 600;
      box-shadow: 0 2px 8px rgba(245, 87, 108, 0.3);
   }
   
   /* Action Dropdown Enhancement */
   .dropdown-menu {
      border: none;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
      border-radius: 8px;
      padding: 8px 0;
   }
   
   .dropdown-item {
      padding: 10px 20px;
      transition: all 0.3s ease;
   }
   
   .dropdown-item:hover {
      background: linear-gradient(90deg, rgba(102, 126, 234, 0.1) 0%, rgba(118, 75, 162, 0.05) 100%);
      transform: translateX(5px);
   }
   
   .dropdown-item i {
      margin-right: 8px;
      width: 18px;
   }
   
   /* Admin Pagination Styles */
   .admin-pagination-wrapper {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 20px;
      padding: 20px;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
   }
   
   .pagination-info {
      color: #fff;
      font-size: 14px;
      font-weight: 500;
   }
   
   .pagination-info strong {
      font-weight: 600;
      color: #fff;
   }
   
   .admin-pagination {
      display: flex;
      align-items: center;
      gap: 8px;
      flex-wrap: wrap;
   }
   
   .admin-pagination .page-btn {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      padding: 10px 18px;
      background: rgba(255, 255, 255, 0.2);
      color: #fff;
      border: 2px solid rgba(255, 255, 255, 0.3);
      border-radius: 8px;
      text-decoration: none;
      font-weight: 500;
      font-size: 14px;
      transition: all 0.3s ease;
      backdrop-filter: blur(10px);
   }
   
   .admin-pagination .page-btn:hover:not(.disabled) {
      background: rgba(255, 255, 255, 0.3);
      border-color: rgba(255, 255, 255, 0.5);
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
   }
   
   .admin-pagination .page-btn.disabled {
      opacity: 0.5;
      cursor: not-allowed;
      background: rgba(255, 255, 255, 0.1);
   }
   
   .admin-pagination .page-numbers {
      display: flex;
      align-items: center;
      gap: 6px;
   }
   
   .admin-pagination .page-number {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      min-width: 40px;
      height: 40px;
      padding: 0 12px;
      background: rgba(255, 255, 255, 0.2);
      color: #fff;
      border: 2px solid rgba(255, 255, 255, 0.3);
      border-radius: 8px;
      text-decoration: none;
      font-weight: 500;
      font-size: 14px;
      transition: all 0.3s ease;
      backdrop-filter: blur(10px);
   }
   
   .admin-pagination .page-number:hover {
      background: rgba(255, 255, 255, 0.3);
      border-color: rgba(255, 255, 255, 0.5);
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
   }
   
   .admin-pagination .page-number.active {
      background: #fff;
      color: #667eea;
      border-color: #fff;
      font-weight: 700;
      box-shadow: 0 4px 15px rgba(255, 255, 255, 0.4);
   }
   
   .admin-pagination .page-ellipsis {
      color: #fff;
      padding: 0 8px;
      font-weight: 600;
   }
   
   .admin-pagination .page-btn i {
      font-size: 12px;
   }
   
   @media (max-width: 768px) {
      .admin-pagination-wrapper {
         flex-direction: column;
         text-align: center;
      }
      
      .pagination-info {
         width: 100%;
         text-align: center;
         margin-bottom: 10px;
      }
      
      .admin-pagination {
         justify-content: center;
         width: 100%;
      }
      
      .admin-pagination .page-numbers {
         flex-wrap: wrap;
         justify-content: center;
      }
   }
</style>
@endpush

@section('content')
<div class="page-wrapper">
    <div class="content">
       <div class="page-header">
          <div class="row">
             <div class="col-sm-12">
                <ul class="breadcrumb">
                   <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Dashboard </a></li>
                   <li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
                   <li class="breadcrumb-item active">Tests Management</li>
                </ul>
             </div>
          </div>
       </div>

       @if(Session::has('message'))
       <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ Session::get('message') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>
       @endif

       <div class="row">
          <div class="col-sm-12">
             <div class="card card-table show-entire">
                <div class="card-body">
                   <div class="page-table-header mb-2">
                      <div class="row align-items-center">
                         <div class="col">
                            <div class="doctor-table-blk">
                               <h3>Tests Management</h3>
                            </div>
                         </div>
                         <div class="col-auto text-end flex-nowrap">
                            <a href="{{route('admin.tests.create')}}" class="btn btn-primary btn-sm">
                               <i class="fas fa-plus"></i> Add New Test
                            </a>
                         </div>
                      </div>
                   </div>

                   <div class="table-responsive">
                      <table class="table border-0 custom-table comman-table datatable mb-0">
                         <thead>
                            <tr>
                               <th>ID</th>
                               <th>Title</th>
                               <th>Category</th>
                               <th>Original Price</th>
                               <th>Current Price</th>
                               <th>Discount</th>
                               <th class="text-end">Actions</th>
                            </tr>
                         </thead>
                         <tbody>
                            @forelse ($tests as $test)
                            <tr>
                               <td>{{ $test->id }}</td>
                               <td>
                                  <div class="profile-image">
                                     <strong>{{ Str::limit($test->title, 50) }}</strong>
                                  </div>
                               </td>
                               <td>{{ $test->category ?? 'N/A' }}</td>
                               <td>
                                  @if($test->original_price)
                                     KSh {{ number_format($test->original_price, 2) }}
                                  @else
                                     N/A
                                  @endif
                               </td>
                               <td>
                                  @if($test->current_price)
                                     KSh {{ number_format($test->current_price, 2) }}
                                  @else
                                     N/A
                                  @endif
                               </td>
                               <td>
                                  @if($test->discount_percentage)
                                     <span class="badge bg-danger">{{ $test->discount_percentage }}%</span>
                                  @else
                                     N/A
                                  @endif
                               </td>
                               <td class="text-end">
                                  <div class="dropdown dropdown-action">
                                     <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                     <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="{{route('admin.tests.edit', $test->id)}}">
                                           <i class="fa-solid fa-pen-to-square m-r-5"></i> Edit
                                        </a>
                                        <a class="dropdown-item" href="#" onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this test?')) { document.getElementById('delete-form-{{$test->id}}').submit(); }">
                                           <i class="fa-solid fa-trash-can m-r-5"></i> Delete
                                        </a>
                                     </div>
                                  </div>
                                  <form id="delete-form-{{$test->id}}" action="{{route('admin.tests.destroy', $test->id)}}" method="POST" style="display: none;">
                                     @csrf
                                     @method('DELETE')
                                  </form>
                               </td>
                            </tr>
                            @empty
                            <tr>
                               <td colspan="7" class="text-center">No tests found. <a href="{{route('admin.tests.create')}}">Create one now</a></td>
                            </tr>
                            @endforelse
                         </tbody>
                      </table>
                   </div>

                   <!-- Custom Pagination -->
                   @if($tests->hasPages())
                   <div class="row mt-4">
                      <div class="col-sm-12">
                         <div class="admin-pagination-wrapper">
                            <div class="pagination-info">
                               <span>Showing <strong>{{ $tests->firstItem() ?? 0 }}</strong> to <strong>{{ $tests->lastItem() ?? 0 }}</strong> of <strong>{{ $tests->total() }}</strong> tests</span>
                            </div>
                            <nav class="admin-pagination">
                               @if($tests->onFirstPage())
                                  <span class="page-btn disabled">
                                     <i class="fas fa-chevron-left"></i> Previous
                                  </span>
                               @else
                                  <a href="{{ $tests->appends(request()->query())->previousPageUrl() }}" class="page-btn">
                                     <i class="fas fa-chevron-left"></i> Previous
                                  </a>
                               @endif
                               
                               <div class="page-numbers">
                                  @php
                                     $currentPage = $tests->currentPage();
                                     $lastPage = $tests->lastPage();
                                     $startPage = max(1, $currentPage - 2);
                                     $endPage = min($lastPage, $currentPage + 2);
                                  @endphp
                                  
                                  @if($startPage > 1)
                                     <a href="{{ $tests->appends(request()->query())->url(1) }}" class="page-number">1</a>
                                     @if($startPage > 2)
                                        <span class="page-ellipsis">...</span>
                                     @endif
                                  @endif
                                  
                                  @for($i = $startPage; $i <= $endPage; $i++)
                                     @if($i == $currentPage)
                                        <span class="page-number active">{{ $i }}</span>
                                     @else
                                        <a href="{{ $tests->appends(request()->query())->url($i) }}" class="page-number">{{ $i }}</a>
                                     @endif
                                  @endfor
                                  
                                  @if($endPage < $lastPage)
                                     @if($endPage < $lastPage - 1)
                                        <span class="page-ellipsis">...</span>
                                     @endif
                                     <a href="{{ $tests->appends(request()->query())->url($lastPage) }}" class="page-number">{{ $lastPage }}</a>
                                  @endif
                               </div>
                               
                               @if($tests->hasMorePages())
                                  <a href="{{ $tests->appends(request()->query())->nextPageUrl() }}" class="page-btn">
                                     Next <i class="fas fa-chevron-right"></i>
                                  </a>
                               @else
                                  <span class="page-btn disabled">
                                     Next <i class="fas fa-chevron-right"></i>
                                  </span>
                               @endif
                            </nav>
                         </div>
                      </div>
                   </div>
                   @endif
                </div>
             </div>
          </div>
       </div>
    </div>
</div>
@endsection
