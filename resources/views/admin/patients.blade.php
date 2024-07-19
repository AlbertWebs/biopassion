@extends('admin.master')

@section('content')
<div class="page-wrapper">
    <div class="content">

       <div class="row">
          <div class="col-sm-12">
             <div class="card card-table show-entire">
                <div class="card-body">

                   <div class="table-responsive">
                      <table class="table border-0 custom-table comman-table datatable mb-0">
                         <thead>
                            <tr>
                               <th>
                                  Name
                               </th>
                               <th>Email</th>


                               <th class="text-end">Action</th>
                            </tr>
                         </thead>
                         <tbody>
                            @foreach ($Users as $white)
                            <tr>

                                <td class="profile-image">
                                    {{$white->name}}
                                </td>
                                <td>{{$white->email}}</td>


                                <td class="text-end">
                                   <a class="btn btn-primary submit-form me-2" href="{{url('/')}}/admin/addResults/{{$white->id}}"  >Add Results <span class="fa fa-file-pdf-o"></span></a>
                                </td>
                             </tr>
                            @endforeach

                         </tbody>
                      </table>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>

 </div>
@endsection
