@extends('admin.master')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <center>
            @if(Session::has('message'))
                          <div class="alert alert-success">{{ Session::get('message') }}</div>
           @endif

           @if(Session::has('messageError'))
                          <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
           @endif
        </center>

       <div class="row">
          <div class="col-sm-12">
             <div class="card">
                <div class="card-body">
                @foreach ($Users as $user)
                   <form action="{{route('update-profile')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="row">
                         <div class="col-12">
                            <div class="form-heading">
                               <h4>Add Results for </h4>
                            </div>
                         </div>

                         <div class="col-12 col-md-6 col-xl-12">
                            <div class="input-block local-forms">
                               <label>Name <span class="login-danger">*</span></label>
                               <input name="name" class="form-control" type="text" value="{{$user->name}}">
                            </div>
                         </div>
                         <div class="col-12 col-md-6 col-xl-12">
                            <div class="input-block local-forms">
                               <label>Mobile <span class="login-danger">*</span></label>
                               <input name="phone" class="form-control" type="text" value="{{$user->mobile}}">
                            </div>
                         </div>
                         <div class="col-12 col-md-6 col-xl-12">
                            <div class="input-block local-forms">
                               <label>Email <span class="login-danger">*</span></label>
                               <input readonly name="email" class="form-control" type="email" value="{{$user->email}}">
                            </div>
                         </div>

                         <input type="hidden" name="user" value="{{$user->id}}">

                         <div class="col-12 col-sm-12">
                            <div class="input-block local-forms">
                               <label>Add Description <span class="login-danger">*</span></label>
                               <textarea name="content" class="form-control" rows="3" cols="30"></textarea>
                            </div>
                         </div>
                         <div class="col-12 col-md-6 col-xl-6">
                            <div class="input-block local-top-form">
                               <label class="local-top">Upload Results
                                    {{-- <span class="login-danger">*</span> --}}
                                </label>
                               <div class="settings-btn upload-files-avator">
                                  <input type="file" accept="file/*" name="image" id="file" onchange="if (!window.__cfRLUnblockHandlers) return false; loadFile(event)" class="hide-input" data-cf-modified-2f1a7cf053a48a9b67532101->
                                  <label for="file" class="upload">Choose File</label>
                               </div>

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
                @endforeach
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
