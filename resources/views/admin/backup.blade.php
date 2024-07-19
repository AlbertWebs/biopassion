@extends('dashboard.master')
@section('content')
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <!--== BODY CONTNAINER ==-->
        <div class="container-fluid sb2">
            <div class="row">
                <!--== BODY INNER CONTAINER ==-->
                <div class="sb12"  style="padding:20px;">
                    <div class="sb2-2-2">
                        <ul>
                            <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                            </li>
                            <li class="active-bre"><a href="#">My Profile</a>
                            </li>
                            <li class="active-bre"><a href="#">My Preferece</a>
                            </li>
                            <li class="active-bre"><i class="fa fa-power-off" aria-hidden="true"></i><a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();"> &nbsp;Logout</a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            <li class="page-back"><a target="new" href="{{url('/')}}/"><i class="fa fa-globe" aria-hidden="true"></i> Main Website </a>
                            </li>
                        </ul>
                    </div>
                    <div class="sb12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box-inn-sp">
                                    <div class="inn-title">
                                        <h4>Hello, {{Auth::User()->name}},</h4>
                                        <p>Dear, {{Auth::User()->name}}, You are here because you subscribed to our Newsletters, Feel free to updates your subscription options here</p>
                                    </div>
                                    <div class="tab-inn">
                                        <form method="PUT" id="saveSettings" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <div class="row">
                                                <div class="input-field col s6">
                                                    <input autocomplete="off" type="url" name="website" value="" class="validate">
                                                    <label for="website">Website</label>
                                                </div>
                                                <div class="input-field col s6">
                                                    <input autocomplete="off" type="text" value="" name="title" class="validate">
                                                    <label>Sitename</label>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input autocomplete="off" type="text" value="" name="tagline"  class="validate">
                                                    <label>Tagline</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input autocomplete="off" id="phone" value="" type="text" name="mobile" class="validate">
                                                    <label for="phone">Mobile</label>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input autocomplete="off" value="" id="email" name="email" type="email"  class="validate">
                                                    <label for="email">Email</label>
                                                </div>
                                            </div>



                                            <div class="row">
                                                <div class="input-field col s6">
                                                    <input autocomplete="off" value="" id="email1" name="address" type="text" class="validate">
                                                    <label for="email1">Address</label>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="input-field col s6">
                                                    <input autocomplete="off" value="" id="email1" name="facebook" type="text" class="validate">
                                                    <label for="email1">Facebook</label>
                                                </div>
                                                <div class="input-field col s6">
                                                    <input autocomplete="off" value="" id="email1" name="instagram" type="text" class="validate">
                                                    <label for="email1">Instagram</label>
                                                </div>
                                                <div class="input-field col s6">
                                                    <input autocomplete="off" value="" id="email1" name="twitter" type="text" class="validate">
                                                    <label for="email1">Twitter</label>
                                                </div>
                                                <div class="input-field col s6">
                                                    <input autocomplete="off" value="" id="email1" name="linkedin" type="text" class="validate">
                                                    <label for="email1">Linkedin</label>
                                                </div>
                                            </div>




                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <textarea required id="article-ckeditor" name="ckeditor" class="materialilze-textarea" placeholder="content"></textarea>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="submit"  value="Save Changes" class="waves-effect waves-light btn-large">
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--== BODY INNER CONTAINER ==-->
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script>

            $("#saveSettings").on('submit',function(event)
                {
                    event.preventDefault(); // prevent form submit
                    swal({
                        title: "Are you sure you want to make this changes?",
                        text: "Once submited You cannot revert back to the previous state",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                        })
                        .then((willDelete) => {
                        if (willDelete) {
                            //do the ajax stuff.
                            $.ajax({
                                url: "{{url('/')}}/manager/dashboard/updateSiteSettingsAjax",
                                type: "PUT",
                                dataType: "html",
                                data: $(this).serialize(),
                                success: function ()
                                {
                                    swal("Done!","Your Changes Have Been Updated");
                                    setTimeout(function() {
                                        window.location.reload();
                                    }, 3000);
                                }
                            });
                            //

                        }
                    });
                });
        </script>

@endsection
