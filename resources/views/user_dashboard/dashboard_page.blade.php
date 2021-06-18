
    
<!-- <div style=" background-image: url('{{asset('images/practice-1.jpg')}}'); background-repeat:no-repeat ; background-size:cover; opacity:0.55;height:105px;font-weight:bold; " > -->
<!-- <div style="background:linear-gradient(90deg,#0F2027,#203A43,#2C5364);height:114px;" > -->
<!-- </div> -->

@foreach($userdata as $uu)

@endforeach






<!-- theme user dashboard -->

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @if(session()->has('id') && session()->has('username') )
    <title>Welcome {{session()->get('username')}}</title>
    
    @endif
  <!-- FAVICON -->
  <link href="img/favicon.png" rel="shortcut icon">
  <!-- PLUGINS CSS STYLE -->
  <!-- <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"> -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="user_dashboard/plugins/bootstrap/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <link rel="stylesheet" href="user_dashboard/plugins/bootstrap/css/bootstrap-slider.css">
  <!-- Font Awesome -->
  <link href="user_dashboard/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Owl Carousel -->
  <link href="user_dashboard/plugins/slick-carousel/slick/slick.css" rel="stylesheet">
  <link href="user_dashboard/plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
  <!-- Fancy Box -->
  <link href="user_dashboard/plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
  <link href="user_dashboard/plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
  <!-- CUSTOM CSS -->
  
  <link href="user_dashboard/css/style.css" rel="stylesheet">

    <style>

        .sidebar{
            width: 80%;
            margin: auto;
        }
        @media (min-width: 1200px){
            .container {
                max-width: 1500px;
            }
        }
        
        .edit_div .txt{
            border-bottom:1px solid rgba(51, 56, 64,0.5);
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            padding:10px;
        } 
        #appoint_table tr .view ,#appoint_table tr .delete {
            background:#f7f7f7 !important;
            border-radius:50% !important;
            padding:10px !important;
        }
        #appoint_table tr:hover .view{
            border-radius:50% !important;
            background:#1973d4 !important;
            color:white !important;
            transition:all 1s;
        }
        #appoint_table tr:hover .delete{
            border-radius:50% !important;
            background:#d11729 !important;
            color:white !important;
            transition:all 1s;
        }
        .appoint_div div{
            margin:5px;
            margin-top:20px;
            box-shadow: 0px 0px 5px grey;
        }
        .image_overflow{
          position:absolute;
          width:100%;
          height:100%;
          opacity:0;
          border-radius:50%;
          display:flex;
          align-items:center;
          justify-content:center;
          background:#a98c8cba;
          }
          .image_overflow a{
            color: black;
    background: white;
    padding: 10px;
    border-radius: 100px;
    font-weight:bold;
          }
        .profile-thumb:hover .image_overflow{
          opacity:0.7;
        }

    </style>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body class="body-wrapper">
