
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Judge - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
  @extends('navbar')
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Our Legal Advisors</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Attorneys <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
   	

    <section class="ftco-section">
    	<div class="container">
        <div class="row no-gutters">
		@foreach($lawyer_data as $data)
        	<div class="col-lg-3 col-sm-6">
        		<div class="block-2 ftco-animate">
	            <div class="flipper">
	              <div class="front" style='background-image: url({{asset("public/lawer_register/$data->image")}});'>
	                <div class="box">
	                  <h2>{{$data->first_name}}{{$data->last_name}}</h2>
					  @foreach($law_type as $law)
					  @if($law->id == $data->law_type)
	                  <p>{{$law->law_type}}</p>
					  @endif
					  @endforeach
	                </div>
	              </div>
	              <div class="back">
	                <!-- back content -->
	                <blockquote>
	                  <p>&ldquo;{{$law->description}} &rdquo;</p>
	                </blockquote>
	                <div class="author d-flex">
	                  <div class="image align-self-center">
	                    <img src='{{asset("public/lawer_register/$data->image")}}' alt="">
	                  </div>
					  @foreach($law_type as $law)
					  @if($law->id == $data->law_type)
	                  <div class="name align-self-center ml-3">{{$data->first_name}}{{$data->last_name}} <span class="position">{{$law->law_type}}</span></div>
					  @endif
					  @endforeach
	                </div>
	              </div>
	            </div>
	          </div>
        	</div>
		@endforeach
        	
        </div>
    	</div>
    </section>
		

		
<!-- appointment form -->
<section class="ftco-consultation ftco-section img" id='appointment_form' style="background-image: url(images/bg_2.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row d-md-flex justify-content-end">
					<div class="col-md-6 half p-3 p-md-5 ftco-animate heading-section" id='appoint_form'>
						<span class="subheading">Booking an Appointment</span>
						<h2 class="mb-4">Free Consultation</h2>
						@if($errors->any())
						<div class="alert alert-danger">
						<ul class="list-group">
						
						@foreach($errors->all() as $error)
						<li class="list-group-item text-danger">
							{{$error}}
						</li>
						@endforeach
						</ul>
						</div>
						@endif
						<form action="{{route ('appointment.store')}}" method='post' class="consultation">
							@csrf()
							<div class="form-group">
							<input type="text" class="form-control" name='name'  placeholder="Your Name">
							</div>
							<div class="form-group">
							<input type="email" class="form-control" name='email' placeholder="Your Email">
							</div>
							<div class="form-group">
							<select name="law_type" id="" class='form-control'>
							@foreach($law_type as $dd)
							@foreach($appoint_option as $appoint => $value)
								@if($dd->id == $appoint)
								<option value="{{$dd->id}}">{{$dd->law_type}}</option>	
								@endif
							@endforeach
							@endforeach
							</select>
							</div>
							<div class="form-group">
							<input type="text" class="form-control" name='subject' placeholder="Subject">
							</div>
							<div class="form-group">
							<textarea  id="" cols="30" rows="7" name='message' class="form-control" placeholder="Message"></textarea>
							</div>
							<div class="form-group">
							<input type="submit" value="Send message" class="btn btn-primary py-3 px-4">
							</div>
						</form>
					</div>
				</div>
			</div>
    </section>
<!-- appointment form end -->

  <!-- email send -->
  <section class="ftco-section ftco-no-pt ftco-no-pb bg-primary" id='mail_div'>
      <div class="container py-4">
        <div class="row d-flex justify-content-center">
          <div class="col-md-7 ftco-animate d-flex align-items-center">
            <h2 class="mb-0" style="color:white; font-size: 28px;">Get Advice through your mail</h2>
			@if($errors->any())
        <div class="alert alert-danger">
            <ul class="list-group">
                @foreach($errors->all() as $error)
                <li class='list-group-item'>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif   

          </div>
          <div class="col-md-5 d-flex align-items-center">
            <form action="{{url('advice_email_url')}}" method='post' class="subscribe-form">
				@csrf()
              <div class="form-group d-flex">
                <input type="email" class="form-control" name='email' placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
<!-- end -->

    @extends('footer')
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>