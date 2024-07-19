@extends('admin.master')

@section('content')

<div class="page-wrapper">
    <div class="content">
       <div class="page-header">
          <div class="row">
             <div class="col-sm-12">
                <ul class="breadcrumb">
                   <li class="breadcrumb-item"><a href="{{url('/')}}/admin/home">Dashboard </a></li>
                   <li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
                   <li class="breadcrumb-item active">Admin Dashboard</li>
                </ul>
             </div>
          </div>
       </div>
       <div class="good-morning-blk">
          <div class="row">
             <div class="col-md-6">
                <div class="morning-user">
                   <h2>Good Day!, <span>{{Auth::User()->name}}</span></h2>
                   <p style="color:#000000">{{Auth::User()->content}}</p>
                </div>
             </div>
             <div class="col-md-6 position-blk">
                <div class="morning-img">
                   <img src="assets/img/morning-img-03.png" alt>
                </div>
             </div>
          </div>
       </div>



    </div>

 </div>


@endsection
