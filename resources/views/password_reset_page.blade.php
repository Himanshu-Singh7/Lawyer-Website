<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<style>

label{
    color:white !important;
    font-size:20px;
}
form .form-control {
    background: rgba(255, 255, 255, 0.15);
    margin-bottom: 20px;
    padding: 2px 10px 2px 0;
    -webkit-border-radius: 35px;
    height:60px;
    
}
form .form-control:focus{
    background: rgba(255, 255, 255, 0.15);
    color:white !important;
    font-size:25px !important;
    padding-left:20px !important;
}
::placeholder{
    padding-left:20px;
    font-size:20px;
    color:white !important;
}


</style>
</head>
<body style='background: linear-gradient(90deg, #C31430, #240B3F);'>







    <div class="container">
    <div class="row " style=' margin:auto; margin-top:20%; z-index:999999;' >
	<div class="col-md-5 mx-auto p-4" style='border-radius:30px;  box-shadow:0px 0px 5px black ;'>
	
	<div id='new_pass_div'>
	<h2 class='text-center mt-3 text-white  '>Enter New Password</h2>
    <form action='{{url("reset-password" , [$tt=$tt ])}}' method='post'>
    @csrf()
				<label for="">New Password </label>
                <input type="hidden" class='form-control'  id="tt" value='{{$tt}}' name='tt'>
				<input type="password" class='form-control' placeholder='new password' name="new_pass" id="new_pass">
				<label for="">Confirm Password</label>
				<input type="password" class='form-control' placeholder='confirm password' name="" id="con_pass">
				<div class='text-center mt-3' >
					<input type="submit" style='display:none' class='btn btn-success mb-5' value="Change Password"  id='submit_pass_btn'>
					<input type="button" class='btn btn-success mb-5' value="Change Password" onclick='new_pas()' id='new_pass_btn'>
				</div>
				</div>		
    </form>
	</div>
	</div>
    </div>

 <script>

function new_pas(){
	let new_pass = $('#new_pass').val();
    let con_pass = $('#con_pass').val();
	if(new_pass == con_pass){
            $('#submit_pass_btn').click();
	}else{
        alert('password are not same');
    }
}

</script> 

</body>
</html>