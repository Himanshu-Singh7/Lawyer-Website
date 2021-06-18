
<!DOCTYPE html>
<html lang="en">
  <head>
  <base href="/public">

    <title>{{env('APP_NAME')}}</title>
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
	<style>
	.heading{
		font-size: 18px;
    	font-weight: 600;
    	color: #fff;
	}
	#payment_row .services{
		animation: payment_div linear 2s infinite alternate;
	}
	@keyframes payment_div {
			0%   {border-top-left-radius: 0px;border-bottom-right-radius: 0px;box-shadow: 0px 0px 00px white;}
			25%  {border-top-left-radius: 10px;border-bottom-right-radius: 10px;box-shadow: 0px 0px 10px white;}
			50%  {border-top-left-radius: 20px;border-bottom-right-radius: 20px;box-shadow: 0px 0px 20px white;}
			75%  {border-top-left-radius: 30px;border-bottom-right-radius: 30px;box-shadow: 0px 0px 30px white;}
			100% {border-top-left-radius: 40px;border-bottom-right-radius: 40px;box-shadow: 0px 0px 40px white;}
	}
	.one{
		width:100% !important;
	}
	.day{
		font-size:20px !important;
	}
	.topper{
		width:100% !important;
		/* top:30px !important; */
	}
	/* .text{
		position:static !important;
	}
	.block-20{
		position:relative !important;
	} */
	</style>
  </head>
  <body>
    
	 @extends('navbar')
    <!-- END nav -->
    


	
<!-- laravel_message_alerts -->
    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container-fluid px-md-5">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">

			  @if(session()->has('adviser_email_success'))
				<div class="alert alert-info">
				{{session()->get('adviser_email_success')}}
				</div>
				@endif

			  @if(session()->has('login_request'))
				<div class="alert alert-danger">
				{{session()->get('login_request')}}
				</div>
				@endif

				@if(session()->has('appoint_success'))
					<div class="alert alert-success">
					{{session()->get('appoint_success')}}
					</div>
				@endif
				
				@if(session()->has('pass_chng_success'))
					<div class="alert alert-success">
					{{session()->get('pass_chng_success')}}
					</div>
				@endif
				
				@if(session()->has('token_expire'))
					<div class="alert alert-danger">
					{{session()->get('token_expire')}}
					</div>
				@endif
				@if(session()->has('passsword_change_done'))
					<div class="alert alert-success">
					{{session()->get('passsword_change_done')}}
					</div>
				@endif
				@if(session()->has('login_required'))
					<div class="alert alert-success">
					{{session()->get('login_required')}}
					</div>
				@endif
				@if(session()->has('feedback_send'))
					<div class="alert alert-success">
					{{session()->get('feedback_send')}}
					</div>
				@endif

          	<h2 class="subheading">Product Liabilty &amp; Personal Injury</h2>

            <h1 class="mb-4">The Greatest &amp; Strongest Firm You Can Trust</h1>
            <p><a href="javascript:void(0)" id='mail_btn' class="btn-custom mr-md-4">Get Legal Advice <span class="ion-ios-arrow-forward"></span></a> <a href="javascript:void(0)" id='appointment_btn' class="btn-custom">Request A Quote <span class="ion-ios-arrow-forward"></span></a></p>
          </div>
        </div>
      </div>
	</div>
<!-- laravel_message_alerts_end  -->

<!-- payment alert -->
    <section class="ftco-section ftco-no-pb ftco-no-pt services-section ">
      <div class="container-fluid px-md-5 py-3">
	@if(Session::has('username'))
			<div class="row py-4 d-flex " id='payment_row'>


			<div class="col-md-3 services align-self-stretch ftco-animate">
				<div class="media-body">
					<span class="num">01</span>
				<h3 class="heading mb-3"><a href="#">Get Your Legal Advice</a></h3>
				<p class='p_txt'>Far far away, behind the word mountains, far from the countries</p>
				</div>
			</div>





			<!-- <div class="col-md-3 services align-self-stretch ftco-animate">
				<div class="media-body">
					<span class="num">02</span>
				<h3 class="heading mb-3"><a href="#">Work with Expert Lawyers</a></h3>
				<p>Far far away, behind the word mountains, far from the countries</p>
				</div>
			</div>
			<div class="col-md-3 services align-self-stretch ftco-animate">
				<div class="media-body">
					<span class="num">03</span>
				<h3 class="heading mb-3"><a href="#">Have Great Discounted Rates</a></h3>
				<p>Far far away, behind the word mountains, far from the countries</p>
				</div>
			</div>
			<div class="col-md-3 services align-self-stretch ftco-animate">
				<div class="media-body">
					<span class="num">04</span>
				<h3 class="heading mb-3"><a href="#">Review Your Case Documents</a></h3>
				<p>Far far away, behind the word mountains, far from the countries</p>
				</div>
			</div> -->
			</div>
	@else
	<div class="row py-4 d-flex ">
			<div class="col-md-3 mx-auto services align-self-stretch ftco-animate">
				<div class="media-body">
					<span class="num">Your Appointment Payment Status</span>
				<h3 class="heading mb-3"><a href="{{url('login_page')}}">Please Login</a></h3>
				<p class='p_txt'>You have to login first, to access the services.</p>
				</div>
			</div>
	</div>
	@endif
      </div>
    </section>
