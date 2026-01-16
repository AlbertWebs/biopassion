<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <link rel="shortcut icon" type="image/x-icon" href="{{asset('portal/assets/img/favicon.png')}}">
      <title>{{Auth::User()->name}} - Admin Portal</title>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="{{asset('portal/assets/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('portal/assets/plugins/fontawesome/css/fontawesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('portal/assets/plugins/fontawesome/css/all.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('portal/assets/css/select2.min.css')}}">
      <link rel="stylesheet" href="{{asset('portal/assets/plugins/datatables/datatables.min.css')}}">
      <link rel="stylesheet" href="{{asset('portal/assets/css/feather.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('portal/assets/css/style.css')}}">
      <style>
         /* Enhanced Sidebar Link Styling */
         .sidebar-menu ul li a.sidebar-link {
            position: relative;
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
            padding-left: 15px !important;
            margin-left: 5px;
            border-radius: 0 8px 8px 0;
         }
         
         .sidebar-menu ul li a.sidebar-link:hover {
            transform: translateX(5px);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
         }
         
         .sidebar-menu ul li a.sidebar-link.border-primary {
            border-left-color: #007bff;
         }
         
         .sidebar-menu ul li a.sidebar-link.border-primary:hover {
            background: linear-gradient(90deg, rgba(0, 123, 255, 0.1) 0%, rgba(0, 123, 255, 0.05) 100%);
         }
         
         .sidebar-menu ul li a.sidebar-link.border-info {
            border-left-color: #17a2b8;
         }
         
         .sidebar-menu ul li a.sidebar-link.border-info:hover {
            background: linear-gradient(90deg, rgba(23, 162, 184, 0.1) 0%, rgba(23, 162, 184, 0.05) 100%);
         }
         
         .sidebar-menu ul li a.sidebar-link.border-success {
            border-left-color: #28a745;
         }
         
         .sidebar-menu ul li a.sidebar-link.border-success:hover {
            background: linear-gradient(90deg, rgba(40, 167, 69, 0.1) 0%, rgba(40, 167, 69, 0.05) 100%);
         }
         
         .sidebar-menu ul li a.sidebar-link.border-warning {
            border-left-color: #ffc107;
         }
         
         .sidebar-menu ul li a.sidebar-link.border-warning:hover {
            background: linear-gradient(90deg, rgba(255, 193, 7, 0.1) 0%, rgba(255, 193, 7, 0.05) 100%);
         }
         
         .sidebar-menu ul li a.sidebar-link.border-danger {
            border-left-color: #dc3545;
         }
         
         .sidebar-menu ul li a.sidebar-link.border-danger:hover {
            background: linear-gradient(90deg, rgba(220, 53, 69, 0.1) 0%, rgba(220, 53, 69, 0.05) 100%);
         }
         
         .sidebar-menu ul li a.sidebar-link.border-purple {
            border-left-color: #6f42c1;
         }
         
         .sidebar-menu ul li a.sidebar-link.border-purple:hover {
            background: linear-gradient(90deg, rgba(111, 66, 193, 0.1) 0%, rgba(111, 66, 193, 0.05) 100%);
         }
         
         .sidebar-menu ul li a.sidebar-link.border-teal {
            border-left-color: #20c997;
         }
         
         .sidebar-menu ul li a.sidebar-link.border-teal:hover {
            background: linear-gradient(90deg, rgba(32, 201, 151, 0.1) 0%, rgba(32, 201, 151, 0.05) 100%);
         }
         
         .sidebar-menu ul li a.sidebar-link.border-orange {
            border-left-color: #fd7e14;
         }
         
         .sidebar-menu ul li a.sidebar-link.border-orange:hover {
            background: linear-gradient(90deg, rgba(253, 126, 20, 0.1) 0%, rgba(253, 126, 20, 0.05) 100%);
         }
         
         .sidebar-menu ul li a.sidebar-link.border-red {
            border-left-color: #e74c3c;
         }
         
         .sidebar-menu ul li a.sidebar-link.border-red:hover {
            background: linear-gradient(90deg, rgba(231, 76, 60, 0.1) 0%, rgba(231, 76, 60, 0.05) 100%);
         }
         
         /* Active state for sidebar links */
         .sidebar-menu ul li.active > a.sidebar-link,
         .sidebar-menu ul li a.sidebar-link.active {
            background: linear-gradient(90deg, rgba(102, 126, 234, 0.15) 0%, rgba(118, 75, 162, 0.1) 100%);
            font-weight: 600;
         }
      </style>
      @stack('styles')
   </head>
   <body>
      <div class="main-wrapper">
         <div class="header">
            <div class="header-left">
               <a href="index.html" class="logo">
               <img src="{{url('/')}}/uploads/logo/logo.png" width="45" height="45" alt> <span>Admin</span>
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
               {{-- <li class="nav-item dropdown d-none d-md-block">
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
               </li> --}}
               <li class="nav-item dropdown has-arrow user-profile-list">
                  <a href="#" class="dropdown-toggle nav-link user-link" data-bs-toggle="dropdown">
                     <div class="user-names">
                        <h5>{{Auth::User()->name}} </h5>
                        <span>Admin</span>
                     </div>
                     <span class="user-img">
                     <img src="{{asset('portal/assets/img/user.jpg')}}" alt="Admin">
                     </span>
                  </a>
                  <div class="dropdown-menu">
                     <a class="dropdown-item" href="#">My Profile</a>
                     <a class="dropdown-item" href="#">Edit Profile</a>
                     <a class="dropdown-item" href="#">Settings</a>
                     <a onclick="document.getElementById('logout-form').submit();" class="dropdown-item" href="#">Logout</a>
                  </div>
               </li>
               {{-- <li class="nav-item ">
                  <a href="settings.html" class="hasnotifications nav-link"><img src="{{asset('portal/assets/img/icons/setting-icon-01.svg')}}" alt> </a>
               </li> --}}
            </ul>
            <div class="dropdown mobile-user-menu float-end">
               <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-ellipsis-vertical"></i></a>
               <div class="dropdown-menu dropdown-menu-end">
                     <a class="dropdown-item" href="#">My Profile</a>
                     <a class="dropdown-item" href="#">Edit Profile</a>
                     <a class="dropdown-item" href="#">Settings</a>
                     <a onclick="document.getElementById('logout-form').submit();" class="dropdown-item" href="#">Logout</a>
               </div>
            </div>
         </div>
         <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
               <div id="sidebar-menu" class="sidebar-menu">
                  <ul>
                     <li class="menu-title">Main</li>
                     <li>
                        <a href="{{url('/')}}/dashboard" class="sidebar-link border-primary"><span class="menu-side"><img src="{{asset('portal/assets/img/icons/menu-icon-01.svg')}}" alt></span> <span> Dashboard </span> </a>
                     </li>
                     <li>
                        <a href="{{url('/')}}/" class="sidebar-link border-info"><span class="menu-side"><img src="{{asset('portal/assets/img/icons/clock.svg')}}" alt></span> <span> Main Website </span> </a>
                     </li>
                     <li>
                        <a href="{{route('admin.patients')}}" class="sidebar-link border-success"><span class="menu-side"><img src="{{asset('portal/assets/img/icons/menu-icon-02.svg')}}" alt></span> <span> My Patients </span> </a>
                     </li>
                     <li>
                        <a href="{{route('admin.results')}}" class="sidebar-link border-warning"><span class="menu-side"><img src="{{asset('portal/assets/img/icons/menu-icon-03.svg')}}" alt></span> <span>Posted Results </span> </a>
                     </li>
                     <li>
                        <a href="{{route('admin.tests.index')}}" class="sidebar-link border-danger"><span class="menu-side"><img src="{{asset('portal/assets/img/icons/menu-icon-03.svg')}}" alt></span> <span>Tests Management </span> </a>
                     </li>
                     {{-- <li >
                        <a href="#"><span class="menu-side"><img src="{{asset('portal/assets/img/icons/menu-icon-03.svg')}}" alt></span> <span>Post Results </span> </a>
                     </li> --}}
                     <li>

                     </li>
                     <li>
                        <a href="#" class="sidebar-link border-purple"><span class="menu-side"><img src="{{asset('portal/assets/img/icons/menu-icon-04.svg')}}" alt></span> <span> Appoinments </span> </a>
                     </li>
                     <li>
                        <a target="new" href="{{route('privacy-policy')}}" class="sidebar-link border-teal"><span class="menu-side"><img src="{{asset('portal/assets/img/icons/edit.svg')}}" alt></span> <span> Privacy Policy </span> </a>
                     </li>
                     <li>
                        <a target="new" href="{{route('terms-and-conditions')}}" class="sidebar-link border-orange"><span class="menu-side"><img src="{{asset('portal/assets/img/icons/edit.svg')}}" alt></span> <span> Terms and Conditions </span> </a>
                     </li>

                  </ul>
                  <div class="logout-btn">
                     <a href="#" onclick="document.getElementById('logout-form').submit();" class="sidebar-link border-red"><span class="menu-side"><img src="{{asset('portal/assets/img/icons/logout.svg')}}" alt></span> <span>Logout</span></a>
                  </div>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
               </div>
            </div>
         </div>
         @yield('content')
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