<!-- navbar  -->
 <section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg navbar-light navigation">
					<a class="navbar-brand" href="index.html">
						<img src="" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto main-nav ">
							
						
						</ul>
						<ul class="navbar-nav ml-auto mt-10">
            <li class="nav-item active border border-dark mr-4">
								<a class="nav-link" href="{{url('/')}}">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link login-button" href="{{url('logout_link')}}">Logout</a>
							</li>
							<!-- <li class="nav-item">
								<a class="nav-link text-white add-button" href="ad-listing.html"><i class="fa fa-plus-circle"></i> Add Listing</a>
							</li> -->
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</section>
<!--==================================
=            User Profile            =
===================================-->
<section class="dashboard section">
  <!-- Container Start -->
  <div class="container">
    <!-- Row Start -->
    <div class="row">
      <div class="col-md-10  offset-md-1 col-lg-4 offset-lg-0">
        <div class="sidebar">
          <!-- User Widget -->
          <div class="widget user-dashboard-profile">
            <!-- User Image -->
            <div class="profile-thumb position-relative overflow-hidden">
            <div class="image_overflow">
              <a href="" data-toggle='modal' data-target='#profile_image'>Change Image</a>
            </div>
              <img src='{{asset("public/lawer_register/$uu->image")}}' style='width:100%;height:100%' alt="sdsds" class="rounded-circle">
            </div>
            <!-- User Name -->
            <h5 class="text-center" style='text-transform:capitalize'>{{$uu->username}}</h5>
            <!-- <p>Joined February 06, 2017</p> -->
            <a href="#" class="btn btn-main-sm" data-toggle="modal" data-target="#editprofile">Edit Profile</a>
          </div>
          <!-- Dashboard Links -->
          <div class="widget user-dashboard-menu">
            <ul>
              <!-- <li class="active"><a href="dashboard-my-ads.html"><i class="fa fa-user"></i> My Ads</a></li> -->
              <li><a href="#"><i class="fa fa-bookmark-o"></i> Appointment  <span>{{$appoint_count}}</span></a></li>
              <li><a href="#" data-toggle='modal' data-target='#feedback_modal'><i class="fa fa-file-archive-o"  ></i>Your Feedback<span>{{count($feedback_data)}}</span></a></li>
              <li><a href="dashboard-pending-ads.html" data-toggle='modal' data-target='#change_password'><i class="fa fa-bolt"></i> Change Password<span></span></a></li>
              <li><a href="{{url('logout_link')}}"><i class="fa fa-cog"></i> Logout</a></li>
              <!-- <li><a href="#" data-toggle="modal" data-target="#deleteaccount"><i class="fa fa-power-off"></i>Delete
                  Account</a></li> -->
            </ul>
          </div>
  <!-- edit-profile modal -->
                <!-- edit-profile popup modal start-->
        <!-- Modal -->
        <div class="modal fade" id="editprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header border-bottom-0 ">
                  <h2 class='w-100 text-center'>Edit Your Profile</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <hr style='border: 1px solid gray;width: 90%;box-sizing: border-box;'>
              <div class="modal-body ">
                  <div class='text-center'>
                      <h6 class="py-2">Your Profile Details</h6>
                      <p>You can Edit them by double clicking on a input </p>
                    </div>
                <div class="row edit_div">
                    <div class="col-md-4 p-4 ml-1" style="border:1px solid gray;border-radius:50%;"  >
                        <img src='{{asset("public/lawer_register/$uu->image")}}' style="width:100%;height:100%" id='user_img' class="mb-2" alt="sds">
                        <hr style='border: 1px solid gray;width: 113%;box-sizing: border-box;'>
                    </div>
                    <div class="col-md-7">
                        <label for="" class='label_click w-100'>Email
                        <h4 class='txt' id='email_txt'>{{$uu->email}}</h4>
                        <input name="email" id="email" value="{{$uu->email}}"  class=" rounded form-control edit_input">
                        </label>
                        <label for="" class='label_click w-100'>Username
                            <h4 class='txt' id='user_txt'>{{$uu->username}}</h4>
                            <input name="username" id="username" value="{{$uu->username}}"  class=" rounded form-control edit_input">
                        </label>
                    </div>
                    <div class="col-md-6">
                        <label for="" class='label_click w-100'>First Name
                            <h4 class='txt' id='f_n_txt'>{{$uu->first_name}}</h4>
                            <input name="f_name" id="first_name" value="{{$uu->first_name}}"  class=" rounded form-control edit_input">
                        </label>
                    </div>
                    <div class="col-md-6">
                        <label for="" class='label_click w-100'>Last Name
                            <h4 class='txt' id='l_n_txt'>{{$uu->last_name}}</h4>
                            <input name="l_name" id="last_name" value="{{$uu->last_name}}"  class=" rounded form-control edit_input">
                        </label>
                    </div>
                </div>
              </div>
              <div class="modal-footer border-top-0 mb-3 mx-5  justify-content-center">
                <button type="button" class="btn btn-primary" data-dismiss="modal" id='close_edit_modal'>Cancel</button>
                <!-- <button type="button" class="btn btn-danger" id='edit_data'>Edit</button> -->
              </div>
            </div>
          </div>
        </div>
        <!-- edit-profile popup modal end-->
  <!-- edit-profile modal -->

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
            <input type="hidden" value='{{Session::get("email")}}' name="lawyer_email" id="">
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

  <div class="modal fade" id="change_password" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog " >
      <div class="modal-content" >

        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="close password_model_close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body text-center ml-2 old_password_body">
        <div class="password_error"></div>
            <label for="">Inout Old Password</label>
            <input type="hidden" value='{{Session::get("email")}}' id="lawyer_email">
            <input type="hidden" value='{{Session::get("id")}}' id="lawyer_id">
            <input type="password" name='old_password' id='old_password' class='form-control'>
            <input type="submit" class='btn btn-info m-3' onclick='change_password()' >
        </div>
        <div class="modal-body text-center ml-2 new_password_body">
            <label for="">Set New Password</label>
            <div class="same_password_check"></div>
            <form action="{{url('password_change_url')}}" method="post">
            @csrf()
            <input type="hidden" name='email' value='{{Session::get("email")}}'>
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
          <button type="button" class="btn btn-danger password_model_close" data-dismiss="modal" >Close</button>
        </div>

      </div>
    </div>
  </div>