<!--payment alert end -->
   	
<!-- video section -->
    <section class="ftco-section ftco-no-pt ftco-no-pb" id='video_container'>
    	<div class="container" >
    		<div class="row d-flex">
    			<div class="col-md-6 d-flex">
    				<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end" style="background-image:url(images/about.jpg);">
    					<a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
    						<span class="icon-play"></span>
    					</a>
    				</div>
    			</div>
    			<div class="col-md-6 px-5 py-5">
    				<div class="row justify-content-start pt-3 pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<span class="subheading">Welcome to Judge</span>
		            <h2 class="mb-4">We Always Fight For Your Justice to Win</h2>
		            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
		            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
		            <div class="years d-flex">
		            	<h4 class="number mr-2" data-number="40">0</h4>
			            <h4>Years of Experienced</h4>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>
<!-- video section end -->

<!-- law type lawery devide section  -->
    <section class="ftco-section">
    	<div class="container">
    		<div class="row no-gutters justify-content-center mb-5">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<span class="subheading">Practice Areas</span>
					<h2 class="mb-4">Practice Areas</h2>
				</div>
        	</div>
        	<div class="row no-gutters d-flex justify-content-center">
			@foreach($data as $dd)
				<div class="col-md-3 text-center">
					<div class="practice-area border-b no-border-l ftco-animate">
						<div class="icon d-flex justify-content-center align-items-center">
							<img src='{{asset("public/contact/$dd->image")}}' alt="{{$dd->image}}">
							<!-- <span class="flaticon-family"></span> -->
						</div>
						<h3><a href="{{url('practice_area',[$dd->id])}}">{{$dd->law_type}}</a></h3>
						<p>{{$dd->description}}</p>
        			</div>
        		</div>
				@endforeach
        	</div>
    	</div>
    </section>
<!-- law type lawery devide section end  -->

<!-- single lawyer data -->
    <section class="ftco-section ftco-no-pt">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Our Attorney</span>
            <h2 class="mb-4">Our Legal Attorneys</h2>
          </div>
        </div>
        <div class="row no-gutters">
		@foreach($attorney as $aa)
        	<div class="col-lg-3 col-sm-6">
        		<div class="block-2 ftco-animate">
	            <div class="flipper">
	              <div class="front" style='background-image: url("{{asset("public/lawer_register/$aa->image")}}");'>
	                <div class="box">
	                  <h2 style='text-tranaform:capitalize' >{{$aa->first_name}} {{$aa->last_name}}</h2>
					  @foreach($data as $dd)
					  @if($dd->id == $aa->law_type )
	                  <p>{{$dd->law_type}}</p>
					  @endif
					  @endforeach
	                </div>
	              </div>
	              <div class="back">
	                <!-- back content -->
	                <blockquote>
	                  <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text &rdquo;</p>
	                </blockquote>
	                <div class="author d-flex">
	                  <div class="image align-self-center">
	                    <img src='{{asset("public/lawer_register/$aa->image")}}' alt="ssss">
	                  </div>
	                  <div class="name align-self-center ml-3">{{$aa->first_name}} {{$aa->last_name}} <span class="position"></span></div>
	                </div>
	              </div>
	            </div>
	          </div>
        	</div>
			@endforeach
        	<!-- <div class="col-lg-3 col-sm-6">
        		<div class="block-2 ftco-animate">
	            <div class="flipper">
	              <div class="front" style="background-image: url(/images/person_2.jpg);">
	                <div class="box">
	                  <h2>Jefford Maxillin</h2>
	                  <p>Business Lawyer</p>
	                </div>
	              </div>
	              <div class="back">
	                back content
	                <blockquote>
	                  <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text &rdquo;</p>
	                </blockquote>
	                <div class="author d-flex">
	                  <div class="image align-self-center">
	                    <img src="images/person_2.jpg" alt="">
	                  </div>
	                  <div class="name align-self-center ml-3">Jefford Maxillin<span class="position">Business Lawyer</span></div>
	                </div>
	              </div>
	            </div>
	          </div>
        	</div>
        	<div class="col-lg-3 col-sm-6">
        		<div class="block-2 ftco-animate">
	            <div class="flipper">
	              <div class="front" style="background-image: url(/images/person_3.jpg);">
	                <div class="box">
	                  <h2>Carlos Obing</h2>
	                  <p>Criminal Defense</p>
	                </div>
	              </div>
	              <div class="back">
	                back content
	                <blockquote>
	                  <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text &rdquo;</p>
	                </blockquote>
	                <div class="author d-flex">
	                  <div class="image align-self-center">
	                    <img src="images/person_3.jpg" alt="">
	                  </div>
	                  <div class="name align-self-center ml-3">Carlos Obing <span class="position">Criminal Defense</span></div>
	                </div>
	              </div>
	            </div>
	          </div>
        	</div>
        	<div class="col-lg-3 col-sm-6">
        		<div class="block-2 ftco-animate">
	            <div class="flipper">
	              <div class="front" style="background-image: url(/images/person_4.jpg);">
	                <div class="box">
	                  <h2>Nathan Smith</h2>
	                  <p>Insurance Lawyer</p>
	                </div>
	              </div>
	              <div class="back">
	                back content
	                <blockquote>
	                  <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text &rdquo;</p>
	                </blockquote>
	                <div class="author d-flex">
	                  <div class="image align-self-center">
	                    <img src="images/person_4.jpg" alt="">
	                  </div>
	                  <div class="name align-self-center ml-3">Nathan Smith <span class="position">Insurance Lawyer</span></div>
	                </div>
	              </div>
	            </div>
	          </div>
        	</div> -->
        </div>
    	</div>
    </section>
