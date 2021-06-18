
<!DOCTYPE html>
<html lang="en">
  <head>
  <base href="/public">
    <title>Judge - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i&display=swap" rel="stylesheet">
    <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}" type='text/css'>
    <link rel="stylesheet" href="{{asset('css/animate.css')}}" type='text/css'>
    
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" type='text/css'>
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}" type='text/css'>
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type='text/css'>

    <link rel="stylesheet" href="{{asset('css/aos.css ')}}" type='text/css'>

    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}" type='text/css'>
    
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}" type='text/css'>
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}" type='text/css'>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type='text/css'>
  </head>
  <body>
    
      @extends('navbar')
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Practice Areas</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Practice Areas <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    	<div class="container">
        <div class="row no-gutters d-flex justify-content-center">
        	<div class="col-md-3 text-center">
        		<div class="practice-area border-b no-border-l ftco-animate">
        			<div class="icon d-flex justify-content-center align-items-center">
        				<span class="flaticon-family"></span>
        			</div>
        			<h3>{{$data->law_type}}</h3>
        			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
        		</div>
        	</div>
        </div>
    	</div>
    </section>

<!-- <style>
.input-group{
  width:40% !important;
  margin:auto;
}

.input-group input[type='text']::placeholder{
  color:#908888 !important;
}
.custom-file-uploader {
  position: relative;
  background:red;
  top:10px;
  right:127%;
}
.custom-file-uploader input[type='file'] {
  display: block;
  position: absolute;
  top: 0;
  right: 0 ;
  bottom: 0;
  left: 0;
  z-index: 50000000 !important;
  width: 100%;
  height: 100%;
  opacity: 0;
  cursor: default;
}
 </style>
    
    
          <div class="input-group">
            <input type="text" name="filename" class="form-control" placeholder="No file selected" readonly>
            <span class="input-group-btn">
              <div class="custom-file-uploader">
                <input type="file" name="file" onchange="this.form.filename.value = this.files.length ? this.files[0].name : ''" />
                Select a file
              </div>
            </span>
          </div> -->
         
  




<!-- {{$lawer}} -->
    <!-- <section class="ftco-section"> -->
      <div class="container">
        <div class="row no-gutters d-flex justify-content-center">
        @foreach($lawer as $dd)
          <div class="col-md-4 text-left mb-5 p-5 pb-2 m-2" style='box-shadow: 1px 1px 10px black;' id='{{$dd->id}}'>
            <div class="practice-area border-b no-border-l ftco-animate p-0">
              <div class="icon d-flex justify-content-center align-items-center">
              <button class="btn btn-light" style="position:absolute;top: 0;right: 0;" onclick="openCareerModal({{$dd->id}})">View Career Details</button>
              <span> <img src='{{asset("public/lawer_register/$dd->image")}}' style='width:80%;height:80%; border-radius:20px; box-shadow:2px 2px 5px gray;' alt="{{$dd->image}}"> </span>
              </div>
            <h3 class='mt-2' style='text-transform:capitalize' >{{$dd->first_name}} {{$dd->last_name}}</h3>
            <h4 class='mt-2' >{{$dd->email}}</h4>
            <h5 class='mt-2' >{{$dd->contact}}</h5>

            

            @if(count($career) > 0)
            
            <!-- <h2>Career Details</h2>
            <marquee>These are the  Career detilas of the lawer.</marquee> -->
<!-- 
            <table class="table table-bordered table-hover career_table" style='cursor:pointer'>
              <thead class="thead-dark">
                <tr>
                  <th>Case Name</th>
                  <th>Court Name</th>
                  <th>Case Result</th>
                  <th>Case Description</th>
                </tr>
              </thead>
              <tbody class='table_body text-uppercase'>
                @foreach($career as $e)
                @if($e->uid == $dd->id)
                <tr>
                  <td>{{$e->case_name}}</td>
                  <td>{{$e->court_name}}</td>
                  <td>{{$e->case_statuss}}</td>
                  <td>{{$e->case_description}}</td>
                  
                </tr>
                @endif
    {{$career}}
                @endforeach
              </tbody>
            </table> -->
            @else
            <marquee>The Career <span style='font-weight:bold !important;'> detilas </span> are  not updated yet .</marquee>




            @endif
            <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
            
            </div>
            @if(session()->has('username') && session()->has('id') )
          <button class='btn btn-secondary mt-2'  data-toggle='modal' data-target='#{{$dd->username}}'>Place a Appointment </button>
          <button class='btn btn-info mt-2' onclick="feedback('{{$dd->id}}','{{$dd->first_name}}{{$dd->last_name}}')">Give Feedback </button>
          @else
          <div style='color: rgb(81,86,160);font-weight: bolder;font-size: 18px;' class='mt-2' >Please Login to place a appointment</div>
          @endif
          </div>
        @endforeach
        </div>
        @foreach($lawer as $dd)


  <style>
    .modal-body .form-group .form-control{
      border:2px solid gray !important;
      border-top:none !important;
      border-left:none !important;
    }
    .modal-body .form-group .form-control:focus::placeholder{
      color:red !important; 
      font-size:10px !important ;
      position:absolute !important;
        top:10px !important;   
    }
  </style>