<!-- change_password modal end -->
          
          
          
  <!-- payment_appointment-modal -->
        <!-- Modal -->
        <div class="modal fade" id="single_appoint_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header border-bottom-0 ">
                  <h2 class='w-100 text-center'>Payment Details</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <hr style='border: 1px solid gray;width: 90%;box-sizing: border-box;'>
              <div class="modal-body">
                <form action="{{url('payment_url')}}" method='post' >
                @csrf()
                <div class="row text-center appoint_div" >
                    <div class="col-md-5 mx-auto">
                      <h2>Appointment Date</h2>
                      <h4 id='appoint_data'>dfdf</h4>
                      <input name='appoint_date' type='hidden' value='' id='appoint_data_input' >
                      <input name='appoint_id' type='hidden' value='' id='appoint_id' >
                    </div>
                    <div class="col-md-5 mx-auto">
                      <h2>Lawyer Assigned</h2>
                      <h4 id='lawer_assigned_name' name='lawyer_ass'></h4>
                      <input name='lawyer_name' type='hidden' value='' id='lawer_assigned_input' >
                    </div>
                    <div class="col-md-6 mx-auto">
                      <h2>Amount</h2>
                      <h4 id='amount' name='amount'></h4>
                      <input name='amount' type='hidden' value='' id='amount_input' >
                      <input name='payment_status' type='hidden' value='2'  >
                    </div>
                    <p class='text-center w-100 mt-4'>
                      <button type='submit' class='btn btn-success' >Payment</button></div>
                    </p>
                </form>
              </div>
              <div class="modal-footer border-top-0 mb-3 mx-5  justify-content-center">
                <button type="button" class="btn btn-primary" data-dismiss="modal" id='close_edit_modal'>Cancel</button>
              </div>
            </div>
          </div>
        </div>
        <!-- single_appointment-modal end-->
  <!-- single_appointment-modal -->
  
  
  <!-- feedback-modal -->
        <!-- Modal -->
        <div class="modal fade" id="feedback_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header border-bottom-0 ">
                  <h2 class='w-100 text-center'>Payment Details</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <hr style='border: 1px solid gray;width: 90%;box-sizing: border-box;'>
              <div class="modal-body">
                  <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                      <tr class='text-uppercase'>
                        <th>Sno </th>
                        <th>Lawyer name</th>
                        <th>Lawyer type</th>
                        <th>subject</th>
                        <th>message</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($feedback_data as $feed)
                      <tr>
                        <td>1</td>
                        <td>{{$feed->lawer_assigned_name}}</td>
                        <td>{{$feed->law_type_name}}</td>
                        <td>{{$feed->subject}}</td>
                        <td>{{$feed->message}}</td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
              </div>
              <div class="modal-footer border-top-0 mb-3 mx-5  justify-content-center">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <!-- single_appointment-modal end-->
  
  
  
  <!-- feedback-modal_end -->

        </div>
      </div>
      <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
      @if(session()->has('payment-fail'))
        <h4 class='alert alert-danger'>{{session()->get('payment-fail')}}</h4>
      @endif
      @if(session()->has('Payment_Done'))
        <h4 class='alert alert-success'>{{session()->get('Payment_Done')}}</h4>
      @endif
    <!-- Appointment Data -->


        <div class="widget dashboard-container my-adslist">
        
          <h3 class="widget-header">Appointment</h3>
          <table class="table table-responsive product-dashboard-table">
            <thead>
              <tr>
                <th>Subject</th>
                <th>Message</th>
                <th class="text-center">Appointment Date </th>
                <th class="text-center">Appointment Id</th>
                <th class="text-center">Lawyer Assigned</th>
                <th class="text-center">Status</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
        <!--  -->
            <tbody id='appoint_table' class='text-center'> 
              
            </tbody>
          </table>

        </div>

        <!-- pagination -->
        <!-- <div class="pagination justify-content-center">
					<nav aria-label="Page navigation example">
						<ul class="pagination">
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
									<span class="sr-only">Previous</span>
								</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item active"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
									<span class="sr-only">Next</span>
								</a>
							</li>
						</ul>
					</nav>
				</div> -->
        <!-- pagination -->

      </div>
    </div>
    <!-- Row End -->
  </div>
  <!-- Container End -->