<!-- single lawyer data end -->

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
							@foreach($data as $dd)
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

<!-- laywers success case section -->
    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-10 text-center heading-section ftco-animate">
          	<span class="subheading">Explore Case Studies</span>
            <h2 class="mb-4">{{count($career_detail)}}+ Completed Cases Successfully</h2>
          </div>
        </div>
        <div class="row">
			@foreach($career_detail as $career)
				@foreach($lawer_detail as $lawer)
					@if($career->uid == $lawer->id )
								
        	<div class="col-md-4 ftco-animate">
				<div class="case img d-flex align-items-center justify-content-center" style='background-image: url("{{asset("public/lawer_register/$lawer->image")}}");'>
					<div class="text text-center">
						<h3><a href="#">{{$career->case_name}}</a></h3>
						<h3><a href="#">{{$career->court_name}}</a></h3>
						<span>	{{$career->case_status}}</span>
						<span>	{{$career->case_description}}</span>
					</div>
        		</div>
        	</div>
					@endif
				@endforeach	 
			@endforeach	 
        </div>
    	</div>
    </section>
<!-- laywers success case section end -->

<!-- feedback -->
    <section class="ftco-section testimony-section ftco-no-pt">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Testimonial</span>
            <h2 class="mb-4">Happy Clients</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- feedback end -->

<!-- Blog Page -->
    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Our Blog</span>
            <h2>Recent Blog</h2>
          </div>
        </div>
        <div class="row d-flex blog_div">
		<div class="preloader">
	    <div class="lds-ellipsis">
	        <span></span>
	        <span></span>
	        <span></span>
			</div>
		</div>

           <!-- <div class="col-md-4 d-flex ftco-animate bg-dark">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text p-4 float-right d-block">
              	<div class="topper d-flex align-items-center">
              		<div class="one py-2 pl-3 pr-1 align-self-stretch">
              			<span class="day">15</span>
              		</div>
              		<div class="two pl-0 pr-3 py-2 align-self-stretch">
              			<span class="yr">2019</span>
              			<span class="mos">August</span>
              		</div>
              	</div>
                <h3 class="heading mt-2"><a href="#">All you want to know about industrial laws</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div> -->
          <!--<div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text p-4 float-right d-block">
              	<div class="topper d-flex align-items-center">
              		<div class="one py-2 pl-3 pr-1 align-self-stretch">
              			<span class="day">12</span>
              		</div>
              		<div class="two pl-0 pr-3 py-2 align-self-stretch">
              			<span class="yr">2019</span>
              			<span class="mos">August</span>
              		</div>
              	</div>
                <h3 class="heading mt-2"><a href="#">All you want to know about industrial laws</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text p-4 float-right d-block">
              	<div class="topper d-flex align-items-center">
              		<div class="one py-2 pl-3 pr-1 align-self-stretch">
              			<span class="day">10</span>
              		</div>
              		<div class="two pl-0 pr-3 py-2 align-self-stretch">
              			<span class="yr">2019</span>
              			<span class="mos">August</span>
              		</div>
              	</div>
                <h3 class="heading mt-2"><a href="#">All you want to know about industrial laws</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </section>
<!-- Blog page end -->
		

<!-- email send -->
    <section class="ftco-section ftco-no-pt ftco-no-pb bg-primary" id='mail_div'>
      <div class="container py-4">
        <div class="row d-flex justify-content-center">
          <div class="col-md-7 ftco-animate d-flex align-items-center">
            <h2 class="mb-0" style="color:white; font-size: 28px;">Get Advice through your mail</h2>
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

