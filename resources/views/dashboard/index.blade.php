<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <link rel="shortcut icon" type="image/x-icon" href="{{asset('portal/assets/img/favicon.png')}}">
      <title>{{Auth::User()->name}} - Patients Portal</title>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="{{asset('portal/assets/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('portal/assets/plugins/fontawesome/css/fontawesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('portal/assets/plugins/fontawesome/css/all.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('portal/assets/css/select2.min.css')}}">
      <link rel="stylesheet" href="{{asset('portal/assets/plugins/datatables/datatables.min.css')}}">
      <link rel="stylesheet" href="{{asset('portal/assets/css/feather.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('portal/assets/css/style.css')}}">
   </head>
   <body>
      <div class="main-wrapper">
         <div class="header">
            <div class="header-left">
               <a href="index.html" class="logo">
               <img src="{{asset('portal/assets/img/logo.png')}}" width="35" height="35" alt> <span>Biopassion</span>
               </a>
            </div>
            <a id="toggle_btn" href="javascript:void(0);"><img src="{{asset('portal/assets/img/icons/bar-icon.svg')}}" alt></a>
            <a id="mobile_btn" class="mobile_btn float-start" href="#sidebar"><img src="{{asset('portal/assets/img/icons/bar-icon.svg')}}" alt></a>
            <div class="top-nav-search mob-view">
               <form>
                  <input type="text" class="form-control" placeholder="Search here">
                  <a class="btn"><img src="{{asset('portal/assets/img/icons/search-normal.svg')}}" alt></a>
               </form>
            </div>
            <ul class="nav user-menu float-end">
               <li class="nav-item dropdown d-none d-md-block">
                  <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown"><img src="{{asset('portal/assets/img/icons/note-icon-02.svg')}}" alt><span class="pulse"></span> </a>
                  <div class="dropdown-menu notifications">
                     <div class="topnav-dropdown-header">
                        <span>Notifications</span>
                     </div>
                     <div class="drop-scroll">
                        <ul class="notification-list">
                           <li class="notification-message">
                              <a href="activities.html">
                                 <div class="media">
                                    <span class="avatar">
                                    <img alt="John Doe" src="{{asset('portal/assets/img/user.jpg')}}" class="img-fluid">
                                    </span>
                                    <div class="media-body">
                                       <p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
                                       <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                    </div>
                                 </div>
                              </a>
                           </li>
                        </ul>
                     </div>
                     <div class="topnav-dropdown-footer">
                        <a href="activities.html">View all Notifications</a>
                     </div>
                  </div>
               </li>
               <li class="nav-item dropdown d-none d-md-block">
                  <a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link"><img src="{{asset('portal/assets/img/icons/note-icon-01.svg')}}" alt><span class="pulse"></span> </a>
               </li>
               <li class="nav-item dropdown has-arrow user-profile-list">
                  <a href="#" class="dropdown-toggle nav-link user-link" data-bs-toggle="dropdown">
                     <div class="user-names">
                        <h5>{{Auth::User()->name}} </h5>
                        <span>Patient</span>
                     </div>
                     <span class="user-img">
                     <img src="{{asset('portal/assets/img/user.jpg')}}" alt="Admin">
                     </span>
                  </a>
                  <div class="dropdown-menu">
                     <a class="dropdown-item" href="profile.html">My Profile</a>
                     <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                     <a class="dropdown-item" href="settings.html">Settings</a>
                     <a class="dropdown-item" href="login.html">Logout</a>
                  </div>
               </li>
               {{-- <li class="nav-item ">
                  <a href="settings.html" class="hasnotifications nav-link"><img src="{{asset('portal/assets/img/icons/setting-icon-01.svg')}}" alt> </a>
               </li> --}}
            </ul>
            <div class="dropdown mobile-user-menu float-end">
               <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-ellipsis-vertical"></i></a>
               <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="profile.html">My Profile</a>
                  <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                  <a class="dropdown-item" href="settings.html">Settings</a>
                  <a class="dropdown-item" href="login.html">Logout</a>
               </div>
            </div>
         </div>
         <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
               <div id="sidebar-menu" class="sidebar-menu">
                  <ul>
                     <li class="menu-title">Main</li>
                     <li class="submenu">
                        <a href="{{url('/')}}/dashboard"><span class="menu-side"><img src="{{asset('portal/assets/img/icons/menu-icon-01.svg')}}" alt></span> <span> Dashboard </span> </a>
                     </li>
                     <li class="submenu">
                        <a href="{{url('/')}}/"><span class="menu-side"><img src="{{asset('portal/assets/img/icons/clock.svg')}}" alt></span> <span> Main Website </span> </a>
                     </li>
                     <li class="submenu">
                        <a href="#"><span class="menu-side"><img src="{{asset('portal/assets/img/icons/menu-icon-02.svg')}}" alt></span> <span> My Profile </span> </a>

                     </li>
                     <li class="submenu">
                        <a href="#"><span class="menu-side"><img src="{{asset('portal/assets/img/icons/menu-icon-03.svg')}}" alt></span> <span>My Results </span> </a>

                     </li>
                     <li class="submenu">

                     </li>
                     <li class="submenu">
                        <a href="#"><span class="menu-side"><img src="{{asset('portal/assets/img/icons/menu-icon-04.svg')}}" alt></span> <span> My Appoinment </span> </a>

                     </li>
                     <li class="submenu">
                        <a href="#"><span class="menu-side"><img src="{{asset('portal/assets/img/icons/edit.svg')}}" alt></span> <span> Privacy Policy </span> </a>

                     </li>
                     <li class="submenu">
                        <a href="#"><span class="menu-side"><img src="{{asset('portal/assets/img/icons/edit.svg')}}" alt></span> <span> Terms and Conditions </span> </a>

                     </li>

                  </ul>
                  <div class="logout-btn">
                     <a href="#" onclick="document.getElementById('logout-form').submit();"><span class="menu-side"><img src="{{asset('portal/assets/img/icons/logout.svg')}}" alt></span> <span>Logout</span></a>
                  </div>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
               </div>
            </div>
         </div>
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
                           <p>Patients short profile goes here</p>
                        </div>
                     </div>
                     <div class="col-md-6 position-blk">
                        <div class="morning-img">
                           <img src="assets/img/morning-img-03.png" alt>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="row">
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
               </div>

            </div>
            <div class="notification-box">
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
            </div>
         </div>
      </div>
      <div class="sidebar-overlay" data-reff></div>

      <script src="{{asset('portal/assets/js/jquery-3.7.1.min.js')}}" type="8cd0ceab8ad2b4cf32fe1ab0-text/javascript"></script>
      <script src="{{asset('portal/assets/js/bootstrap.bundle.min.js')}}" type="8cd0ceab8ad2b4cf32fe1ab0-text/javascript"></script>
      <script src="{{asset('portal/assets/js/feather.min.js')}}" type="8cd0ceab8ad2b4cf32fe1ab0-text/javascript"></script>
      <script src="{{asset('portal/assets/js/jquery.slimscroll.js')}}" type="8cd0ceab8ad2b4cf32fe1ab0-text/javascript"></script>
      <script src="{{asset('portal/assets/js/select2.min.js')}}" type="8cd0ceab8ad2b4cf32fe1ab0-text/javascript"></script>
      <script src="{{asset('portal/assets/plugins/datatables/jquery.dataTables.min.js')}}" type="8cd0ceab8ad2b4cf32fe1ab0-text/javascript"></script>
      <script src="{{asset('portal/assets/plugins/datatables/datatables.min.js')}}" type="8cd0ceab8ad2b4cf32fe1ab0-text/javascript"></script>
      <script src="{{asset('portal/assets/js/jquery.waypoints.js')}}" type="8cd0ceab8ad2b4cf32fe1ab0-text/javascript"></script>
      <script src="{{asset('portal/assets/js/jquery.counterup.min.js')}}" type="8cd0ceab8ad2b4cf32fe1ab0-text/javascript"></script>
      <script src="{{asset('portal/assets/plugins/apexchart/apexcharts.min.js')}}" type="8cd0ceab8ad2b4cf32fe1ab0-text/javascript"></script>
      <script src="{{asset('portal/assets/plugins/apexchart/chart-data.js')}}" type="8cd0ceab8ad2b4cf32fe1ab0-text/javascript"></script>
      <script src="{{asset('portal/assets/js/app.js')}}" type="8cd0ceab8ad2b4cf32fe1ab0-text/javascript"></script>



      <script src="{{asset('portal/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js')}}" data-cf-settings="8cd0ceab8ad2b4cf32fe1ab0-|49" defer></script>
   </body>
</html>
