@extends('admin.master')

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

                   <div class="row mt-3">
                      <div class="col-sm-12">
                         {{ $tests->links() }}
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
</div>
@endsection
