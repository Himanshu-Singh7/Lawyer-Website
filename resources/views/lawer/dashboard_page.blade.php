


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lawyer Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('lawer_dashboard/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('lawer_dashboard/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('lawer_dashboard/assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('lawer_dashboard/assets/images/favicon.png')}}" />
    <style>
    
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    /* Firefox */
    input[type=number] {
      -moz-appearance: textfield;
    }

    </style>
  </head>
  <body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="{{url('/dashboard_lawer')}}">Judge <span>A Law Firm</span></a>
        <a class="navbar-brand brand-logo-mini" href="{{url('/dashboard_lawer')}}">J <span>L F</span></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
        <!-- <div class="search-field d-none d-md-block">
          <form class="d-flex align-items-center h-100" action="#">
            <div class="input-group">
              <div class="input-group-prepend bg-transparent">
                <i class="input-group-text border-0 mdi mdi-magnify"></i>
              </div>
              <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
            </div>
          </form>
        </div> -->
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <div class="nav-profile-img">
                <img src='{{asset("public/lawer_register/$userdata->image")}}' alt="image">
                <span class="availability-status online"></span>              
              </div>
              <div class="nav-profile-text">
                <p class="mb-1 text-black">{{ Session::get('username') }}   </p>
              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="#" data-toggle='modal' data-target='#profile_image'>
                <i class="mdi mdi-face mr-2 text-info"></i> Profile Picture Change
              </a>
              <a class="dropdown-item" href="#" data-toggle='modal' data-target='#change_password'>
                <i class="mdi mdi-cached mr-2 text-success"></i>Change Password
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ url('/logout_link') }}">
                <i class="mdi mdi-logout mr-2 text-primary"></i> LogOut </a>
            </div>
          </li>
          <!-- <li class="nav-item d-none d-lg-block full-screen-link">
            <a class="nav-link">
              <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-email-outline"></i>
              <span class="count-symbol bg-warning"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <h6 class="p-3 mb-0">Messages</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="{{asset('lawer_dashboard/assets/images/faces/face4.jpg')}}" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                  <p class="text-gray mb-0"> 1 Minutes ago </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="{{asset('lawer_dashboard/assets/images/faces/face2.jpg')}}" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                  <p class="text-gray mb-0"> 15 Minutes ago </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="{{asset('lawer_dashboard/assets/images/faces/face3.jpg')}}" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                  <p class="text-gray mb-0"> 18 Minutes ago </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <h6 class="p-3 mb-0 text-center">4 new messages</h6>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell-outline"></i>
              <span class="count-symbol bg-danger"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <h6 class="p-3 mb-0">Notifications</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="mdi mdi-calendar"></i>
                  </div>
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                  <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="mdi mdi-settings"></i>
                  </div>
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                  <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="mdi mdi-link-variant"></i>
                  </div>
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                  <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <h6 class="p-3 mb-0 text-center">See all notifications</h6>
            </div>
          </li>
          <li class="nav-item nav-logout d-none d-lg-block">
            <a class="nav-link" href="#">
              <i class="mdi mdi-power"></i>
            </a>
          </li>
          <li class="nav-item nav-settings d-none d-lg-block">
            <a class="nav-link" href="#">
              <i class="mdi mdi-format-line-spacing"></i>
            </a>
          </li> -->
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">



    <!--discart appointment modal -->
      <!-- @foreach($appoint as $app)
        <div class="modal" id="ss{{$app->id}}">
          <div class="modal-dialog">
            <div class="modal-content">

              <div class="modal-header">
                <h4 class="modal-title">Modal Heading</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <div class="modal-body">
                {{$app->name}}
                {{$app->email}}
                {{$app->subject}}
                {{$app->message}}
                {{$app->appointment_date}}
                {{$app->appointment_date}}
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>

            </div>
          </div>
        </div>
      @endforeach -->
    <!--payment modal -->
    
    
    <!-- payment_amount_modal -->
      <div class="modal" id="payment_amount_modal">
        <div class="modal-dialog">
          <div class="modal-content">

            <div class="modal-header">
              <h4 class="modal-title">Modal Heading</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
              <form action="{{url('lawyer_payment_url')}}" method='post' >
                        @csrf()
                        <div class="row text-center appoint_div" >
                            <div class="col-md-5 mx-auto">
                              <h2>Appointment Date</h2>
                              <h4 id='appoint_date'>dfdf</h4>
                              <input name='appoint_id' type='hidden' value='' id='appoint_id' >
                            </div>
                            <div class="col-md-5 mx-auto">
                              <h2>Client Name</h2>
                              <h4 id='client_name' name='lawyer_ass'></h4>
                              <input name='client_name_input' type='hidden' value='' id='client_name_input' >
                            </div>
                            <div class="col-md-6 mx-auto">
                              <h2>Amount</h2>
                              <h4 id='amount' name='amount'></h4>
                              <input name='amount' placeholder='Enter Amount' style='background: #ff00000d;border: 2px solid #0000004a;' type='number' value='' class='form-control' id='amount_input' required title='Please fill the amount' >
                              <input name='payment_status'   type='hidden' value='1' class='form-control' id='amount_input' >

                            </div>
                            
                            <p class='text-center w-100 mt-4'>
                              <button type='submit' class='btn btn-success' >Payment</button></div>
                            </p>
                        </form>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
      </div>
    <!-- payment_amount_modal end -->


