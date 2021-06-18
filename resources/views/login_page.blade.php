
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('login/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('login/css/main.css')}}">
	<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<!--===============================================================================================-->
</head>
<body>
	





	<div class="limiter">
		<div class="container-login100">
			<div style='position:absolute; top:12px; width:30%;text-align:center'>
			@if(session()->has('error'))
				<div class='alert alert-danger mt-2'>{{session()->get('error')}}</div>
				@endif
				<div class='alert alert-danger mt-2' id='email_error'></div>
			</div >
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{asset('images/person_1.jpg')}}" style='border-radius: 50%;
    box-shadow: 2px 2px 25px grey;' alt="IMG">
				</div>


				<form action='login_check' method='post' class="login100-form validate-form">
				@csrf()
					<span class="login100-form-title">
						Login here
					</span>

					<div class="wrap-input100 validate-input position-relative" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="username" id='username' placeholder="Email" title='Please Fill your Email' required>
						<div id='caps_lock_check' style='display: block;position: absolute;right: -120px;top: 100%;color:red;font-weight:bold'>Capslock is on</div>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input position-relative" data-validate = "Password is required">
						<input class="input100" type="password" name="password" id='password' title='Please Fill your Password' placeholder="Password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<!-- <i class="fa fa-lock" aria-hidden="true"></i> -->
							<!-- <i class="fa fa-unlock-alt" aria-hidden="true"></i> -->
						</span>
						<i class='fa fa-eye' id='pass_icon' onclick='pass_icon()' style='display: block;position: absolute;left: 30px;top: 30%;font-size:18px;font-weight:bold;color: #696868;'></i>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1" >
							Forgot
						</span>
						<a class="txt2" href="" data-toggle="modal" data-target="#email_send">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href='{{url('/')}}' >
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	
	<!-- email send model  -->

	<div id="email_send" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title w-100">Verify by sending email</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<div id='email_send_div'> 
					<input type="text" id='email' placeholder='enter your registered email' class='form-control'>
					<div class='text-center'>
					<input type="button" class='btn btn-success mt-3 ' onclick='email_check()' name="submit" value="Email Check" class='btn btn-success mt-3'>
					</div>
					<p><strong>NOTE:</strong> If your Email is valid you will receive a link to reset your Password.</p>
				</div>		
				
				

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
			</div>

		</div>
	</div>
<!-- email send model  -->

<!-- <script>
$(function(){
	@if(session()->has('token_received'))
	$('#new_pass_div').show();
	@else
	$('#new_pass_div').hide();
	@endif
})
</script> -->

<!-- caps lock script -->

<script>

let caps_lock_check = document.getElementById('caps_lock_check');
let username = document.getElementById('username');
let password = document.getElementById('password');
caps_lock_check.style.display='none';
username.addEventListener("keyup", function(event) {
if (event.getModifierState("CapsLock")) {
    caps_lock_check.style.display = "block";
  } else {
    caps_lock_check.style.display = "none"
  }
});
password.addEventListener("keyup", function(event) {
if (event.getModifierState("CapsLock")) {
    caps_lock_check.style.display = "block";
  } else {
    caps_lock_check.style.display = "none"
  }
});

function pass_icon(){
	let pass_input = document.getElementById('password');
	let pass_icon = document.getElementById('pass_icon');
	if(pass_input.type == 'password'){
		pass_input.type = 'type';
		$(pass_icon).removeClass('fa-eye').addClass('fa-eye-slash');
	}else{
		pass_input.type = 'password';
		$(pass_icon).removeClass('fa-eye-slash').addClass('fa-eye');
	}

}
</script>

<!-- end -->

<script>
	$('#email_error').hide();
function email_check(){
	let c = $('#email').val();
// 	$('#email_send').modal({
//     backdrop: 'static',
//     keyboard: false
// })
	$.ajax({
		url:'{{url("email_send_url")}}',
		type:'get',
		data:{email:c},
		success:function(data){
			if(data == 1){
				window.location.replace('/')
				// $('#new_pass_div').show();
			}else{
				$('#email_send').modal('hide');
				$('#email_error').show();
				$('#email_error').html('Mail is not registered with us');

				
			};
		}
	})
};



</script>







	
<!--===============================================================================================-->	
	<script src="{{asset('login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/tilt/tilt.jquery.min.js')}}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>