<!-- script -->
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
<!-- end -->

<!-- custom scrpit -->
	<script>
		function case_link(d)
		{
			alert(d);
			let url = "{{url('case_link',"+d+")}}";
			url = url.replace('%2Bd%2B',d)
			window.location.href = url;
		}
	</script>
	<script>

	// payment_ajax
		$(function(){
			let media_div = '';
			let num_span = '';
			let heading_h3 = '';
			let p_txr = '';
			function payment_alert(){
				let col_div = '';
				$.ajax({
					url:"{{url('payment_alert_url')}}",
					type:'get',
					success:function(data){
						// alert(JSON.stringify(data));
						for(i in data){
							if(data[i].payment_status == 1){
								col_div += '<div class="col-md-3 mx-auto services align-self-stretch border p-3">'
								col_div += '<div class="media-body">'
								col_div += '<span class="heading">Amount</span><span class="num"> '+data[i].payment_amount+'</span>'
								col_div += '<h3 class="heading mb-3">Lawyer Name <a href="#" class="num">'+data[i].lawer_assigned_name+'</a></h3>'
								col_div += '<span class="heading">Appointment Date<span class="num">'+data[i].appointment_date+'</span> </span>'
								col_div += '</div>'
								col_div += '</div>'
							}
							else {
							// 	col_div += '<div class="col-md-3 mx-auto services align-self-stretch border p-3">'
							// 	col_div += '<div class="media-body">'
							// 	col_div += '<span class="heading">Amount</span><span class="num"> '+00+'</span>'
							// 	col_div += '<h3 class="heading mb-3">You have to place appointment first. <a href="#" class="num"></a></h3>'
							// 	col_div += '<span class="heading">Appointment Date area<span class="num"></span> </span>'
							// 	col_div += '</div>'
							// 	col_div += '</div>'
							$('#video_container').css('border','100px solid red !important')
							}
						}
						$('#payment_row').html(col_div);
					}
				})
			}
			payment_alert();
			setInterval(payment_alert,4000);
		})
	// end

	// appointment form hit
		$("#appointment_btn").click(function() {
			$('html, body').animate({
				scrollTop: $("#appointment_form").offset().top
			}, 1500,function(){
				$('#appoint_form').css('box-shadow','5px 0px 10px grey');
				// $('#appoint_form').css('box-shadow','10px 0px 20px green')
			})
		});
	// end

	// email hit btn
		$("#mail_btn").click(function() {
			$('html, body').animate({
				scrollTop: $("#mail_div").offset().top
			}, 1500,function(){
				$('#mail_div').css('box-shadow','0px -5px 10px white;');
				// $('#appoint_form').css('box-shadow','10px 0px 20px green')
			})
		});
	// end

	// news api
		$('.preloader').css('display','block');
		let blog_col = '';
		$.ajax({
			url:'http://newsapi.org/v2/top-headlines?sources=google-news&apiKey=e156173904764ba29adaf549e09c3738',
			typ:'get',
			success:function(data){
				// alert(JSON.stringify(data));
				let data_article = data['articles'];
				for(d in data_article ){
					// alert(data_article[d]['author']);
					blog_col += '<div class="col-md-4 d-flex mx-auto">'+
								'<div class="blog-entry justify-content-end">'+
								'<a href="blog-single.html" class="block-20" style="background-image: url('+data_article[d]["urlToImage"]+');"></a>'+
									'<div class="text p-4 float-right d-block">'+
										'<div class="topper d-flex align-items-center">'+
											'<div class="one py-2 pl-3 pr-1 align-self-stretch">'+
												'<span class="day">'+data_article[d]['author']+'</span>'+
											'</div>'+
											// '<div class="one py-2 pl-3 pr-1 align-self-stretch">'+
												// '<span class="yr">'+data_article[d]['content']+'</span>'+
												// '<span class="mos">'+data_article[d]['content']+'</span>'+
											// '</div>'+
										'</div>'+
										'<h3 class="heading mt-2"><a href="#">'+data_article[d]['title']+'</a></h3>'+
										'<p class="heading mt-2"><a href="#">'+data_article[d]['description']+'</a></p>'+
									'</div>'+
								'</div>'+
								'</div>';
					// blog_col += data_article[d]['title'];
					// blog_col += data_article[d]['description'];
					// blog_col += data_article[d]['urlToImage'];
					// blog_col += data_article[d]['content'];
					// blog_col += data_article[d]['content'];
				}
				// alert(blog_col);
				$('.preloader').css('display','block');
				$('.blog_div').html(blog_col);

			}
		})
	// end
	
	</script>

	<script>
	$('.ftco-owl').owlCarousel({
    loop:false,
    margin:10,
    nav:true,

    
})
	</script>
<!-- end -->
  </body>
</html>