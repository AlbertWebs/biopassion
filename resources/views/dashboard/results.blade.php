@extends('dashboard.master')

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
                                  Patient
                               </th>
                               <th>
                                Date
                               </th>
                               <th>Description</th>
                               <th>File</th>
                            </tr>
                         </thead>
                         <tbody>
                            @foreach ($Results as $item)
                            <tr>

                                <td class="profile-image">
                                    <?php
                                        $Patient = \App\Models\User::find($item->user);
                                    ?>
                                    {{$Patient->name}}
                                </td>
                                <td class="profile-image">
                                   {{$item->created_at}}
                                </td>
                                <td style="max-width:300px; white-space: normal;">
                                    {{$item->content}}
                                </td>
                                <td>
                                    <a download="{{$Patient->name}}" class="btn btn-primary submit-form me-2" href="{{$item->file}}"  >
                                        Download <span class="fa fa-file-pdf-o"></span>
                                    </a>
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