</section>
<!--============================
=            Footer            =
=============================-->

<footer class="footer section section-sm ">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0">
        <!-- About -->
        <div class="block about">
          <!-- footer logo -->
          <img src="" alt="">
          <!-- description -->
          <p class="alt-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 offset-lg-1 col-md-3">
        <div class="block">
          <h4>Site Pages</h4>
          <ul>
            <li><a href="#">Boston</a></li>
            <li><a href="#">How It works</a></li>
            <li><a href="#">Deals & Coupons</a></li>
            <li><a href="#">Articls & Tips</a></li>
            <li><a href="terms-condition.html">Terms & Conditions</a></li>
          </ul>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0">
        <div class="block">
          <h4>Admin Pages</h4>
          <ul>
            <li><a href="category.html">Category</a></li>
            <li><a href="single.html">Single Page</a></li>
            <li><a href="store.html">Store Single</a></li>
            <li><a href="single-blog.html">Single Post</a>
            </li>
            <li><a href="blog.html">Blog</a></li>



          </ul>
        </div>
      </div>
      <!-- Promotion -->
      <div class="col-lg-4 col-md-7">
        <!-- App promotion -->
        <div class="block-2 app-promotion">
          <div class="mobile d-flex">
            <a href="">
              <!-- Icon -->
              <img src="" alt="mobile-icon">
            </a>
            <p>Get the Dealsy Mobile App and Save more</p>
          </div>
          <div class="download-btn d-flex my-3">
            <a href="#"><img src="" class="img-fluid" alt=""></a>
            <a href="#" class=" ml-3"><img src="" class="img-fluid" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Container End -->
</footer>
<!-- Footer Bottom -->
<footer class="footer-bottom">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-12">
        
      <div class="col-sm-6 col-12">
        <!-- Social Icons -->
        <ul class="social-media-icons text-right">
          <li><a class="fa fa-facebook" href="https://www.facebook.com/themefisher" target="_blank"></a></li>
          <li><a class="fa fa-twitter" href="https://www.twitter.com/themefisher" target="_blank"></a></li>
          <li><a class="fa fa-pinterest-p" href="https://www.pinterest.com/themefisher" target="_blank"></a></li>
          <li><a class="fa fa-vimeo" href=""></a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Container End -->
  <!-- To Top -->
  <div class="top-to">
    <a id="top" class="" href="#"><i class="fa fa-angle-up"></i></a>
  </div>