<!-- @foreach($appoint as $app) -->

  <!-- The Modal -->
    <div class="modal" id="payment_modal">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Modal Heading</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            {{$app->name}}
            {{$app->email}}
            {{$app->subject}}
            {{$app->message}}
            {{$app->appointment_date}}
            {{$app->appointment_date}}
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>
  <!-- end  -->
<!-- @endforeach -->

<!-- profile_image modal -->

  <div class="modal fade" id="profile_image">
    <div class="modal-dialog " >
      <div class="modal-content" >

        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body text-center ml-2">
          <form action="{{url('image_change')}}" method="post" enctype='multipart/form-data'>
          @csrf()
            <label for="">Profile Image</label>
            <input type="hidden" value='{{Session::get("lawyer_email")}}' name="lawyer_email" id="">
            <input type="hidden" value='{{Session::get("id")}}' name="lawyer_id" id="">
            <input type="file" name='image_change' class='form-control'>
            <input type="submit">
          </form>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>

<!-- profile_image modal end -->

<!-- change_password modal -->

  <div class="modal fade" id="change_password">
    <div class="modal-dialog " >
      <div class="modal-content" >

        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="close password_change_btn" data-dismiss="modal" >&times; </button>
        </div>

        <!-- Modal body -->
        <div class="modal-body text-center ml-2 old_password_body">
        <div class="password_error"></div>
            <label for="">Input Old Password</label>
            <input type="hidden" value='{{Session::get("lawyer_email")}}' id="lawyer_email" >
            <input type="hidden" value='{{Session::get("id")}}' id="lawyer_id">
            <input type="password" name='old_password' id='old_password' class='form-control'>
            <input type="submit" class='btn btn-info m-3' onclick='change_password()' >
        </div>
        <div class="modal-body text-center ml-2 new_password_body">
            <label for="">Set New Password</label>
            <div class="same_password_check"></div>
            <form action="{{url('password_change_url')}}" method="post">
            @csrf()
            <input type="hidden" name='email' value='{{Session::get("lawyer_email")}}'>
            <input type="hidden" name='id' value='{{Session::get("id")}}'>
            <label for="">New Password</label>
            <input type="password" name='new_password' id='new_password' class='form-control'>
            <label for="">Confirm Password</label>
            <input type="password" name='confirm_password' id='confirm_password' class='form-control'>
            <input type="submit" class='btn btn-info m-3' id='new_passsword_set'> 
            </form>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger password_change_btn" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>

<!-- change_password modal end -->


<!-- career modal -->

<div class="modal fade" id="career_details">
    <div class="modal-dialog " style='max-width:  1000px' >
      <div class="modal-content" >

        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body text-center ml-2" >
          <!-- <button id='career_add_btn' class='btn btn-gradient-success btn-fw '>If you want to add more!... Click here</button> -->
          <div class="row text-left mt-3 d-flex justify-content-center" id='career_detail_div'>

          @if(session()->has('nocareerdetials'))
          <div class="alert alert-danger text-dark">{{session()->get('nocareerdetials')}}</div>
          @else



            @foreach($career as $career_data)
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card" style='border:2px solid gray;margin:0px 20px 0px 0px;'>
                <div class="card-body">
                  <h4 class="card-title">Type Of Case</h4>
                  <div class="media">
                    <i class="mdi mdi-contact-mail icon-md text-info d-flex align-self-start mr-3"></i>
                    <div class="media-body " >
                      <p class="card-text">{{$career_data->lawer_type}}</p>
                    </div>
                  </div>
                </div>
                <hr style='width:80%;margin:auto' />
                <div class="card-body">
                  <h4 class="card-title">Case Name</h4>
                  <div class="media">
                    <i class="mdi mdi-contact-mail icon-md text-info d-flex align-self-start mr-3"></i>
                    <div class="media-body">
                      <p class="card-text">{{$career_data->case_name}}</p>
                    </div>
                  </div>
                </div>
                <hr style='width:80%;margin:auto' />
                <div class="card-body">
                  <h4 class="card-title">Court Name</h4>
                  <div class="media">
                    <i class="mdi mdi-contact-mail icon-md text-info d-flex align-self-start mr-3"></i>
                    <div class="media-body">
                      <p class="card-text">{{$career_data->court_name}}</p>
                    </div>
                  </div>
                </div>
                <hr style='width:80%;margin:auto' />
                <div class="card-body">
                  <h4 class="card-title">start and Ending Date</h4>
                  <div class="media">
                    <i class="mdi mdi-contact-mail icon-md text-info d-flex align-self-start mr-3"></i>
                    <div class="media-body">
                      <p class="card-text">{{$career_data->start_date}} {{$career_data->end_date}}</p>
                    </div>
                  </div>
                </div>
                <hr style='width:80%;margin:auto' />
                <div class="card-body">
                  <h4 class="card-title">Case Status</h4>
                  <div class="media">
                    <i class="mdi mdi-contact-mail icon-md text-info d-flex align-self-start mr-3"></i>
                    <div class="media-body">
                      <p class="card-text">{{$career_data->case_statuss}}</p>
                    </div>
                  </div>
                </div>
                <hr style='width:80%;margin:auto' />
                <div class="card-body">
                  <h4 class="card-title">Case Description</h4>
                  <div class="media">
                    <i class="mdi mdi-contact-mail icon-md text-info d-flex align-self-start mr-3"></i>
                    <div class="media-body">
                      <p class="card-text">{{$career_data->case_description}}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              @endforeach
            @endif
          </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>

