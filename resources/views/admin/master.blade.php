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
                     <li >
                        <a href="{{url('/')}}/dashboard"><span class="menu-side"><img src="{{asset('portal/assets/img/icons/menu-icon-01.svg')}}" alt></span> <span> Dashboard </span> </a>
                     </li>
                     <li >
                        <a href="{{url('/')}}/"><span class="menu-side"><img src="{{asset('portal/assets/img/icons/clock.svg')}}" alt></span> <span> Main Website </span> </a>
                     </li>
                     <li >
                        <a href="{{route('admin.patients')}}"><span class="menu-side"><img src="{{asset('portal/assets/img/icons/menu-icon-02.svg')}}" alt></span> <span> My Patients </span> </a>

                     </li>
                     <li >
                        <a href="{{route('admin.results')}}"><span class="menu-side"><img src="{{asset('portal/assets/img/icons/menu-icon-03.svg')}}" alt></span> <span>Posted Results </span> </a>

                     </li>
                     {{-- <li >
                        <a href="#"><span class="menu-side"><img src="{{asset('portal/assets/img/icons/menu-icon-03.svg')}}" alt></span> <span>Post Results </span> </a>
                     </li> --}}
                     <li >

                     </li>
                     <li >
                        <a href="#"><span class="menu-side"><img src="{{asset('portal/assets/img/icons/menu-icon-04.svg')}}" alt></span> <span> Appoinments </span> </a>

                     </li>
                     <li>
                        <a target="new" href="{{route('privacy-policy')}}"><span class="menu-side"><img src="{{asset('portal/assets/img/icons/edit.svg')}}" alt></span> <span> Privacy Policy </span> </a>

                     </li>
                     <li>
                        <a target="new" href="{{route('terms-and-conditions')}}"><span class="menu-side"><img src="{{asset('portal/assets/img/icons/edit.svg')}}" alt></span> <span> Terms and Conditions </span> </a>
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