</footer>

<!-- custom script -->



<script>
$(function(){
  return appoint_check();
})
$(function(){
  $('.new_password_body').hide();
})
  // single_appointment_data
  
  let global_data = [];
  function appoint_check(){
  let table ='';
  let li ='';
  let appoint_count =0;

    $.ajax({
            url:"{{url('ajax_appoint_user')}}",
            type:'get',
            success:function(data)
            {
              global_data = data;
              for(i in data)
              {
                table +='<tr>';
                if(data[i].status !=2)
                {
                  table += '<td>'+data[i].subject+'</td>';
                  table += '<td>'+data[i].message+'</td>';
                  table += '<td>'+data[i].appointment_date+'</td>';
                  table += '<td>'+data[i].appointment_id+'</td>';
                  table += '<td>'+data[i].lawer_assigned_name+'</td>';
                  // table += '<td>'+data[i].subject+'</td>';
                  // table += '<td>'+data[i].created_at+'</td>';
                  table += '<td class="list-inline-item text-center">';
                    if(data[i].status == 1)
                      {
                        if(data[i].payment_status == 1)
                        {
                          table+='<button class="btn btn-info" >Approve</button>'
                        }else if(data[i].payment_status == 2)
                        {
                          table+='<button class="btn btn-dark border" >Appointment set</button>'
                        }else{
                          table+='<button class="btn btn-warning btn-sm" >Waiting for amount Response</button>'
                        }
                      }
                    else if(data[i].status == 0)
                      {
                      // table+=' <a  value='+data[i].id+' class="view mx-auto mt-2 mb-2"  style="margin-right:20px !important"><i class="fa fa-eye"></i></a><a value='+data[i].id+' onclick="action_btn('+data[i].id+')"  class="delete mx-auto mt-2  mb-2 "><i class="fa fa-trash" ></i></a>'
                      
                      table+='<label class="badge badge-gradient-warning">Pending</label>'
                      }
                  table+='</td>';
                  table += '<td>';
                    if(data[i].status == 1)
                      {
                        if(data[i].payment_status == 1)
                        {
                          table+='<label class="badge badge-gradient-success payment_modal_btn" value="fff"><a class="btn btn-warning btn-sm" onclick="payment_btn('+data[i].id+')">Payment</label>'
                        }else if(data[i].payment_status == 2)
                        {
                          table+='<label class="badge badge-gradient-success payment_modal_btn" value="fff"><a class="btn btn-warning btn-sm"    >Payment Done</label>'
                        }else
                        {
                          table+='<label class="badge badge-gradient-success" value="fff"><a class="btn btn-warning btn-sm"    >Amount Pending</label>'
                        }

                      }
                    else if(data[i].status == 0)
                      {
                        table+='<a value='+data[i].id+' onclick="action_btn('+data[i].id+')"  class="delete mx-auto mt-2  mb-2 "><i class="fa fa-trash" ></i></a>'
                     
                      }
                  table+='</td>';
                }
                else
                {
                  table += '<td>'+data[i].subject+'</td>';
                  table += '<td>'+data[i].message+'</td>';
                  table += '<td>'+data[i].appointment_date+'</td>';
                  table += '<td>'+data[i].appointment_id+'</td>';
                  table += '<td>'+data[i].lawer_assigned_name+'</td>';
                  table += '<td>';
                  // if(data[i].status == 1)
                  // {
                    table+='<label class="badge badge-gradient-success payment_modal_btn" value="fff"><a data-toggle="modal" data-target="#payment_modal" class=""  >Declined</label>'

                  // }
                  // else if(data[i].status == 0)
                  // {
                  // table+='<label class="badge badge-gradient-warning">Pending</label>'
                  // }
                  table+='</td>';

                  table += '<td class="list-inline-item">';
                  // if(data[i].status == 1)
                  // {
                  // table+='<button class="btn btn-success">Approve</button>'
                  // }
                  // else if(data[i].status == 0)
                  // {
                  table+='<a value='+data[i].id+' class="delete mx-auto mt-2  mb-2 "><i class="fa fa-trash" ></i></a>'
                  // }
                  table+='</td>';
                }
                table +='</tr>';
              }
              
              $('#appoint_table').html(table);
              
            }
          })
}

