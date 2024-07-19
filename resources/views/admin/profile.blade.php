@extends('admin.master')

@section('content')
<div class="page-wrapper">
    <div class="content">

       <div class="row">
          <div class="col-sm-12">
             <div class="card">
                <div class="card-body">
                   <form action="{{route('update-profile')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="row">
                         <div class="col-12">
                            <div class="form-heading">
                               <h4>Organization Details</h4>
                            </div>
                         </div>
                         <div class="col-12 col-md-6 col-xl-4">
                            <div class="input-block local-forms">
                               <label>First Name <span class="login-danger">*</span></label>
                               <input name="fname" class="form-control" type="text" value="{{Auth::User()->fname}}">
                            </div>
                         </div>
                         <div class="col-12 col-md-6 col-xl-4">
                            <div class="input-block local-forms">
                               <label>Last Name <span class="login-danger">*</span></label>
                               <input name="lname" class="form-control" type="text" value="{{Auth::User()->lname}}">
                            </div>
                         </div>
                         <div class="col-12 col-md-6 col-xl-4">
                            <div class="input-block local-forms">
                               <label>User Name <span class="login-danger">*</span></label>
                               <input name="name" class="form-control" type="text" value="{{Auth::User()->name}}">
                            </div>
                         </div>
                         <div class="col-12 col-md-6 col-xl-6">
                            <div class="input-block local-forms">
                               <label>Mobile <span class="login-danger">*</span></label>
                               <input name="phone" class="form-control" type="text" value="{{Auth::User()->phone}}">
                            </div>
                         </div>
                         <div class="col-12 col-md-6 col-xl-6">
                            <div class="input-block local-forms">
                               <label>Email <span class="login-danger">*</span></label>
                               <input readonly name="email" class="form-control" type="email" value="{{Auth::User()->email}}">
                            </div>
                         </div>

                         <div class="col-12 col-md-6 col-xl-4">
                            <div class="input-block local-forms">
                               <label>Title <span class="login-danger">*</span></label>
                               <select class="form-control select" name="title">
                                <option value="{{Auth::User()->title}}" selected readonly> {{Auth::User()->title}}</option>
                                <option value="Prof">Prof</option>
                                <option value="Dr">Dr</option>
                                <option value="Mr">Mr</option>
                                <option value="Miss">Miss</option>
                                <option value="Mrs">Mrs</option>
                                <option value="Ms">Ms</option>
                                <option value="Other">Other</option>
                               </select>
                            </div>
                         </div>

                         <div class="col-12 col-md-6 col-xl-4">
                            <div class="input-block local-forms">
                               <label>Organization <span class="login-danger">*</span></label>
                               <input class="form-control" type="text" name="organization" value="{{Auth::User()->organization}}">
                            </div>
                         </div>
                         <div class="col-12 col-md-6 col-xl-4">
                            <div class="input-block local-forms">
                               <label>Designation <span class="login-danger">*</span></label>
                               <input name="Job_function" class="form-control" type="text" value="{{Auth::User()->Job_function}}">
                            </div>
                         </div>

                         <div class="col-12 col-sm-12">
                            <div class="input-block local-forms">
                               <label>Address <span class="login-danger">*</span></label>
                               <textarea name="address" class="form-control" rows="3" cols="30">{{Auth::User()->address}}</textarea>
                            </div>
                         </div>
                         <div class="col-12 col-md-6 col-xl-4">
                            <div class="input-block local-forms">
                               <label>city <span class="login-danger">*</span></label>
                               <input name="city" class="form-control" type="text" value="{{Auth::User()->city}}">
                            </div>
                         </div>
                         <div class="col-12 col-md-6 col-xl-4">
                            <div class="input-block local-forms">
                               <label>Country <span class="login-danger">*</span></label>
                               <input name="country" class="form-control" type="text" value="{{Auth::User()->country}}">
                            </div>
                         </div>
                         <div class="col-12 col-md-6 col-xl-4">
                            <div class="input-block local-forms">
                               <label>State <span class="login-danger">*</span></label>
                               <input name="state" class="form-control" type="text" value="{{Auth::User()->state}}">
                            </div>
                         </div>

                         <div class="col-12 col-sm-12">
                            <div class="input-block local-forms">
                               <label>Start Biography <span class="login-danger">*</span></label>
                               <textarea name="content" class="form-control" rows="3" cols="30">{{Auth::User()->content}}</textarea>
                            </div>
                         </div>
                         <div class="col-12 col-md-6 col-xl-6">
                            <div class="input-block local-top-form">
                               <label class="local-top">Avatar
                                    {{-- <span class="login-danger">*</span> --}}
                                </label>
                               <div class="settings-btn upload-files-avator">
                                  <input type="file" accept="image/*" name="image" id="file" onchange="if (!window.__cfRLUnblockHandlers) return false; loadFile(event)" class="hide-input" data-cf-modified-2f1a7cf053a48a9b67532101->
                                  <label for="file" class="upload">Choose File</label>
                               </div>
                               @if(Auth::User()->image == null)
                               <div class="upload-images upload-size">
                                  <img src="{{asset('portal/assets/img/favicon.png')}}" alt="Image">
                                  <a href="javascript:void(0);" class="btn-icon logo-hide-btn">
                                  <i class="feather-x-circle"></i>
                                  </a>
                               </div>
                               @else
                               <div class="upload-images upload-size">
                                <img src="{{Auth::User()->image}}" alt="Image">
                                <a href="javascript:void(0);" class="btn-icon logo-hide-btn">
                                <i class="feather-x-circle"></i>
                                </a>
                             </div>
                               @endif
                            </div>
                         </div>

                         <div class="col-12">
                            <div class="doctor-submit text-end">
                               <button type="submit" class="btn btn-primary submit-form me-2">Submit</button>
                               <button type="button" class="btn btn-primary cancel-form">Cancel</button>
                            </div>
                         </div>
                      </div>
                   </form>
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
 <div id="delete_patient" class="modal fade delete-modal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
       <div class="modal-content">
          <div class="modal-body text-center">
             <img src="assets/img/sent.png" alt width="50" height="46">
             <h3>Are you sure want to delete this ?</h3>
             <div class="m-t-20"> <a href="#" class="btn btn-white" data-bs-dismiss="modal">Close</a>
                <button type="submit" class="btn btn-danger">Delete</button>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection
