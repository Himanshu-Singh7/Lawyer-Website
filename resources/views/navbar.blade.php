
<html lang="en">
  <head>
  <base href="/public">
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i&display=swap" rel="stylesheet">

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
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
    .fa-rotate-45 {
    transform: rotate(130deg);
} 
    .fa-rotate-50 {
    transform: rotate(310deg);
} 
.dropdown:hover>.dropdown-menu {
  display: block;
}
.dropdown-menu{
  top:50px !important;
  background:rgba(209, 213, 222,0.55)!important;
  border:none !important;
  left:-60% !important;
}
.dropdown-menu a{
  color:white !important;
  font-weight:bold !important;
}
.dropdown-menu a:hover{
  background:transparent !important;
  color:white !important;
  font-weight:bold !important;
}
.dropdown-link:hover{
  text-decoration:underline !important; 
}
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

<nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" >
	    <div class="container-fluid px-md-5">
	      <a class="navbar-brand" href="{{url('/')}}">Judge <span>A Law Firm</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="{{url('/')}}" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="{{url('about')}}" class="nav-link">About Us</a></li>
	          <!-- <li class="nav-item"><a href="{{url('practice_area')}}" class="nav-link">Practice Areas</a></li> -->
	          <li class="nav-item"><a href="{{url('case')}}" class="nav-link">Case Studies</a></li>
	          <li class="nav-item"><a href="{{url('attorneys')}}" class="nav-link">Lawyer's </a></li>
	          <li class="nav-item"><a href="{{url('blog')}}" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="{{url('contact_page')}}" class="nav-link">Contact</a></li>
            @if(Session::has('username'))
                <li class="nav-item dropdown">
                        <a class='nav-link' data-toggle='dropdown' href=""><span style='text-transform: capitalize'>{{ Session::get('username') }}</span> <i class="fas fa-location-arrow fa-rotate-45"></i> </a>
                        <div class='dropdown-menu px-1'>
                          <a class='dropdown-item px-1' href="{{ url('/dashboard_page') }}">Dashboard Page</a>
                          <a class='dropdown-item px-1' href="{{ url('/logout_link') }}">logout</a>
                        </div>
				        </li>
                @else
                <li class="nav-item">
                                <a class='nav-link' href="{{ url('login_page') }}">Login</a>
                </li>
                <li class='nav-item dropdown '>
                  <a href="" class='nav-link' data-toggle='dropdown'>Register</a>
                  <div class="dropdown-menu pl-2 ">
                                    <a class='dropdown-link' style='color:white !important' href="{{ url('register_user')}}">Register as user</a>
                                    <a class='dropdown-link' style='color:white !important' href="{{ url('register_lawer') }}">Register as Lawer</a>
                  </div> 
                </li>
            @endif
      </ul>

      <script>
      $(function(){
        $('.dropdown').mouseover(function(){
            $('.fa-location-arrow').removeClass('fa-rotate-45').addClass('fa-rotate-50');
        });
        $('.dropdown').mouseout(function(){
            $('.fa-location-arrow').addClass('fa-rotate-45').removeClass('fa-rotate-50');
        });
      })
      </script>


	      </div>
	    </div>
    </nav>
    
    <!-- @yield('content') -->

     