<!-- appointment  Modal -->
  <div class="modal" id="{{$dd->username}}">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Place Appointment</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
        <form action="{{route ('appointment.store')}}" method='post' class="consultation">
              @csrf()
              <div class="form-group">
              <input type="text" class="form-control" name='name' value="{{ Session::get('username') }}" placeholder="Your Name">
              </div>
              <div class="form-group">
              <input type="text" class="form-control" name='email' value="{{Session::get('email')}}"  placeholder="Your Email">
              </div>
              <div class="form-group">
              
                <input type="hidden" name="law_type" value='{{$data->id}}'>
                <input type="hidden" name="lawer_assigned_id" value='{{$dd->id}}'>
                <input type="hidden" name="lawer_assigned_name" value='{{$dd->first_name}}{{$dd->last_name}}'>
                <input type="text" class="form-control" value='{{$data->law_type}}' name='' readonly>
              
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

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>
<!--end appointment  Modal -->


<!-- feedback  Modal -->
  <div class="modal" id="feedback_modal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Your Feedback </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
        <form action="{{url('feedback_form')}}" method='post' class="consultation">
              @csrf()
              <div class="form-group">
              <input type="hidden" class="form-control" name='user_id' value="{{ Session::get('id') }}" placeholder="Your Name">
              <input type="text" class="form-control" name='name' value="{{ Session::get('username') }}" placeholder="Your Name">
              </div>
              <div class="form-group">
              <input type="text" class="form-control" name='email' value="{{Session::get('email')}}"  placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="hidden" name="law_type" value='{{$data->id}}'>
                <input type="hidden" name="law_type_name" value='{{$data->law_type}}'>
                <input type="hidden" name="lawer_assigned_id"  id='lawer_assigned_id'>
                <input type="hidden" name="lawer_assigned_name" id='lawer_assigned_name'>
              <input type="text" class="form-control" value='{{$data->law_type}}' name='' readonly>

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

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger feedback_model_close" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>
<!--end feedback  Modal -->

<!-- feedback  Modal -->
  <div class="modal" id="career_modal">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Your Feedback </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body" id="career_table_data">
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger feedback_model_close" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>
<!--end feedback  Modal -->



@endforeach
      </div>
      
    <!-- </section> -->
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


    <section class="ftco-section ftco-no-pt ftco-no-pb bg-primary">
      <div class="container py-4">
        <div class="row d-flex justify-content-center">
          <div class="col-md-7 ftco-animate d-flex align-items-center">
            <h2 class="mb-0" style="color:white; font-size: 28px;">Subcribe to our Newsletter</h2>
          </div>
          <div class="col-md-5 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    @extends('footer')
    


    <script>
    function feedback(id,name)
    {
      // alert($id);
      $('#lawer_assigned_id').val(id);
      $('#lawer_assigned_name').val(name);
      $('#feedback_modal').modal('show');
    };

    $(function(){
      $('.table_body').hide();
    })
    
    $('.career_table').click(function(){
      $('.table_body').slideToggle('2000');
    })

    function openCareerModal(id){
      var career_data = {!! json_encode($career) !!};
      let tag_name = '<table class="table table-bordered table-hover"><thead class="thead-dark"><tr><th>Case Name</th><th>Court Name</th><th>Case Result</th><th>Case Description</th></tr></thead><tbody class="table-responsive">';
      for(let i=0 ; i<career_data.length ; i++){
        if(career_data[i].uid == id){
          item = career_data[i];
          tag_name +='<tr>';
          tag_name +='<td>'+item.case_name+'</td>';
          tag_name +='<td>'+item.court_name+'</td>';
          tag_name +='<td>'+item.case_statuss+'</td>';
          tag_name +='<td>'+item.case_description+'</td>';
          tag_name +='</tr>';
        }
      }
      tag_name +='</tbody></table>'
      $('#career_table_data').html(tag_name)
      $('#career_modal').modal('show')
    }

    </script>
  

  <!-- loader -->
  <!-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div> -->


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