<!-- career modal end -->

  
<!--add career modal  -->

  <div class="modal fade" id="career_add">
    <div class="modal-dialog" style='width 50% !important'>
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"> <span style='text-transform:capitalize'>  {{$userdata->first_name}}</span> here you can add new career achievements</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body text-center">
            <div class="card" id=''>
              <div class="card-body">
                <h4 class="card-title">Add New Career achievement</h4>
                <!-- <p class="card-description"> Basic form layout </p> -->
                <form class="forms-sample text-left" action="{{url('store')}}" method='post'>
                @csrf()
                  <div class="form-group">
                    <input type="hidden" class="form-control" value='{{$userdata->id}}' id="exampleInputUsername1" name='uid' placeholder="First Name" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputUsername1">Lawer type</label>
                    <select name="lawer_type" id="" class='form-control'>
                    @foreach($all as $a)
                      <option value="{{$a->law_type}}">{{$a->law_type}}</option>
                    @endforeach
                    </select>
                    <!-- <input type="text" class="form-control" id="exampleInputUsername1" name='first_name' placeholder="First Name" > -->
                  </div>
                  <div class="form-group">
                    <label for="exampleInputUsername1">Case name</label>
                    <input type="text" class="form-control" id="exampleInputUsername1" name='case_name' placeholder="Case Name" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Court name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name='court_name' placeholder="Court name" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Start date</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" name='start_date' placeholder="Start date" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">End date</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" name='end_date' placeholder="End date" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Case status</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name='case_statuss' placeholder="Case status" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Case description</label>
                    <textarea class="form-control" id="exampleInputPassword1" name='case_description'  ></textarea>
                  </div>
                  <button type="submit" class="btn btn-outline-dark btn-fw mr-2">Submit</button>
                  <input type="reset" class='btn btn-outline-secondary text-black btn-fw'>
                </form>
              </div>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>

<!--add career modal end -->

<!-- profile modal -->

  <div class="modal fade" id="profile_model">
    <div class="modal-dialog" style='width 50% !important'>
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="mx-auto ">These are the fields your can edit.</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body text-center">
          <button id='modal_open_btn' class='btn btn-gradient-success btn-fw '>Edit Profile</button>
          <div class="row text-left mt-3" id='profile_div'>

                <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                              <div class="card-body">
                                                <h4 class="card-title">First Name</h4>
                                                <div class="media">
                                                  <i class="mdi mdi-contact-mail icon-md text-info d-flex align-self-start mr-3"></i>
                                                  <div class="media-body">
                                                    <p class="card-text">{{$userdata->first_name}}</p>
                                                  </div>
                                                </div>
                                              </div>
                                              <hr style='width:80%;margin:auto' />
                                              <div class="card-body">
                                                <h4 class="card-title">Last name</h4>
                                                <div class="media">
                                                  <i class="mdi mdi-contact-mail icon-md text-info d-flex align-self-start mr-3"></i>
                                                  <div class="media-body">
                                                    <p class="card-text">{{$userdata->last_name}}</p>
                                                  </div>
                                                </div>
                                              </div>
                                              <hr style='width:80%;margin:auto' />
                                              <div class="card-body">
                                                <h4 class="card-title">Email</h4>
                                                <div class="media">
                                                  <i class="mdi mdi-contact-mail icon-md text-info d-flex align-self-start mr-3"></i>
                                                  <div class="media-body">
                                                    <p class="card-text">{{$userdata->email}}</p>
                                                  </div>
                                                </div>
                                              </div>
                                              <hr style='width:80%;margin:auto' />
                                              <div class="card-body">
                                                <h4 class="card-title">Contact</h4>
                                                <div class="media">
                                                  <i class="mdi mdi-contact-mail icon-md text-info d-flex align-self-start mr-3"></i>
                                                  <div class="media-body">
                                                    <p class="card-text">{{$userdata->contact}}</p>
                                                  </div>
                                                </div>
                                              </div>
                                              <hr style='width:80%;margin:auto' />
                                              <div class="card-body">
                                                <h4 class="card-title">Address</h4>
                                                <div class="media">
                                                  <i class="mdi mdi-contact-mail icon-md text-info d-flex align-self-start mr-3"></i>
                                                  <div class="media-body">
                                                    <p class="card-text">{{$userdata->address}}</p>
                                                  </div>
                                                </div>
                                              </div>
                            </div>
                </div>
          </div>
        <div class="card" id='card'>
                    <div class="card-body">
                      <h4 class="card-title">You can Edit Any of these fields</h4>
                      <!-- <p class="card-description"> Basic form layout </p> -->
                      <form class="forms-sample text-left" action="{{url('update',[$userdata->id])}}" method='post'>
                      @csrf()
                        <div class="form-group">
                          <label for="exampleInputUsername1">First Name</label>
                          <input type="text" class="form-control" id="exampleInputUsername1" name='first_name' placeholder="First Name" value='{{$userdata->first_name}}'>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputUsername1">Last Name</label>
                          <input type="text" class="form-control" id="exampleInputUsername1" name='last_name' placeholder="First Name" value='{{$userdata->last_name}}'>
                        </div>
                        <!-- <div class="form-group">
                          <label for="exampleInputEmail1">Email</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" name='email' placeholder="Email" value='{{$userdata->email}}'>
                        </div> -->
                        <div class="form-group">
                          <label for="exampleInputPassword1">Address</label>
                          <textarea class="form-control" id="exampleInputPassword1" name='address'>{{$userdata->address}}</textarea>
                        </div>
                        <!-- <div class="form-group">
                          <label for="exampleInputConfirmPassword1">Confirm Password</label>
                          <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
                        </div> -->
                        <!-- <div class="form-check form-check-flat form-check-primary">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input"> Remember me </label>
                        </div> -->
                        <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                      </form>
                    </div>
                  </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" id='profile_close_btn' data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>

<!-- end of profile modal -->

<!-- feedback modal -->
  <div class="modal fade" id="feedback_modal">
    <div class="modal-dialog" >
      <div class="modal-content" style='width:1000px !important;margin-left:-35%;'>

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="mx-auto ">These are the Feedback you got.</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body text-center">
          <!-- <button id='modal_open_btn' class='btn btn-gradient-success btn-fw '>Edit Profile</button> -->
          <table class="table table-bordered table-striped table-hover">
            <thead class="thead-dark">
              <tr>
                <th>S no</th>
                <th>Client Name</th>
                <th>Client Email</th>
                <th>Subject</th>
                <th>Message</th>
              </tr>
            </thead>
            <tbody>
            @foreach($feedback_data as $feed)
                      <tr>
                        <td>1</td>
                        <td>{{$feed->name}}</td>
                        <td>{{$feed->email}}</td>
                        <td>{{$feed->subject}}</td>
                        <td>{{$feed->message}}</td>
                      </tr>
                    @endforeach
            </tbody>
          </table>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" id='profile_close_btn' data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>
