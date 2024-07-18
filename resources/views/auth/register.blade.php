<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png')}}">
      <title>Patients Portal - Biopassion Diagnostics</title>


      <link rel="stylesheet" type="text/css" href="{{asset('portal/assets/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('portal/assets/css/feather.css')}}">
      <link rel="stylesheet" href="{{asset('portal/assets/plugins/fontawesome/css/fontawesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('portal/assets/plugins/fontawesome/css/all.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('portal/assets/css/style.css')}}">


   </head>
   <body>
      <div class="main-wrapper login-body">
         <div class="container-fluid px-0">
            <div class="row">
               <div class="col-lg-6 login-wrap">
                  <div class="login-sec">
                     <div class="log-img">
                        <img class="img-fluid" src="{{asset('theme/assets/images/icons/team-icon.png')}}" alt="Logo">
                        {{-- <img class="img-fluid" src="{{asset('uploads/microscope.png')}}" alt="Logo"> --}}
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 login-wrap-bg">
                  <div class="login-wrapper">
                     <div class="loginbox">
                        <div class="login-right">
                           <div class="login-right-wrap">
                              <div class="account-logo">
                                 {{-- <a href="index.html"><img src="{{asset('portal/assets/img/login-logo.png')}}" alt></a> --}}
                              </div>
                              <h2>Register</h2>
                              <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="input-block">
                                   <label>Full Name <span class="login-danger">*</span></label>
                                   <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                   @error('name')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                   @enderror
                                </div>
                                <div class="input-block">
                                   <label>Email <span class="login-danger">*</span></label>
                                   <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-block">
                                    <label>Phone <span class="login-danger">*</span></label>
                                    <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile">

                                     @error('mobile')
                                         <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                     @enderror
                                 </div>
                                <div class="input-block">
                                   <label>Password <span class="login-danger">*</span></label>
                                   <input id="password" type="password" class="form-control pass-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                   @error('password')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                   @enderror
                                   <span class="profile-views feather-eye-off toggle-password"></span>
                                </div>
                                <div class="input-block">
                                   <label>Confirm Password <span class="login-danger">*</span></label>
                                   {{-- <input class="form-control pass-input-confirm" type="password"> --}}
                                   <input id="password-confirm" type="password" class="form-control pass-input-confirm" name="password_confirmation" required autocomplete="new-password">
                                   <span class="profile-views feather-eye-off confirm-password"></span>
                                </div>
                                <div class="forgotpass">
                                   <div class="remember-me">
                                      <label class="custom_check mr-2 mb-0 d-inline-flex remember-me"> I agree to the <a href="javascript:;">&nbsp terms of service </a>&nbsp and <a href="javascript:;">&nbsp privacy policy </a>
                                      <input type="checkbox" name="radio">
                                      <span class="checkmark"></span>
                                      </label>
                                   </div>
                                </div>
                                <div class="input-block login-btn">
                                   <button class="btn btn-primary btn-block" type="submit">Sign Up</button>
                                </div>
                             </form>
                              <div class="next-sign">
                                 <p class="account-subtitle">Already Have an account? <a href="{{route('login')}}">Sign In</a></p>
                                 <div class="social-login">
                                    <a href="javascript:;"><img src="{{asset('portal/assets/img/icons/login-icon-01.svg')}}" alt></a>
                                    {{-- <a href="javascript:;"><img src="{{asset('portal/assets/img/icons/login-icon-02.svg')}}" alt></a>
                                    <a href="javascript:;"><img src="{{asset('portal/assets/img/icons/login-icon-03.svg')}}" alt></a> --}}
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>


      <script src="{{asset('portal/assets/js/jquery-3.7.1.min.js')}}" type="8cd0ceab8ad2b4cf32fe1ab0-text/javascript"></script>
      <script src="{{asset('portal/assets/js/bootstrap.bundle.min.js')}}" type="8cd0ceab8ad2b4cf32fe1ab0-text/javascript"></script>
      <script src="{{asset('portal/assets/js/feather.min.js')}}" type="8cd0ceab8ad2b4cf32fe1ab0-text/javascript"></script>
      <script src="{{asset('portal/assets/js/app.js')}}" type="8cd0ceab8ad2b4cf32fe1ab0-text/javascript"></script>
      <script src="{{asset('portal/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js')}}" data-cf-settings="8cd0ceab8ad2b4cf32fe1ab0-|49" defer></script>
   </body>

</html>
