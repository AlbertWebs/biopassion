@extends('dashboard.master')

@section('content')

<div class="page-wrapper">
    <div class="content">
       <div class="page-header">
          <div class="row">
             <div class="col-sm-12">
                <ul class="breadcrumb">
                   <li class="breadcrumb-item"><a href="index.html">Dashboard </a></li>
                   <li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
                   <li class="breadcrumb-item active">Patient Dashboard</li>
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

       {{-- <div class="row">
          <div class="col-12 col-md-6 col-xl-3 d-flex">
             <div class="card report-blk">
                <div class="card-body">
                   <div class="report-head">
                      <h4>Heart Rate</h4>
                   </div>
                   <div class="dash-content">
                      <h5>110 <span>bpm</span></h5>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-12 col-md-6 col-xl-3 d-flex">
             <div class="card report-blk">
                <div class="card-body">
                   <div class="report-head">
                      <h4>Temperature</h4>
                   </div>
                   <div class="dash-content">
                      <h5>38.6 <span>c</span></h5>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-12 col-md-6 col-xl-3 d-flex">
             <div class="card report-blk">
                <div class="card-body">
                   <div class="report-head">
                      <h4>Blood Pressure</h4>
                   </div>
                   <div class="dash-content">
                      <h5>120 <span>mm/Hg</span></h5>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-12 col-md-6 col-xl-3 d-flex">
             <div class="card report-blk">
                <div class="card-body">
                   <div class="report-head">
                      <h4>Blood Group</h4>
                   </div>
                   <div class="dash-content">
                      <h5>O<span>-ve</span></h5>
                   </div>
                </div>
             </div>
          </div>
       </div> --}}

    </div>
    {{-- <div class="notification-box">
       <div class="msg-sidebar notifications msg-noti">
          <div class="topnav-dropdown-header">
             <span>Messages</span>
          </div>
          <div class="drop-scroll msg-list-scroll" id="msg_list">
             <ul class="list-box">
                <li>
                   <a href="chat.html">
                      <div class="list-item">
                         <div class="list-left">
                            <span class="avatar">R</span>
                         </div>
                         <div class="list-body">
                            <span class="message-author">Richard Miles </span>
                            <span class="message-time">12:28 AM</span>
                            <div class="clearfix"></div>
                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                         </div>
                      </div>
                   </a>
                </li>
                <li>
                   <a href="chat.html">
                      <div class="list-item new-message">
                         <div class="list-left">
                            <span class="avatar">J</span>
                         </div>
                         <div class="list-body">
                            <span class="message-author">John Doe</span>
                            <span class="message-time">1 Aug</span>
                            <div class="clearfix"></div>
                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                         </div>
                      </div>
                   </a>
                </li>
                <li>
                   <a href="chat.html">
                      <div class="list-item">
                         <div class="list-left">
                            <span class="avatar">T</span>
                         </div>
                         <div class="list-body">
                            <span class="message-author"> Tarah Shropshire </span>
                            <span class="message-time">12:28 AM</span>
                            <div class="clearfix"></div>
                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                         </div>
                      </div>
                   </a>
                </li>
                <li>
                   <a href="chat.html">
                      <div class="list-item">
                         <div class="list-left">
                            <span class="avatar">M</span>
                         </div>
                         <div class="list-body">
                            <span class="message-author">Mike Litorus</span>
                            <span class="message-time">12:28 AM</span>
                            <div class="clearfix"></div>
                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                         </div>
                      </div>
                   </a>
                </li>
                <li>
                   <a href="chat.html">
                      <div class="list-item">
                         <div class="list-left">
                            <span class="avatar">C</span>
                         </div>
                         <div class="list-body">
                            <span class="message-author"> Catherine Manseau </span>
                            <span class="message-time">12:28 AM</span>
                            <div class="clearfix"></div>
                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                         </div>
                      </div>
                   </a>
                </li>
                <li>
                   <a href="chat.html">
                      <div class="list-item">
                         <div class="list-left">
                            <span class="avatar">D</span>
                         </div>
                         <div class="list-body">
                            <span class="message-author"> Domenic Houston </span>
                            <span class="message-time">12:28 AM</span>
                            <div class="clearfix"></div>
                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                         </div>
                      </div>
                   </a>
                </li>
                <li>
                   <a href="chat.html">
                      <div class="list-item">
                         <div class="list-left">
                            <span class="avatar">B</span>
                         </div>
                         <div class="list-body">
                            <span class="message-author"> Buster Wigton </span>
                            <span class="message-time">12:28 AM</span>
                            <div class="clearfix"></div>
                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                         </div>
                      </div>
                   </a>
                </li>
                <li>
                   <a href="chat.html">
                      <div class="list-item">
                         <div class="list-left">
                            <span class="avatar">R</span>
                         </div>
                         <div class="list-body">
                            <span class="message-author"> Rolland Webber </span>
                            <span class="message-time">12:28 AM</span>
                            <div class="clearfix"></div>
                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                         </div>
                      </div>
                   </a>
                </li>
                <li>
                   <a href="chat.html">
                      <div class="list-item">
                         <div class="list-left">
                            <span class="avatar">C</span>
                         </div>
                         <div class="list-body">
                            <span class="message-author"> Claire Mapes </span>
                            <span class="message-time">12:28 AM</span>
                            <div class="clearfix"></div>
                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                         </div>
                      </div>
                   </a>
                </li>
                <li>
                   <a href="chat.html">
                      <div class="list-item">
                         <div class="list-left">
                            <span class="avatar">M</span>
                         </div>
                         <div class="list-body">
                            <span class="message-author">Melita Faucher</span>
                            <span class="message-time">12:28 AM</span>
                            <div class="clearfix"></div>
                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                         </div>
                      </div>
                   </a>
                </li>
                <li>
                   <a href="chat.html">
                      <div class="list-item">
                         <div class="list-left">
                            <span class="avatar">J</span>
                         </div>
                         <div class="list-body">
                            <span class="message-author">Jeffery Lalor</span>
                            <span class="message-time">12:28 AM</span>
                            <div class="clearfix"></div>
                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                         </div>
                      </div>
                   </a>
                </li>
                <li>
                   <a href="chat.html">
                      <div class="list-item">
                         <div class="list-left">
                            <span class="avatar">L</span>
                         </div>
                         <div class="list-body">
                            <span class="message-author">Loren Gatlin</span>
                            <span class="message-time">12:28 AM</span>
                            <div class="clearfix"></div>
                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                         </div>
                      </div>
                   </a>
                </li>
                <li>
                   <a href="chat.html">
                      <div class="list-item">
                         <div class="list-left">
                            <span class="avatar">T</span>
                         </div>
                         <div class="list-body">
                            <span class="message-author">Tarah Shropshire</span>
                            <span class="message-time">12:28 AM</span>
                            <div class="clearfix"></div>
                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                         </div>
                      </div>
                   </a>
                </li>
             </ul>
          </div>
          <div class="topnav-dropdown-footer">
             <a href="chat.html">See all messages</a>
          </div>
       </div>
    </div> --}}
 </div>


@endsection