<!-- end of feedback modal -->

      <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="{{asset('lawer_dashboard/assets/images/faces/face1.jpg')}}" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2" style='text-transform:capitalize'>{{ Session::get('username') }}</span>
                  <span class="text-secondary text-small">{{$dd->law_type}}</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url ('dashboard_lawer')}}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Your Career Details</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" id='view_all' data-toggle="modal" data-target='#career_details' href="pages/ui-features/buttons.html">View All</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#" id='add_more_career'>Add</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"  data-toggle="modal" data-target='#profile_model'>
                <span class="menu-title">View Profile</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"  data-toggle="modal" data-target='#feedback_modal'>
                <span class="menu-title">View Feedback</span>
                <i class="mdi mdi-buffer menu-icon"></i>
              </a>
            </li>



            <li class="nav-item  ">
              <a class="nav-link" href="#ui-ba" data-toggle="collapse" aria-expanded="false" aria-controls="ui-ba" >
                <span class="menu-title">Discart Appointments <span class=' badge-primary badge-pill appoint_count' style='font-size:15px;font-weight:bold;padding:none !important' >  </span> </span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
              <div class="collapse" id="ui-ba">
                <ul class="nav flex-column sub-menu" id='discart_appoint' >
                <!-- <div class="alert alert-success">
                Discart
                </div> -->
                <!-- @foreach($appoint as $apr)

                @if($apr->status == 2)
                  <li class="nav-item"> <a class="nav-link" id='view_all' data-toggle="modal" data-target='#ss{{$app->id}}' href="pages/ui-features/buttons.html">{{$app->name}} {{$apr->status}}</a></li>
                  @endif
                @endforeach -->
                </ul>
              </div>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="pages/charts/chartjs.html">
                <span class="menu-title">Charts</span>
                <i class="mdi mdi-chart-bar menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/tables/basic-table.html">
                <span class="menu-title">Tables</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Sample Pages</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-medical-bag menu-icon"></i>
              </a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item sidebar-actions">
              <span class="nav-link">
                <div class="border-bottom">
                  <h6 class="font-weight-normal mb-3">Projects</h6>
                </div>
                <button class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add a project</button>
                <div class="mt-4">
                  <div class="border-bottom">
                    <p class="text-secondary">Categories</p>
                  </div>
                  <ul class="gradient-bullet-list mt-4">
                    <li>Free</li>
                    <li>Pro</li>
                  </ul>
                </div>
              </span>
            </li> -->
          </ul>
        </nav>
      <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
              <div class="col-12">
                <div class="alert" id='appoint_alert' >
                </div>
              @if(session()->has('Profile_image_changed'))
                <span class="d-flex justify-content-between  align-items-center purchase-popup">
                  <p>{{session()->get('Profile_image_changed')}}</p>
                  <i class="mdi mdi-close d-flex justify-content-end" id="bannerClose"></i>
                </span>
                @endif
              @if(session()->has('no_image'))
                <span class="d-flex justify-content-between  align-items-center purchase-popup">
                  <p>{{session()->get('no_image')}}</p>
                  <i class="mdi mdi-close d-flex justify-content-end" id="bannerClose"></i>
                </span>
                @endif
              @if(session()->has('career_add'))
                <span class="d-flex justify-content-between  align-items-center purchase-popup">
                  <p>{{session()->get('career_add')}}</p>
                  <i class="mdi mdi-close d-flex justify-content-end" id="bannerClose"></i>
                </span>
                @endif
              @if(session()->has('payment_amount_send'))
                <span class="d-flex justify-content-between bg-secondary text-white align-items-center purchase-popup">
                  <p>{{session()->get('payment_amount_send')}}</p>
                  <i class="mdi mdi-close d-flex justify-content-end" id="bannerClose"></i>
                </span>
                @endif
              @if(session()->has('update_success'))
                <span class="d-flex justify-content-between  align-items-center purchase-popup">
                  <p>{{session()->get('update_success')}}</p>
                  <!-- <p>Like what you see? Check out our premium version for more.</p> -->
                  <!-- <a href="https://github.com/BootstrapDash/PurpleAdmin-Free-Admin-Template" target="_blank" class="btn ml-auto download-button">Download Free Version</a> -->
                  <!-- <a href="https://www.bootstrapdash.com/product/purple-bootstrap-4-admin-template/" target="_blank" class="btn purchase-button">Upgrade To Pro</a> -->
                  <i class="mdi mdi-close d-flex justify-content-end" id="bannerClose"></i>
                </span>
                @endif
                @if($errors->any())
                <span class="d-flex justify-content-between  align-items-center purchase-popup">
                <ul class='list-group'>
                
                @foreach($errors->all() as $e)
                  <li class='list-group-item '> <span class='alert alert-danger text-dark '> {{$e}}</span></li>
                  @endforeach
                </ul>
                  <!-- <p>Like what you see? Check out our premium version for more.</p> -->
                  <!-- <a href="https://github.com/BootstrapDash/PurpleAdmin-Free-Admin-Template" target="_blank" class="btn ml-auto download-button">Download Free Version</a> -->
                  <!-- <a href="https://www.bootstrapdash.com/product/purple-bootstrap-4-admin-template/" target="_blank" class="btn purchase-button">Upgrade To Pro</a> -->
                  <i class="mdi mdi-close d-flex justify-content-end" id="bannerClose"></i>
                </span>
                 @endif
              </div>
            </div>
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard </h3>
              <!-- <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav> -->
            </div>
            <div class="row">
              <div class="col-md-4 mx-auto stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <img src="{{asset('lawer_dashboard/assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Your Appointment's <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5 appointment_count"></h2>
                    <!-- <h6 class="card-text">Increased by 60%</h6> -->
                  </div>
                </div>
              </div>
              <div class="col-md-4 mx-auto stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    <img src="{{asset('lawer_dashboard/assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Total Career Details <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">{{count($career)}}</h2>
                    <h6 class="card-text"></h6>
                  </div>
                </div>
              </div>
              <!-- <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <div class="card-body">
                    <img src="{{asset('lawer_dashboard/assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Visitors Online <i class="mdi mdi-diamond mdi-24px float-right"></i>
                    </h4>

                    <h2 class="mb-5">95,5741</h2>
                    <h6 class="card-text">Increased by 5%</h6>
                  </div>
                </div>
              </div> -->
            </div>
            <!-- <div class="row">
              <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="clearfix">
                      <h4 class="card-title float-left">Visit And Sales Statistics</h4></br>
                      <div id="visit-sale-chart-legend" class="rounded-legend legend-horizontal legend-top-right float-right"></div>
                    </div>
                    <canvas id="visit-sale-chart" class="mt-4"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Traffic Sources</h4>
                    <canvas id="traffic-chart"></canvas>
                    <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
                  </div>
                </div>
              </div>
            </div> -->
            <!-- <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"> Appointments</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> Client Name </th>
                            <th> Email </th>
                            <th> Subject </th>
                            <th> Message </th>
                            <th> Appointment ID </th>
                            <th> Created At </th>
                            <th> Status </th>
                            <th> Actions </th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($appoint as $apr)
                          <tr>
                          @if($apr->status !=2 )
                            <td>{{$apr->name}} </td>
                            <td>{{$apr->email}} </td>
                            <td> {{$apr->subject}} </td>
                            <td> {{$apr->message}} </td>
                            <td> {{$apr->appointment_id}} </td>
                            <td> {{$apr->created_at}} {{$apr->status}} </td>
                            
                            <td>
                            @if($apr->status == 1)
                             <button class='btn btn-success'>Approve</button>
                             <button>Edit</button>
                             @elseif($apr->status == 0)
                             <button  value='{{$apr->id}}' class='btn btn-success btn-sm approve '>Approve</button>
                             <button  value='{{$apr->id}}'  class='btn btn-warning btn-sm discart '>Discart</button>
                             <button>Edit</button>
                              </td>
                              @endif
                                
                            <td>
                            @if($apr->status == 1)
                              <label class="badge badge-gradient-success">Approved</label>
                              @elseif($apr->status == 0)
                              <label class="badge badge-gradient-warning">Pending</label>
                              @endif
                            </td>
                          </tr>
                          @endif
                          @endforeach
 
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
            <!-- appoint ajax_table -->
            <div class="row" id='ajax_appoint'>
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"> Appointments</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>S No.</th>
                            <th> Client Name </th>
                            <th> Email </th>
                            <th> Subject </th>
                            <th> Message </th>
                            <th> Appointment ID </th>
                            <th> Appointment date </th>
                            <th> Created At </th>
                            <th> Status </th>
                            <th> Actions </th>
                          </tr>
                        </thead>
                        <tbody id='appoint_table'>
                        
 
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end -->
            <!-- <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Recent Updates</h4>
                    <div class="d-flex">
                      <div class="d-flex align-items-center mr-4 text-muted font-weight-light">
                        <i class="mdi mdi-account-outline icon-sm mr-2"></i>
                        <span>jack Menqu</span>
                      </div>
                      <div class="d-flex align-items-center text-muted font-weight-light">
                        <i class="mdi mdi-clock icon-sm mr-2"></i>
                        <span>October 3rd, 2018</span>
                      </div>
                    </div>
                    <div class="row mt-3">
                      <div class="col-6 pr-1">
                        <img src="{{asset('lawer_dashboard/assets/images/dashboard/img_1.jpg')}}" class="mb-2 mw-100 w-100 rounded" alt="image">
                        <img src="{{asset('lawer_dashboard/assets/images/dashboard/img_4.jpg')}}" class="mw-100 w-100 rounded" alt="image">
                      </div>
                      <div class="col-6 pl-1">
                        <img src="{{asset('lawer_dashboard/assets/images/dashboard/img_2.jpg')}}" class="mb-2 mw-100 w-100 rounded" alt="image">
                        <img src="{{asset('lawer_dashboard/assets/images/dashboard/img_3.jpg')}}" class="mw-100 w-100 rounded" alt="image">
                      </div>
                    </div>
                    <div class="d-flex mt-5 align-items-top">
                      <img src="{{asset('lawer_dashboard/assets/images/faces/face3.jpg')}}" class="img-sm rounded-circle mr-3" alt="image">
                      <div class="mb-0 flex-grow">
                        <h5 class="mr-2 mb-2">School Website - Authentication Module.</h5>
                        <p class="mb-0 font-weight-light">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                      </div>
                      <div class="ml-auto">
                        <i class="mdi mdi-heart-outline text-muted"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Project Status</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> # </th>
                            <th> Name </th>
                            <th> Due Date </th>
                            <th> Progress </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td> 1 </td>
                            <td> Herman Beck </td>
                            <td> May 15, 2015 </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td> 2 </td>
                            <td> Messsy Adam </td>
                            <td> Jul 01, 2015 </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td> 3 </td>
                            <td> John Richards </td>
                            <td> Apr 12, 2015 </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td> 4 </td>
                            <td> Peter Meggik </td>
                            <td> May 15, 2015 </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-gradient-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td> 5 </td>
                            <td> Edward </td>
                            <td> May 03, 2015 </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td> 5 </td>
                            <td> Ronald </td>
                            <td> Jun 05, 2015 </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-gradient-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-white">Todo</h4>
                    <div class="add-items d-flex">
                      <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?">
                      <button class="add btn btn-gradient-primary font-weight-bold todo-list-add-btn" id="add-task">Add</button>
                    </div>
                    <div class="list-wrapper">
                      <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                        <li>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox"> Meeting with Alisa </label>
                          </div>
                          <i class="remove mdi mdi-close-circle-outline"></i>
                        </li>
                        <li class="completed">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox" checked> Call John </label>
                          </div>
                          <i class="remove mdi mdi-close-circle-outline"></i>
                        </li>
                        <li>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox"> Create invoice </label>
                          </div>
                          <i class="remove mdi mdi-close-circle-outline"></i>
                        </li>
                        <li>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox"> Print Statements </label>
                          </div>
                          <i class="remove mdi mdi-close-circle-outline"></i>
                        </li>
                        <li class="completed">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox" checked> Prepare for presentation </label>
                          </div>
                          <i class="remove mdi mdi-close-circle-outline"></i>
                        </li>
                        <li>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox"> Pick up kids from school </label>
                          </div>
                          <i class="remove mdi mdi-close-circle-outline"></i>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2017 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
      <!-- main-panel ends -->
    </div>
      <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('lawer_dashboard/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('lawer_dashboard/assets/vendors/chart.js/Chart.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('lawer_dashboard/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('lawer_dashboard/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('lawer_dashboard/assets/js/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('lawer_dashboard/assets/js/dashboard.js')}}"></script>
    <script src="{{asset('lawer_dashboard/assets/js/todolist.js')}}"></script>
<!-- End custom js for this page -->

  <!-- custom scripts -->

  <script>
    let global_data = [];
  $(function(){
    // $('#appoint_alert').hide();
    $('.new_password_body').hide();
  })

  </script>
<!--profile,show add career directoly,stop modal close outside div  -->
  <script>
    // profile modal 
    $(function(){
      $('#card').hide();
    });
    $('#modal_open_btn').click(function(){
      $('#card').show();
      $('#modal_open_btn').hide();

      $('#profile_div').hide();
      
    });
    // end

    // show add career directoly
    $(function(){
      $('#career_add').hide();
    });
    $('#add_more_career').click(function(){
      $('#career_add').modal('show');
    })
    $(function(){
      $('#profile_close_btn').click(function(){
        $('#profile_div').show();
        $('#modal_open_btn').show();
        $('#card').hide();
      })
    })
    // stop modal close outside div 
    $('#profile_model').modal({
        show: false,
        backdrop: 'static',
        keyboard: false
    })

  // stop modal close outside div end 
  </script>


<!-- appointment_action,ajax,payment -->
<script>
  // appoint-action script 
    $(document).on('click', '.discart', function() {
      // $('.discart').click(function(){
      // alert(a); 
      let a = $(this).val();
      $.ajax({
        url:"{{url('appoint_action')}}",
        type:'get',
        data:{appoint:'discart',id:a},
        success:function(data) {
          // alert(data);
          if(data == 'discart'){
            
            $('#appoint_alert').show();
            $('#appoint_alert').addClass('alert-danger');
            $('#appoint_alert').html('You have discart the  appointment.');
            return appoint_check();
        }        
        }
      })
    }); 

    $(document).on('click', '.approve', function() {
    // $('.approve').click(function(){
      let a = $(this).val();
      // alert(a); 
      $.ajax({
        url:"{{url('appoint_action')}}",
        type:'get',
        data:{appoint:'approve',id:a},
        success:function(data) {
          // alert(data);
        if(data == 'approved'){
          $('#appoint_alert').show();
          $('#appoint_alert').addClass('alert-success');
          $('#appoint_alert').html('You have accepted the  appointment.');
          return appoint_check();
        }      
        }
      })
    // });
    });
  // end
  
  // ajax
    $(function(){
      return appoint_check();
    })
    function appoint_check()
    {
      let table ='';
      let li ='';
      let count = 1;
      let appoint_count =0;

      $.ajax({
        url:"{{url('ajax_appoint')}}",
        type:'get',
        success:function(data)
        {
          global_data = data;


          for(i in data)
          {
            table +='<tr>';
              if(data[i].status !=2){
                table += '<td>'+count+'</td>';
                table += '<td>'+data[i].name+'</td>';
                table += '<td>'+data[i].email+'</td>';
                table += '<td>'+data[i].subject+'</td>';
                table += '<td>'+data[i].message+'</td>';
                table += '<td>'+data[i].appointment_id+'</td>';
                table += '<td>'+data[i].appointment_date+'</td>';
                table += '<td>'+data[i].created_at+'</td>';
                table += '<td>';
                  if(data[i].status == 1){
                    table+='<button class="btn btn-success">Approve</button>'}
                  else if(data[i].status == 0){
                    table+=' <button  value='+data[i].id+' class="btn btn-success btn-sm approve">Approve</button><button value='+data[i].id+'  class="btn btn-warning btn-sm discart">Discart</button>'
                  }
                table+='</td>';
                table += '<td>';
                  if(data[i].status == 1)
                  {
                    if(data[i].payment_status == 0)
                    {
                    table+='<label class="badge badge-gradient-success payment_modal_btn" onclick="payment_modal('+data[i].id+')"><a  class=""  >Payment</label>'
                    }else if(data[i].payment_status == 1)
                    {
                    table+='<label class="badge btn-gradient-light payment_modal_btn" " style="border-color: #3e4b5b; !important"><a  class=""  >Waiting for Payment</label>'
                    }else
                    {
                    table+='<label class="badge btn-gradient-primary payment_modal_btn"  ><a  class=""  >Payment Done</label>'
                    }
                  }
                  else if(data[i].status == 0)
                  {
                    table+='<label class="badge badge-gradient-warning">Pending</label>'
                  }
                table+='</td>';
              }
            table +='</tr>';
            count++;
          }
            $('#appoint_table').html(table);
            $('.appointment_count').html(data.length)

          for(i in data)
          {
            if(data[i].status == 2){
              appoint_count++;
              console.log(appoint_count)
              
              li += "<li class='nav-item' value="+data[i].id+"><a class='nav-link'>"+data[i].name+"</a></li>";
              // li += "<li>"+data[i].email+"</li>";
            }
            $('#discart_appoint').html(li);
            $('.appoint_count').html(appoint_count);
           

          }
            $('.payment_modal_btn').click(function(){
              let d =   document.getElementsByClassName('payment_modal_btn').innerTEXT;
              console.log(d);
            })
        }
      })
    }
  // end
  
  setInterval(appoint_check,1000);
  
  // payment_modal
  function payment_modal(dd){
    // alert(JSON.stringify(global_data))
    for(global in global_data){
      if(global_data[global].id == dd){
      $('#appoint_date').html(global_data[global].appointment_date)
      // $('#appoint_date_input').html()
      document.getElementById('appoint_id').value = global_data[global].id
      $('#payment_amount_modal').modal('show');
      $('#client_name').html(global_data[global].name)
        document.getElementById('client_name_input').value = global_data[global].email
      // let amount = global_data[i].payment_amount;
      //   $('#amount').html(amount)
      //   document.getElementById('amount_input').value = amount
      }  
    }
    
  }



// password scrpit
  function change_password()
  {
    let email_id = $('#lawyer_email').val();
    let id = $('#lawyer_id').val();
    let old_password = $('#old_password').val();
    $.ajax({
      url:"{{url('change_password')}}",
      type:'get',
      data:{email_id:email_id,id:id,old_password:old_password},
      success:function(data)
      {
        if(data == 'same')
        {
          $('.old_password_body').slideUp('1000');
          $('.new_password_body').slideDown('1000');
        }
        else
        {
          $('.password_error').addClass('alert').addClass('alert-danger');
          $('.password_error').html('Password not match');
        }
      }
    })
  }
  $('.password_change_btn').click(function(){
    $('.new_password_body').slideUp();
    $('.old_password_body').slideDown();
    $('#old_password').val('');
    $('#new_password').val('');
    $('#confirm_password').val('');
    $('.password_error').html('');
    $('.same_password_check').html('');
    $('.password_error').removeClass('alert').removeClass('alert-danger');
    $('.same_password_check').removeClass('alert').removeClass('alert-danger');
  });

  $('#change_password').modal({
        show: false,
        backdrop: 'static',
        keyboard: false
    })


    $('#confirm_password').keyup(function(){
      let new_password = $("#new_password").val();
      let confirm_password = $('#confirm_password').val();
      if(new_password == confirm_password)
      {
        $('.same_password_check').addClass('alert').addClass('alert-success').removeClass('alert-danger');
        $('.same_password_check').html('Password same');
        $('#new_passsword_set').attr('disabled',false);
      }
      else
      {
        $('.same_password_check').addClass('alert').addClass('alert-danger').removeClass('alert-success');
        $('.same_password_check').html('Password not same');
        $('#new_passsword_set').attr('disabled',true);

      }
    })
// end

</script>


<!-- scripts end -->

  </body>
</html>