setInterval(appoint_check,1000);

// delete specific row of appointment
function action_btn(id){
    // alert(global_data)
    for(i in global_data){
      if(global_data[i].id == id){
      let del_id = global_data[i].id
      $.ajax({
        url:"{{url('delete_appointment')}}",
        type:'get',
        data:{delete_id:del_id},
        success:function(data){
          alert(data);
        }
      })
      }
    }
    // $('#single_appoint_modal').modal('show');
  }

  // payment calling fn
function payment_btn(id){
    // alert(global_data)
    for(i in global_data){
      if(global_data[i].id == id){
        $('#appoint_data').html(global_data[i].appointment_date)
        document.getElementById('appoint_data_input').value = global_data[i].appointment_date
        document.getElementById('appoint_id').value = global_data[i].id
      // let apoint_date = global_data[i].appointment_date
      // let lawyer_assign = global_data[i].lawer_assigned_name
        $('#lawer_assigned_name').html(global_data[i].lawer_assigned_name)
        document.getElementById('lawer_assigned_input').value = global_data[i].lawer_assigned_name
      let amount = global_data[i].payment_amount;
        $('#amount').html(amount)
        document.getElementById('amount_input').value = amount
      // $.ajax({
      //   url:"{{url('delete_appointment')}}",
      //   type:'get',
      //   data:{delete_id:del_id},
      //   success:function(data){
      //     alert(data);
      //   }
      // })
      }
    }
    $('#single_appoint_modal').modal('show');
  }
  // end










</script>

<!-- end -->

<script>
    $('.edit_input').hide();
    $('.label_click').dblclick(function(){
        $(this).find('.txt').hide()
        $(this).find('.edit_input').show()
        $(this).find('.edit_input').focus();
    })
    $('#close_edit_modal').click(function(){
        $('.edit_input').hide();
        $('.txt').show();
    })
    $('.edit_input').blur(function(){
        $(this).hide();
        $(this).siblings('.txt').show();

        let a = $(this).val();
        let att = $(this).attr('id');
        $.ajax({
            url:"{{url('ajax_edit_user_profile')}}",
            type:'get',
            data:{data:a,uni_id:att},
            success:function(data)
            {
                $('#email_txt').html(data[0]['email'])
                $('#user_txt').html(data[0]['username'])
                $('#f_n_txt').html(data[0]['first_name'])
                $('#l_n_txt').html(data[0]['last_name'])
            }
        })
    })
</script>



<script>

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
  $('.password_model_close').click(function(){
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

  // $('#change_password').modal({
  //       show: false,
  //       backdrop: 'static',
  //       keyboard: false
  //   })


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








<!-- JAVASCRIPTS -->
<!-- <script src="plugins/jQuery/jquery.min.js"></script> -->
<script src="user_dashboard/plugins/bootstrap/js/popper.min.js"></script>
<script src="user_dashboard/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="user_dashboard/plugins/bootstrap/js/bootstrap-slider.js"></script>
  <!-- tether js -->
<script src="user_dashboard/plugins/tether/js/tether.min.js"></script>
<script src="user_dashboard/plugins/raty/jquery.raty-fa.js"></script>
<script src="user_dashboard/plugins/slick-carousel/slick/slick.min.js"></script>
<script src="user_dashboard/plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<script src="user_dashboard/plugins/fancybox/jquery.fancybox.pack.js"></script>
<script src="user_dashboard/plugins/smoothscroll/SmoothScroll.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="user_dashboard/plugins/google-map/gmap.js"></script>
<script src="user_dashboard/js/script.js"></script>

<!-- google map -->

</body>

</html>
<!-- end -->