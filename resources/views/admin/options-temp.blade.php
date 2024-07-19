@extends('user.master')

@section('content')
<div class="page-wrapper">
    <div class="content">


       <div class="row">
          <div class="col-sm-12">
             <div class="card">
                <div class="card-body">
                   <form action="{{route('update-options')}}" method="POST">
                      @csrf
                      <div class="row">
                         <div class="col-12">
                            <div class="form-heading">
                               <h4>{{$User->fname}}'s Areas of Interest id:{{$User->id}}</h4>
                            </div>
                         </div>

                         <input type="hidden" name="user_id" value="{{$User->id}}">
                         {{--  --}}
                         <div class="col-12 col-md-6 col-xl-3">
                            <div class="input-block mb-0">
                                <label class="custom_check w-100">
                                <input type="checkbox" id="enableTax" value="Microbiology" name="Microbiology" @if($User->Microbiology == "Yes") checked @endif>
                                <span class="checkmark"></span> Microbiology
                                </label>
                            </div>
                         </div>
                         <div class="col-12 col-md-6 col-xl-3">
                            <div class="input-block mb-0">
                                <label class="custom_check w-100">
                                <input type="checkbox" id="enableTax" value="Drug Delivery" name="Drug Delivery" @if($User->Drug_Delivery == "Yes") checked @endif>
                                <span class="checkmark"></span> Drug Delivery
                                </label>
                            </div>
                         </div>
                         <div class="col-12 col-md-6 col-xl-3">
                            <div class="input-block mb-0">
                                <label class="custom_check w-100">
                                <input type="checkbox" id="enableTax" name="Formulation Development" value="Formulation Development" @if($User->Formulation_Development == "Yes") checked @endif>
                                <span class="checkmark"></span> Formulation Development
                                </label>
                            </div>
                         </div>
                         <div class="col-12 col-md-6 col-xl-3">
                            <div class="input-block mb-0">
                                <label class="custom_check w-100">
                                <input type="checkbox" id="enableTax" name="Bioprocessing" value="Bioprocessing" @if($User->Drug_Delivery == "Yes") checked @endif>
                                <span class="checkmark"></span> Bioprocessing
                                </label>
                            </div>
                         </div>

                         <div class="col-12 col-md-6 col-xl-3">
                            <div class="input-block mb-0">
                                <label class="custom_check w-100">
                                <input type="checkbox" id="enableTax" name="Analytical_Techniques" value="Analytical_Techniques" @if($User->Analytical_Techniques == "Yes") checked @endif>
                                <span class="checkmark"></span> Bioprocessing
                                </label>
                            </div>
                         </div>



                         <div class="col-12 col-md-6 col-xl-3">
                            <div class="input-block mb-0">
                                <label class="custom_check w-100">
                                <input type="checkbox" id="enableTax" name="Manufacturing" value="Manufacturing" @if($User->Manufacturing == "Yes") checked @endif>
                                <span class="checkmark"></span> Manufacturing
                                </label>
                            </div>
                         </div>

                         <div class="col-12 col-md-6 col-xl-3">
                            <div class="input-block mb-0">
                                <label class="custom_check w-100">
                                <input type="checkbox" id="enableTax" name="QA/QC" value="QA/QC" @if($User->QA_QC == "Yes") checked @endif>
                                <span class="checkmark"></span> Quality Assurance /Quality Control
                                </label>
                            </div>
                         </div>

                         <div class="col-12 col-md-6 col-xl-3">
                            <div class="input-block mb-0">
                                <label class="custom_check w-100">
                                <input type="checkbox" id="enableTax" name="Biopharma" value="Biopharma" @if($User->Biopharma == "Yes") checked @endif>
                                <span class="checkmark"></span> Biopharma
                                </label>
                            </div>
                         </div>

                         <div class="col-12 col-md-6 col-xl-3">
                            <div class="input-block mb-0">
                                <label class="custom_check w-100">
                                <input type="checkbox" id="enableTax" name="Packaging and Labelling" value="Packaging and Labelling" @if($User->Packaging_and_Labelling == "Yes") checked @endif>
                                <span class="checkmark"></span> Packaging and Labelling
                                </label>
                            </div>
                         </div>

                         <div class="col-12 col-md-6 col-xl-3">
                            <div class="input-block mb-0">
                                <label class="custom_check w-100">
                                <input type="checkbox" id="enableTax" name="Regulatory Affairs" value="Regulatory Affairs" @if($User->Regulatory_Affairs == "Yes") checked @endif>
                                <span class="checkmark"></span> Regulatory Affairs
                                </label>
                            </div>
                         </div>

                         <div class="col-12 col-md-6 col-xl-3">
                            <div class="input-block mb-0">
                                <label class="custom_check w-100">
                                <input type="checkbox" id="enableTax" name="Health Supply Chain Management" value="Health Supply Chain Management" @if($User->Health_Supply_Chain_Management == "Yes") checked @endif>
                                <span class="checkmark"></span> Health Supply Chain Management
                                </label>
                            </div>
                         </div>

                         <div class="col-12 col-md-6 col-xl-3">
                            <div class="input-block mb-0">
                                <label class="custom_check w-100">
                                <input type="checkbox" id="enableTax" name="Artificial Intelligence" value="Artificial Intelligence" @if($User->Artificial_Intelligence == "Yes") checked @endif>
                                <span class="checkmark"></span> Artificial Intelligence
                                </label>
                            </div>
                         </div>
                         <br><br><br>
                         <div class="col-12">
                            <div class="form-heading">
                               <h4>Subscription Options</h4>
                            </div>
                         </div>
                         <div class="col-12 col-md-6 col-xl-6">
                            <div class="input-block mb-0">
                                <label class="custom_check w-100">
                                <input type="checkbox" id="enableTax" name="Digital version" value="Digital version" @if($User->Digital_version == "Yes") checked @endif>
                                <span class="checkmark"></span> Digital version of the African Pharmaceutical Review (published quarterly)
                                </label>
                            </div>
                         </div>

                         <div class="col-12 col-md-6 col-xl-6">
                            <div class="input-block mb-0">
                                <label class="custom_check w-100">
                                <input type="checkbox" id="enableTax" name="Newsletter" value="Newsletter" @if($User->Newsletter == "Yes") checked @endif>
                                <span class="checkmark"></span> Newsletter
                                </label>
                            </div>
                         </div>

                         <div class="col-12 col-md-6 col-xl-6">
                            <div class="input-block mb-0">
                                <label class="custom_check w-100">
                                <input type="checkbox" id="enableTax" name="Third party" value="Third party" @if($User->Third_party == "Yes") checked @endif>
                                <span class="checkmark"></span> Third party (application notes, product development and updates from partners)
                                </label>
                            </div>
                         </div>

                         <div class="col-12 col-md-6 col-xl-6">
                            <div class="input-block mb-0">
                                <label class="custom_check w-100">
                                <input type="checkbox" id="enableTax" name="Webinar notifications" value="Webinar notifications" @if($User->Webinar_notifications == "Yes") checked @endif>
                                <span class="checkmark"></span> Webinar notifications
                                </label>
                            </div>
                         </div>

                         <div class="col-12 col-md-6 col-xl-6">
                            <div class="input-block mb-0">
                                <label class="custom_check w-100">
                                <input type="checkbox" id="enableTax" name="Printed Version of Magazine" value="Printed Version of Magazine" @if($User->Printed_Version_of_Magazine == "Yes") checked @endif>
                                <span class="checkmark"></span> Printed Version of Magazine
                                </label>
                            </div>
                         </div>


                         <div class="col-12 col-md-6 col-xl-6">
                            <div class="input-block mb-0">
                                <label class="custom_check w-100">
                                <input type="checkbox" id="enableTax" name="Event notifications" value="Event notifications" @if($User->Event_notifications == "Yes") checked @endif>
                                <span class="checkmark"></span> Event notifications
                                </label>
                            </div>
                         </div>
                         {{--  --}}

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
